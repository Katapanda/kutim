<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Berita;
use App\Models\DetailAlbum;
use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Sambutan;
use App\Models\Bidang;
use App\Models\Video;

class BerandaController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $agenda     = Agenda::get();
        $artikel    = Artikel::get();
        $berita     = Berita::get();
        $foto       = DetailAlbum::limit(4)->offset(0)->get();
        $kontak     = Kontak::limit(1)->offset(0)->get();
        $pengumuman = Pengumuman::get();
        $bidang     = Bidang::get();
        $sambutan   = Sambutan::limit(1)->offset(0)->get();
        $video      = Video::limit(1)->offset(0)->get();

    	return view('modules.home', compact(
            'agenda',
            'artikel',
            'berita',
            'foto',
            'kontak',
            'pengumuman',
            'bidang',
    		'sambutan',
            'video'
    	));
    }
    public function detail($id)
    {
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $agenda     = Agenda::get();
        $artikel    = Artikel::get();
        $foto       = DetailAlbum::limit(4)->offset(0)->get();
        $berita     = Berita::get();
        $kontak     = Kontak::limit(1)->offset(0)->get();
        $pengumuman = Pengumuman::get();
        $bidang     = Bidang::get();
        $bidang_detail     = Bidang::find($id);
        $sambutan   = Sambutan::limit(1)->offset(0)->get();
        $video      = Video::limit(4)->offset(0)->get();

        // return view('modules.home', compact(
        //     'agenda',
        //     'artikel',
        //     'berita',
        //     'foto',
        //     'kontak',
        //     'pengumuman',
        //     'bidang',
        //     'sambutan',
        //     'video'
        // ));

        return view('modules.bidang', compact(
            'agenda',
            'artikel',
            'berita',
            'kontak',
            'pengumuman',
            'bidang',
            'bidang_detail',
            'sambutan'
        ));
    }
}
