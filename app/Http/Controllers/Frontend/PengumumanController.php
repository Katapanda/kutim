<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Kontak;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $kontak = Kontak::limit(1)->offset(0)->get();
        $pengumuman = Pengumuman::limit(4)->offset(0)->get();
        
    	return view('modules.pengumuman.index', compact(
    		'kontak',
            'pengumuman'
    	));
    }

    public function detail($id)
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $kontak = Kontak::limit(1)->offset(0)->get();
        $pengumuman = Pengumuman::get();
        
    	return view('modules.pengumuman.detail', compact(
    		'tanggal_sekarang',
            'kontak',
            'pengumuman'
    	));
    }
}
