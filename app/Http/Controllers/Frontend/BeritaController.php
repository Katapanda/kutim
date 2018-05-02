<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Bidang;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::get();
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));

    	return view('modules.berita.index', compact(
            'berita',
            'bidang',
    		'kontak'
    	));
    }

    public function detail($id)
    {
        $berita = Berita::get();
        $berita_detail = Berita::find($id);
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        
    	return view('modules.berita.detail', compact(
            'berita',
            'bidang',
            'berita_detail',
    		'kontak'
    	));
    }
}
