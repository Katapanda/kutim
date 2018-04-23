<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Kontak;

class VideoController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $kontak = Kontak::limit(1)->offset(0)->get();
        
    	return view('modules.video', compact(
    		'kontak'
    	));
    }
}
