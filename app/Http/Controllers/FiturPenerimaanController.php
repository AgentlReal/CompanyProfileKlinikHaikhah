<?php

namespace App\Http\Controllers;

use App\Models\FiturPenerimaan;
use Illuminate\Http\Request;

class FiturPenerimaanController extends Controller
{
    public function index()
    {
        $fiturpenerimaan = FiturPenerimaan::all();
        return view('fasilitas', ['fiturpenerimaan' => $fiturpenerimaan]);
    }

    public function store(Request $request)
    {
        FiturPenerimaan::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $fiturpenerimaan = FiturPenerimaan::findOrFail($id);
        $fiturpenerimaan->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $fiturpenerimaan = FiturPenerimaan::findOrFail($id);
        $fiturpenerimaan->delete();
        return redirect()->back();
    }
}
