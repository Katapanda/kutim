<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use yajra\DataTables\Datatables;

use App\Models\Keluhan;

class KeluhanController extends Controller
{
    public function index()
    {
        return view('admin.modules.keluhan.index');
    }

    public function apiKeluhan(Request $request)
    {
        // $keluhan = Keluhan::all();
        $keluhan = Keluhan::select(['id', 'judul_keluhan', 'isi_keluhan', 'foto'])->orderBy('id','desc');
        // print_r($keluhan);
        return Datatables::of($keluhan)
            ->filter(function ($query) use ($request) {
                if ($request->has('judul_keluhan')) {
                    $query->where('judul_keluhan', 'like', "%{$request->get('judul_keluhan')}%");
                }

                if ($request->has('isi_keluhan')) {
                    $query->where('isi_keluhan', 'like', "%{$request->get('isi_keluhan')}%");
                }
            })
             ->addColumn('foto', function($keluhan){
                if ($keluhan->foto == NULL){
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'. url($keluhan->foto) .'" alt="">';
            })
            ->rawColumns(['foto'])->make(true);
    }
}
