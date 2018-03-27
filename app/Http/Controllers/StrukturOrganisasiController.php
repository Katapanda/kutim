<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yajra\DataTables\Datatables;

use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        return view('admin.modules.so.index');
    }
    public function so()
    {
        return view('admin.modules.so.so', ['menu' => 'so']);
    } 
    public function detail($jabatan)
    {
        $so = StrukturOrganisasi::where('jabatan', $jabatan)->get();

        // $so = StrukturOrganisasi::find($id);
        return $so;
    }

    public function store(Request $request)
    {
        $input = $request->all();
        // $data = [
        //     'nama' => $request['nama'],
        //     'email' => $request['email'],
        //     'jabatan' => $request['jabatan'],
        //     'bidang' => $request['bidang'],
        //     'sub_bidang' => $request['sub_bidang']
        // ];

        StrukturOrganisasi::create($input);
        return response()->json([
            'success' => true,
            'message' => 'SO Created'
        ]);
    }
    public function edit($id)
    {
        $so = StrukturOrganisasi::find($id);
        return $so;
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $so = StrukturOrganisasi::findOrFail($id);
        $so->update($input);

        return response()->json([
            'success' => true,
            'message' => 'StrukturOrganisasi Updated'
        ]);
    }
    public function destroy($id)
    {
        
        $so = StrukturOrganisasi::findOrFail($id);
        StrukturOrganisasi::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'StrukturOrganisasi Deleted'
        ]);
    }
    public function apiSO(Request $request)
    {
        // $so = StrukturOrganisasi::all();
        $so = StrukturOrganisasi::select(['id', 'nama', 'nip', 'email', 'jabatan', 'bidang']);
        // print_r($agenda);
        return Datatables::of($so)
            ->filter(function ($query) use ($request) {
                if ($request->has('nama')) {
                    $query->where('nama', 'like', "%{$request->get('nama')}%");
                }

                if ($request->has('email')) {
                    $query->where('email', 'like', "%{$request->get('email')}%");
                }
            })
            ->addColumn('action', function($so){
                return '<a href="'.url("admin/so/detail/".$so->id).'" class="btn btn-inverse-warning waves-effect waves-light btn-sm"> <i class="icofont icofont-edit-alt"></i> Detail</a>'.
                    '<a onclick="editForm('. $so->id .')" class="btn btn-inverse-warning waves-effect waves-light btn-sm"> <i class="icofont icofont-edit-alt"></i> Edit</a>'.
                    '<a onclick="deleteData('. $so->id .')" class="btn btn-inverse-danger waves-effect waves-light btn-sm">
                            <i class="icofont icofont-delete-alt"></i> Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
}

