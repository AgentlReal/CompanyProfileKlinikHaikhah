<?php

namespace App\Http\Controllers;

use App\Models\RuangPenerimaan;
use App\Models\RuangB;
use App\Models\AreaC;
use App\Models\AreaD;
use App\Models\Kontak;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $ruangpenerimaan = RuangPenerimaan::with('fiturs')->get();
        $ruangb = RuangB::with('fiturs')->get();
        $areac = AreaC::with('fiturs')->get();
        $aread = AreaD::with('fiturs')->get();
        $kontak = Kontak::all();
        return view('fasilitas', compact('ruangpenerimaan', 'ruangb', 'areac', 'aread', 'kontak'));
    }
}
