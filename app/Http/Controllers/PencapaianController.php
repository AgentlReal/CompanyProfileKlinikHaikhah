<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencapaian;

class PencapaianController extends Controller
{
    public function index()
    {
        $pencapaian = Pencapaian::all(); 
        return view('tentang-kami', ['pencapaian' => $pencapaian]);
    }

    
    public function store(Request $request)
    {
        Pencapaian::create($request->all());
        return redirect()->back();
    }

    
    public function update(Request $request, $id)
    {
        $pencapaian = Pencapaian::findOrFail($id);
        $pencapaian->update($request->all());
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $pencapaian = Pencapaian::findOrFail($id);
        $pencapaian->delete();
        return redirect()->back();
    }
}
