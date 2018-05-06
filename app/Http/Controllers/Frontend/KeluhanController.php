<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Keluhan;
use App\Models\Kontak;
use App\Models\Bidang;

class KeluhanController extends Controller
{
	public function index()
    {
        $bidang = Bidang::get();
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $kontak = Kontak::limit(1)->offset(0)->get();
        
    	return view('modules.keluhan', compact(
    		'bidang',
    		'kontak'
    	));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['foto'] = null;

        if ($request->hasFile('foto')){
            $input['foto'] = '/upload/foto_artikel/'.str_slug($input['judul_keluhan'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/foto_artikel/'), $input['foto']);
        }
        Keluhan::create($input);
        
        return redirect()->action('Frontend\KeluhanController@index')->with(['success' => 'Berhasil Tambah Data']);
    }
}
