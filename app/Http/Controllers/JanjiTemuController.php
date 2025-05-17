<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\JanjiTemu;
use Illuminate\Http\Request;

class JanjiTemuController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('janji-temu', compact('kontak'));
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
            'catatan_tamabahan' => 'nullable',
        ]);

        $data = $request->all();
        $data['status'] = 'pending';

        JanjiTemu::create($data);

        return redirect()->back()->with('success', 'Janji berhasil dibuat!');
    }
}
