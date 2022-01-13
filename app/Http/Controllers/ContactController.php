<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Pesan;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(Request $request) {
        
        if (auth()->check()) {
            $pesan = new Pesan();
            $pesan->nama = $request->nama;
            $pesan->email = $request->email;
            $pesan->pesan = $request->pesan;
            $pesan->user_id = auth()->user()->id;
            $pesan->save();

            \Mail::to($request->email)->send(new ContactEmail($pesan));
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
}
