<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Sambutan;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $sambutans = Sambutan::limit(1)->offset(0)->get();
        $visi_misi = VisiMisi::limit(1)->offset(0)->get();
        
    	return view('modules.visi_misi', compact(
    		'sambutans',
    		'visi_misi'
    	));
    }
}
