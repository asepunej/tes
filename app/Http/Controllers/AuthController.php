<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        // dd('ini halaman login');
        return view(
            'auth.login',
            array(
                'datarecord'  => 'login',
            )
        );
    }
    public function authenticate(Request $request)
    {

        // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // @@dd('pwd benar');

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        session::flash('status', 'Failed');
        session::flash('message', 'Password Salah');
        return redirect('/login');
        // return redirect()->back()->with('error', 'Nama atau password salah')->withInput($request->only('name'));

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Logout Berhasil',
        // ]);
        return redirect('/login');
    }
}
