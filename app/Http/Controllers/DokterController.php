<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all(); 
        return view('index', ['dokter' => $dokter]);
    }

    public function store(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->back();
    }
}
