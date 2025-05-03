<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index()
    {
        $pelayanan = Pelayanan::all();
        return view('index', ['pelayanan' => $pelayanan]);
    }


    public function store(Request $request)
    {
        Pelayanan::create($request->all());
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
        $pelayanan->update($request->all());
        return redirect()->back();
    }


    public function destroy($id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
        $pelayanan->delete();
        return redirect()->back();
    }
}
