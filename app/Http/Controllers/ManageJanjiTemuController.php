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

        return view('manage-janji-temu');
    }
}