<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Berita;
use App\Models\Artikel;
use App\Models\Sambutan;
use App\Models\Video;
use App\Models\Album;

class BerandaController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $sambutan = Sambutan::limit(1)->offset(0)->get();

     //    $breaking_news = Berita::limit(5)->offset(0)->get(['id','judul_berita']);
    	// $sliders = Berita::limit(3)->offset(0)->get();
    	// $slider_sides = Berita::limit(2)->offset(1)->get();
     //    $artikel_paling_terbaru = Artikel::limit(1)->get();
     //    // $artikel_page_1 = Artikel::limit(4)->offset(1)->get();
     //    $artikel_page_1 = Artikel::limit(7)->offset(0)->get();
     //    $artikel_page_2 = Artikel::limit(4)->offset(4)->get();
     //    $videos = Video::limit(1)->offset(0)->get();
     //    $photos = Album::limit(1)->offset(0)->get();

    	// return $sliders;
    	return view('modules.home', compact(
    		'sambutan'
    	));
    }
}
