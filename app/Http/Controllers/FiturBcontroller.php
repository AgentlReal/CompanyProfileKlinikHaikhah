<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FiturB;

class FiturBcontroller extends Controller
{
    public function index()
    {
        $fiturb = FiturB::all();
        return view('fasilitas', ['fiturb' => $fiturb]);
    }

    public function store(Request $request)
    {
        FiturB::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $fiturb = FiturB::findOrFail($id);
        $fiturb->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $fiturb = FiturB::findOrFail($id);
        $fiturb->delete();
        return redirect()->back();
    }
}
