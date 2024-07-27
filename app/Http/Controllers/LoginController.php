<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['role'] = '2';
        $validateData['alamat'] = '-';
        $validateData['no_hp'] = '-';
        $validateData['tgl_lahir'] = '-';
        $validateData['jenis_kelamin'] = '-';
        // return $validateData;

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login!');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)) {
            $request->session()->regenerate();

            if(auth()->user()->role == 1) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
