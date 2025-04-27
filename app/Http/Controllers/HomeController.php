<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use App\Models\Pelayanan; 
use App\Models\Mengapa;
use App\Models\Dokter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        $pelayanan = Pelayanan::all(); 
        $mengapa = Mengapa::all();
        $dokter = Dokter::all();
        return view('index', [
            'kontak' => $kontak,
            'pelayanan' => $pelayanan,
            'mengapa' => $mengapa,
            'dokter' => $dokter
        ]);
    }
}
