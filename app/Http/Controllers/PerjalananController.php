<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;

class PerjalananController extends Controller
{
    public function index()
    {
        $perjalanan = Perjalanan::all(); 
        return view('tentang-kami', ['perjalanan' => $perjalanan]);
    }

    
    public function store(Request $request)
    {
        Perjalanan::create($request->all());
        return redirect()->back();
    }

    
    public function update(Request $request, $id)
    {
        $perjalanan = Perjalanan::findOrFail($id);
        $perjalanan->update($request->all());
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $perjalanan = Perjalanan::findOrFail($id);
        $perjalanan->delete();
        return redirect()->back();
    }
}
