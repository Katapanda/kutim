<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Kontak;
use App\Models\Video;
use App\Models\Bidang;

class VideoController extends Controller
{
    public function index()
    {
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
    	$video = Video::get();
        
    	return view('modules.video', compact(
            'bidang',
    		'kontak',
    		'video'
    	));
    }
}
