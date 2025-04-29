<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FiturC;

class FiturCcontroller extends Controller
{
    public function index()
    {
        $fiturc = FiturC::all();
        return view('fasilitas', ['fiturc' => $fiturc]);
    }

    public function store(Request $request)
    {
        FiturC::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $fiturc = FiturC::findOrFail($id);
        $fiturc->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $fiturc = FiturC::findOrFail($id);
        $fiturc->delete();
        return redirect()->back();
    }
}
