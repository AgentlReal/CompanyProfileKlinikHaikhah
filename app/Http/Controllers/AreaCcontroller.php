<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaC;

class AreaCcontroller extends Controller
{
    public function index()
    {
        $areac = AreaC::all();
        return view('fasilitas', ['areac' => $areac]);
    }

    public function store(Request $request)
    {
        AreaC::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $areac = AreaC::findOrFail($id);
        $areac->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $areac = AreaC::findOrFail($id);
        $areac->delete();
        return redirect()->back();
    }
}
