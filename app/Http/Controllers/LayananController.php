<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

class LayananController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('layanan', compact('kontak'));
    }
}
