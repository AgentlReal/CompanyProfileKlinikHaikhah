<?php

namespace App\Http\Controllers;

use App\Models\RuangPenerimaan;
use App\Models\RuangB;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $ruangpenerimaan = RuangPenerimaan::with('fiturs')->get();
        $ruangb = RuangB::with('fiturs')->get();
        return view('fasilitas', compact('ruangpenerimaan', 'ruangb'));
    }
}
