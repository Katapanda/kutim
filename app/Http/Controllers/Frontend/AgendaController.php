<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Agenda;
use App\Models\Kontak;
use App\Models\Bidang;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::limit(4)->offset(0)->get();
        $bidang = Bidang::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        $tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));

    	return view('modules.agenda.index', compact(
            'agenda',
            'bidang',
            'kontak',
            'tanggal_sekarang'
    	));
    }

    public function detail($id)
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $agenda = Agenda::get();
        $bidang = Bidang::get();
        $agenda_detail = Agenda::find($id);
        $kontak = Kontak::limit(1)->offset(0)->get();
        
    	return view('modules.agenda.detail', compact(
            'agenda',
            'bidang',
            'agenda_detail',
            'kontak',
            'tanggal_sekarang'
    	));
    }
}
