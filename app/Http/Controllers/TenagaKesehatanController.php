<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

class TenagaKesehatanController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('tenaga-kesehatan', compact('kontak'));
    }
}
