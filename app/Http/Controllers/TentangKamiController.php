<?php

namespace App\Http\Controllers;

use App\Models\MisiNilai;
use App\Models\Pencapaian;
use App\Models\Perjalanan;
use App\Models\TimManajemen;
use App\Models\Kontak;

class TentangKamiController extends Controller
{
    public function index()
    {
        $misinilai = MisiNilai::with('fiturs')->get();
        $pencapaian = Pencapaian::all();
        $perjalanan = Perjalanan::orderBy('tahun')->get();
        $timmanajemen = TimManajemen::all();
        $kontak = Kontak::all();
        return view('tentang-kami', compact('misinilai', 'pencapaian', 'perjalanan', 'timmanajemen', 'kontak'));
    }
}
