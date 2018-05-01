<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yajra\DataTables\Datatables;

use App\Models\Bidang;
use App\Models\KategoriBidang;

class BidangController extends Controller
{
    public function index()
    {
        // die($kategori);
        return view('admin.modules.bidang.index');
    }
    public function editisi($id)
    {
        $bidang = Bidang::find($id);
        return view('admin.modules.bidang.editbidang', ['isi' => $bidang]);
    }
    public function ajax_tampil($id)
    {
        $bidang = Bidang::find($id);
        return view('admin.modules.bidang.ajaxtampil', ['isi' => $bidang]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        
        Bidang::create($input);

        return redirect()->action('BidangController@index')->with(['success' => 'Berhasil Tambah Data']);
    }
    public function edit($id)
    {
        $bidang = Bidang::find($id);
        return $bidang;
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $bidang = Bidang::find($id);

        if ($bidang->update($input)) {
            return redirect()->action('BidangController@index')->with(['success' => 'Berhasil Ubah Data']);
        } else {
            return redirect()->action('BidangController@index')->with(['error' => 'Mohon Maaf Terjad Kesalahan, Data Tidak Berhasil DI Ubah']);
        }
        // return $bidang;
    }
    public function ubah(Request $request, $id)
    {
        $input = $request->all();
        $bidang = Bidang::find($id);

        if ($bidang->update($input)) {
            return redirect()->action('BidangController@index')->with(['success' => 'Berhasil Ubah Data']);
        } else {
            return redirect()->action('BidangController@index')->with(['error' => 'Mohon Maaf Terjad Kesalahan, Data Tidak Berhasil DI Ubah']);
        }
    }
    public function destroy($id)
    {
        
        $bidang = Bidang::findOrFail($id);

        Bidang::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Bidang Deleted'
        ]);
    }

    public function apiBidang(Request $request)
    {
        $bidang = Bidang::select(['id', 'judul', 'isi_bidang']);
        // print_r($agenda);
        return Datatables::of($bidang)
            ->filter(function ($query) use ($request) {
                if ($request->has('judul')) {
                    $query->where('judul', 'like', "%{$request->get('judul')}%");
                }

                if ($request->has('isi_bidang')) {
                    $query->where('isi_bidang', 'like', "%{$request->get('isi_bidang')}%");
                }
            })
            ->addColumn('isi_bidang', function($bidang){
                return $bidang->isi_bidang;
            })
            ->addColumn('action', function($bidang){
                return '<a href="'.url("admin/bidang/editisi",$bidang->id).'" class="btn btn-inverse-warning waves-effect waves-light btn-sm"> <i class="icofont icofont-edit-alt"></i> Edit</a>'.
                    '<a onclick="deleteData('. $bidang->id .')" class="btn btn-inverse-danger waves-effect waves-light btn-sm">
                            <i class="icofont icofont-delete-alt"></i> Delete</a>';
            })
            ->rawColumns(['isi_bidang','action'])->make(true);
    }
}
