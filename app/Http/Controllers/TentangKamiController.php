<?php

namespace App\Http\Controllers;
use App\Models\MisiNilai;

class TentangKamiController extends Controller
{
    public function index()
    {
        $misinilai = MisiNilai::with('fiturs')->get();
        return view('tentang-kami', compact('misinilai'));
    }
}
