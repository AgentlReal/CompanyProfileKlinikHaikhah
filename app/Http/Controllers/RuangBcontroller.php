<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuangB;

class RuangBcontroller extends Controller
{
    public function index()
    {
        $areab= RuangB::all();
        return view('fasilitas', ['ruangb' => $areab]);
    }

    public function store(Request $request)
    {
        RuangB::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $areab = RuangB::findOrFail($id);
        $areab->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $areab = RuangB::findOrFail($id);
        $areab->delete();
        return redirect()->back();
    }
}
