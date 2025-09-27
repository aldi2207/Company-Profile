<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function post(request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        Contact::create([
            'nama_lengkap' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);
        return redirect()->route('contact') // Ganti ke route daftar artikel Anda
            ->with('success', 'Berhasil Mengirim Pesan!');
    }
}
