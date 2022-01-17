<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtikelRequest as Request;

use App\Models\Artikel;
use App\Models\Info;

class ArtikelController extends Controller
{
    public function index()
    {
        $contact = Info::first();
    	$artikel = Artikel::with(['user','kategoriArtikel'])->latest()->paginate(4);
    	return view('artikel.index',compact('artikel', 'contact'));
    }

    public function show(Artikel $artikel)
    {
        $contact = Info::first();
    	return view('artikel.show',compact('artikel', 'contact'));
    }

    public function search(Request $request)
    {	
        $contact = Info::first();
    	$artikel = Artikel::with(['user','kategoriArtikel'])->where(function($query) use ($request){
    		$query->where('judul','like','%'.$request->keyword.'%')
            ->orWhere('deskripsi','like','%'.$request->keyword.'%');
    	})->paginate(4);

    	return view('artikel.index',compact('artikel', 'contact'));
    }
}