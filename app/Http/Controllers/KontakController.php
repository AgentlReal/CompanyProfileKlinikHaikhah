<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
   
    public function index()
    {
        $kontak = Kontak::all(); 
        return view('index', ['kontak' => $kontak]);
    }

    
    public function store(Request $request)
    {
        Kontak::create($request->all());
        return redirect()->back();
    }

    
    public function update(Request $request, $id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->back();
    }
}
