<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Berita;

class HomeController extends Controller
{
    
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
    	$breaking_news = Berita::limit(5)->offset(0)->get(['judul_berita']);
    	$sliders = Berita::limit(3)->offset(0)->get();
    	$slider_sides = Berita::limit(2)->offset(1)->get();

    	// return $sliders;
    	return view('modules.home', compact(
    		'tanggal_sekarang', 
    		'breaking_news', 
    		'sliders', 
    		'slider_sides'
    	));
    }
}
