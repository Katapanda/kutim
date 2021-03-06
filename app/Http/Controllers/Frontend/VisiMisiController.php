<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Kontak;
use App\Models\VisiMisi;
use App\Models\Bidang;

class VisiMisiController extends Controller
{
    public function index()
    {
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $visi_misi = VisiMisi::limit(1)->offset(0)->get();
        
    	return view('modules.visi_misi', compact(
            'bidang',
            'kontak',
            'tanggal_sekarang',
    		'visi_misi'
    	));
    }
}
