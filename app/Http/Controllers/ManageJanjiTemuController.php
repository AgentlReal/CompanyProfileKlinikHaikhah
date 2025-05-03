<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JanjiTemu;
use Illuminate\Support\Facades\Session;

class ManageJanjiTemuController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin')->withErrors(['auth' => 'Silakan login terlebih dahulu.']);
        }

        $managejanjitemu = JanjiTemu::all();
        return view('manage-janji-temu', ['managejanjitemu' => $managejanjitemu]);
    }

    // Edit Appointment
    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin')->withErrors(['auth' => 'Silakan login terlebih dahulu.']);
        }

        $managejanjiTemu = JanjiTemu::findOrFail($id);
        return response()->json($managejanjiTemu);
    }

    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin')->withErrors(['auth' => 'Silakan login terlebih dahulu.']);
        }

        $managejanjiTemu = JanjiTemu::findOrFail($id);
        $managejanjiTemu->update([
            'nama_lengkap' => $request->name,
            'nomor_telepon' => $request->phone,
            'email' => $request->email,
            'layanan' => $request->service,
            'tanggal' => $request->date,
            'waktu' => $request->time,
            'status' => $request->status,
        ]);

        return response()->json(['message' => 'Appointment updated successfully']);
    }

    // Delete Appointment
    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin')->withErrors(['auth' => 'Silakan login terlebih dahulu.']);
        }

        $managejanjiTemu = JanjiTemu::findOrFail($id);
        $managejanjiTemu->delete();

        return response()->json(['message' => 'Appointment deleted successfully']);
    }
}