<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Album;
use App\Models\Berita;
use App\Models\Sambutan;
use App\Models\Video;

class BeritaController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $sambutan = Sambutan::limit(1)->offset(0)->get();
    	
    	// $berita = Berita::limit(25)->offset(0)->get();
    	// $breaking_news = Berita::limit(5)->offset(0)->get(['id','judul_berita']);
    	// $sliders = Berita::limit(3)->offset(0)->get();
    	// $slider_sides = Berita::limit(2)->offset(1)->get();
        
     //    $photos = Album::limit(1)->offset(0)->get();
     //    $videos = Video::limit(1)->offset(0)->get();

    	return view('modules.berita.index', compact(
    		'sambutan'
    	));
    }

    public function detail($id)
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $sambutan = Sambutan::limit(1)->offset(0)->get();
        
    	return view('modules.berita.detail', compact(
    		'sambutan'
    	));
    }
}
