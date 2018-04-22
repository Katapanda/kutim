<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\DasarHukum;

class DasarHukumController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
    	$dasar_hukum = DasarHukum::limit(1)->offset(0)->get();
        
    	return view('modules.dasar_hukum', compact(
    		'tanggal_sekarang',
    		'dasar_hukum'
    	));
    }
}
