<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Pengumuman;
use App\Models\Info;

class HomeController extends Controller
{
    public function index()
    {
        $contact = Info::first();
    	return view('home.index',[
            'agenda' => Agenda::with(['user'])->latest()->take(2)->get(),
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
            'info' => Info::first()
        ], compact('contact'));
    }

    public function about()
    {
        $contact = Info::first();
    	return view('home.about', compact('contact'));
    }

    public function contact()
    {
        $contact = Info::first();
    	return view('home.contact', compact('contact'));
    }
}
