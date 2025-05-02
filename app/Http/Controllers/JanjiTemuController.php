<?php

namespace App\Http\Controllers;

use App\Models\JanjiTemu;
use Illuminate\Http\Request;

class JanjiTemuController extends Controller
{
    public function index()
    {
       
        return view('janji-temu'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'nullable|email',
            'layanan' => 'required|in:Pemeriksaan Umum,Konsultasi Dokter,Tes Laboratorium,Vaksinasi,Kesehatan Anak',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'Keluhan_Gejala' => 'nullable',
            'catatan_tambahan' => 'nullable'
        ]);

        JanjiTemu::create($request->all());

        return redirect()->back()->with('success', 'Janji berhasil dibuat!');
    }

   
}
