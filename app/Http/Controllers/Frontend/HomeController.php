<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Berita;

class HomeController extends Controller
{
    
    public function index()
    {
    	$sliders = Berita::limit(3)->offset(0)->get();
    	$slider_sides = Berita::limit(2)->offset(3)->get();

    	// return $sliders;
    	return view('modules.home', compact('sliders', 'slider_sides'));
    }
}
