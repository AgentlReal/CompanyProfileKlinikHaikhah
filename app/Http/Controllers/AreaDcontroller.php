<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaD;

class AreaDcontroller extends Controller
{
    public function index()
    {
        $aread = AreaD::all();
        return view('fasilitas', ['aread' => $aread]);
    }

    public function store(Request $request)
    {
        AreaD::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $aread = AreaD::findOrFail($id);
        $aread->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $aread = AreaD::findOrFail($id);
        $aread->delete();
        return redirect()->back();
    }
}
