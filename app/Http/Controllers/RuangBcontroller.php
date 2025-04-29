<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuangB;

class RuangBcontroller extends Controller
{
    public function index()
    {
        $ruangb= RuangB::all();
        return view('fasilitas', ['ruangb' => $ruangb]);
    }

    public function store(Request $request)
    {
        RuangB::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $ruangb = RuangB::findOrFail($id);
        $ruangb->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $ruangb = RuangB::findOrFail($id);
        $ruangb->delete();
        return redirect()->back();
    }
}
