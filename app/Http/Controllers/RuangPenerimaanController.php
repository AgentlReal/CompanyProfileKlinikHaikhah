<?php

namespace App\Http\Controllers;

use App\Models\RuangPenerimaan;
use Illuminate\Http\Request;

class RuangPenerimaanController extends Controller
{
    public function index()
    {
        $ruangpenerimaan = RuangPenerimaan::all();
        return view('fasilitas', ['ruangpenerimaan' => $ruangpenerimaan]);
    }

    public function store(Request $request)
    {
        RuangPenerimaan::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $ruangpenerimaan = RuangPenerimaan::findOrFail($id);
        $ruangpenerimaan->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $ruangpenerimaan = RuangPenerimaan::findOrFail($id);
        $ruangpenerimaan->delete();
        return redirect()->back();
    }
}
