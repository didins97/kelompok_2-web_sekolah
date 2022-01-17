<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $contact = Info::first();
    	$pengumuman = Pengumuman::with(['user'])->latest()->paginate(4);
    	return view('pengumuman.index',compact('pengumuman', 'contact'));
    }

    public function show(Pengumuman $pengumuman)
    {
        $contact = Info::first();
    	return view('pengumuman.show',compact('pengumuman', 'contact'));
    }
}
