<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\VisiMisi;
use App\Models\Kontak;

class VisiMisiController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $kontak = Kontak::limit(1)->offset(0)->get();
        $visi_misi = VisiMisi::limit(1)->offset(0)->get();
        
    	return view('modules.visi_misi', compact(
    		'tanggal_sekarang',
            'kontak',
    		'visi_misi'
    	));
    }
}
