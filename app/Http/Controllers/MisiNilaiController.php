<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisiNilai;

class MisiNilaiController extends Controller
{
    public function index()
    {
        $misinilai = MisiNilai::all();
        return view('tentang-kami', ['misinilai' => $misinilai]);
    }

    public function store(Request $request)
    {
        MisiNilai::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $misinilai = MisiNilai::findOrFail($id);
        $misinilai->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $misinilai = MisiNilai::findOrFail($id);
        $misinilai->delete();
        return redirect()->back();
    }
}
