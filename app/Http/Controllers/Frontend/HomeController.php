<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Berita;
use App\Models\Artikel;
use App\Models\Sambutan;

class HomeController extends Controller
{
    
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
    	$breaking_news = Berita::limit(5)->offset(0)->get(['judul_berita']);
    	$sliders = Berita::limit(3)->offset(0)->get();
    	$slider_sides = Berita::limit(2)->offset(1)->get();
        $artikel_paling_terbaru = Artikel::limit(1)->get();
        // $artikel_page_1 = Artikel::limit(4)->offset(1)->get();
        $artikel_page_1 = Artikel::limit(4)->offset(0)->get();
        $artikel_page_2 = Artikel::limit(4)->offset(4)->get();
        $sambutans = Sambutan::limit(1)->offset(0)->get();

    	// return $sliders;
    	return view('modules.home', compact(
    		'sambutans',
            'tanggal_sekarang', 
    		'breaking_news', 
    		'sliders', 
    		'slider_sides',
            'artikel_paling_terbaru',
            'artikel_page_1',
            'artikel_page_2'
    	));
    }

    public function tes()
    {
        $artikel_paling_terbaru = Artikel::limit(1)->get();

        return $artikel_paling_terbaru;
    }
}
