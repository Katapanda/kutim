<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Agenda;
use App\Models\Kontak;

class AgendaController extends Controller
{
    public function index()
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $agenda = Agenda::limit(4)->offset(0)->get();
        $kontak = Kontak::limit(1)->offset(0)->get();

    	return view('modules.agenda.index', compact(
    		'tanggal_sekarang',
            'agenda',
            'kontak'
    	));
    }

    public function detail($id)
    {
    	$tanggal_sekarang = date('Y-m-d', strtotime(DB::raw(now())));
        $agenda = Agenda::get();
        $kontak = Kontak::limit(1)->offset(0)->get();
        
    	return view('modules.agenda.detail', compact(
    		'tanggal_sekarang',
            'agenda',
            'kontak'
    	));
    }
}
