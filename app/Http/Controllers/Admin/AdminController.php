<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('admin.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function loginsubmit(Request $request)
    {
        $request->validate([
        'phone' => 'required',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('phone', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        // Successful login
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors(['phone' => 'Invalid phone or password']);
    }

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }
    /**
     * Remove the specified resource from storage.
     */
public function logout(Request $request)
{
    Auth::guard('admin')->logout();   // Admin guard থেকে logout

    $request->session()->invalidate(); // session invalidate
    $request->session()->regenerateToken(); // CSRF token regenerate

    return redirect()->route('admin.login'); // login page এ redirect
}
}
