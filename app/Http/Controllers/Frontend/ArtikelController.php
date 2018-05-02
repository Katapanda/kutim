<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Artikel;
use App\Models\Kontak;
use App\Models\Bidang;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::get();
        $artikel_detail = Artikel::find(1);
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));

    	return view('modules.artikel.index', compact(
            'artikel',
            'artikel_detail',
            'bidang',
            'kontak',
            'tanggal_sekarang'
    	));
    }

    public function detail($id)
    {
        $artikel = Artikel::get();
        $artikel_detail = Artikel::find($id);
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        
    	return view('modules.artikel.detail', compact(
            'artikel',
            'artikel_detail',
            'bidang',
            'kontak',
            'tanggal_sekarang'
    	));
    }
}
