<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimManajemen;

class TimManajemenController extends Controller
{
    public function index()
    {
        $timmanajemen = TimManajemen::all(); 
        return view('tentang-kami', ['timmanajemen' => $timmanajemen]);
    }

    public function store(Request $request)
    {
        TimManajemen::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $timmanajemen = TimManajemen::findOrFail($id);
        $timmanajemen->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $timmanajemen = TimManajemen::findOrFail($id);
        $timmanajemen->delete();
        return redirect()->back();
    }
}
