<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
    	$agenda = Agenda::with(['user'])->latest()->paginate(4);
    	return view('agenda.index',compact('agenda'));
    }

    // public function show(Artikel $artikel)
    // {
    // 	return view('artikel.show',compact('artikel'));
    // }

    // public function search(Request $request)
    // {	
    // 	$artikel = Artikel::with(['user','kategoriArtikel'])->where(function($query) use ($request){
    // 		$query->where('judul','like','%'.$request->keyword.'%')
    //         ->orWhere('deskripsi','like','%'.$request->keyword.'%');
    // 	})->paginate(4);

    // 	return view('artikel.index',compact('artikel'));
    // }
}
