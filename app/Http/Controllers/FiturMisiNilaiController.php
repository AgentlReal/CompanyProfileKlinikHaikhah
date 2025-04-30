<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FiturMisiNilai;

class FiturMisiNilaiController extends Controller
{
    public function index()
    {
        $fiturmisinilai = FiturMisiNilai::all();
        return view('tentang-kami', ['fiturmisinilai' => $fiturmisinilai]);
    }

    public function store(Request $request)
    {
        FiturMisiNilai::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $fiturmisinilai = FiturMisiNilai::findOrFail($id);
        $fiturmisinilai->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $fiturmisinilai = FiturMisiNilai::findOrFail($id);
        $fiturmisinilai->delete();
        return redirect()->back();
    }
}
