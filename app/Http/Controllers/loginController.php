<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function login()
    {
        return view("Login");
    }

    public function regist()
    {
        return view("Registration");
    }
    public function RegisterUser(Request $request)
    {
        $request->validate([
            'Username' => 'required',
            'Email' => 'required|email|unique:users',
            'Password' => 'required|min:5|max:15'
        ]);
        $user = new User();
        $user->Username = $request->Username;
        $user->Email = $request->Email;
        $user->Password = Hash::make($request->Password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'Registrasi Berhasil');
        } else {
            return back()->with('fail, Sesuatu salah');
        }
    }
    public function LoginUser(Request $request)
    {
        $request->validate([
            'Email' => 'required|email', //|unique:users <- biadap
            'Password' => 'required|min:5|max:15'
        ]);

        $user = User::where('Email', '=', $request->Email)->first();

        if ($user) {
            if (Hash::check($request->Password, $user->Password)) {
                session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'password salah');
            }
        } else {
            return back()->with('fail', 'akun tidak ditemukan');
        }
    }
    public function dashboard()
    {
        return "welcome";
    }
}
