<?php

namespace App\Http\Controllers;
use App\Models\Mengapa;
use Illuminate\Http\Request;

class MengapaController extends Controller
{
    public function index()
    {
        $mengapa = Mengapa::all(); 
        return view('index', ['mengapa' => $mengapa]);
    }

    public function store(Request $request)
    {
        Mengapa::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $mengapa = Mengapa::findOrFail($id);
        $mengapa->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $mengapa = Mengapa::findOrFail($id);
        $mengapa->delete();
        return redirect()->back();
    }
}
