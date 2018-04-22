<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DasarHukumController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        
    	return view('modules.dasar_hukum', compact(
    		'tanggal_sekarang'
    	));
    }
}