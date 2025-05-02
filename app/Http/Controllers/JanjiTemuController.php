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
            'layanan' => 'required|in:Konsultasi Umum,Konsultasi Spesialis,Perawatan Gigi,Kesehatan Anak,Medical Check-up',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'Keluhan_Gejala' => 'nullable',
            'catatan_tamabahan' => 'nullable'
        ]);

        JanjiTemu::create($request->all());

        return redirect()->back()->with('success', 'Janji berhasil dibuat!');
    }
}
