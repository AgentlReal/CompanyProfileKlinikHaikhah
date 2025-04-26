<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // BACA (READ)
    public function index()
    {
        $kontak = Kontak::all(); // ambil semua kontak
        return view('index', ['kontak' => $kontak]);
    }

    // TAMBAH (CREATE)
    public function store(Request $request)
    {
        Kontak::create($request->all());
        return redirect()->back();
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());
        return redirect()->back();
    }

    // HAPUS (DELETE)
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->back();
    }
}
