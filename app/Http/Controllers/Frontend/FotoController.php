<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\DetailAlbum;
use App\Models\Kontak;
use App\Models\Bidang;

class FotoController extends Controller
{
    public function index()
    {
        $bidang = Bidang::get();
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
    	// $foto = DetailAlbum::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $foto = DetailAlbum::leftJoin('album', 'foto_album.id_album', '=', 'album.id')
            ->select(
                'album.judul_album', 
                'album.keterangan_kegiatan', 
                'foto_album.foto'
            )->get();
        
    	return view('modules.foto', compact(
            'bidang',
    		'foto',
    		'kontak'
    	));
    }
}
