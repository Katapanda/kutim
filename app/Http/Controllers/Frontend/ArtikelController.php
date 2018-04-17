<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Sambutan;

class ArtikelController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $sambutans = Sambutan::limit(1)->offset(0)->get();

    	return view('modules.artikel.index', compact(
    		'sambutans'
    	));
    }

    public function detail($id)
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $sambutans = Sambutan::limit(1)->offset(0)->get();
        
    	return view('modules.artikel.detail', compact(
    		'sambutans'
    	));
    }
}
