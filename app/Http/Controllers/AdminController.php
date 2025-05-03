<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $admin = Admin::where('username', $credentials['username'])
            ->where('password', $credentials['password'])
            ->first();

        if ($admin) {
            session(['admin_logged_in' => true, 'user_id' => $admin->id]);
            return redirect()->route('manage-janji-temu');
        }

        return redirect()->back()->withErrors(['login' => 'Username atau password salah'])->withInput();
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('admin');
    }
}