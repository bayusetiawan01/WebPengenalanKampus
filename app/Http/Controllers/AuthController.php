<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('login')->except('logout');
        $this->middleware('revalidate');
    }
    public function index(Request $request)
    {
        return view('/auth/login');
    }
    public function register(Request $request)
    {
        return view('/auth/register');
    }
    public function register_proc(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'npm'      => 'required|unique:user|min:12|max:12',
            'email'    => 'required|email|unique:user',
            'password' => 'required|alpha_num|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);
        User::create([
            'nama'      => $request->nama,
            'npm'       => $request->npm,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'image'     => 'default.jpg',
            'role_id'   => 1,
            'is_active' => 1,
        ]);

        $request->session()->flash('sukses', 'Registrasi Akun Berhasil, Silakan Login!');
        return redirect('/');
    }
    public function login_proc(Request $request)
    {
        $email    = $request->email;
        $password = $request->pass;
        $user     = User::where('email', $email)->first();

        if ($user) {
            if ($user->is_active == 1) {
                if (Hash::check($password, $user->password)) {
                    $user = User::where('email', $email)->first();
                    if ($user->role_id == 2 || $user->role_id == 4) {
                        $request->session()->put('email', $email);
                        return redirect('/admin');
                    } else if ($user->role_id == 5) {
                        $request->session()->put('email', $email);
                        return redirect('/himpunan');
                    } else {
                        $request->session()->put('email', $email);
                        return redirect('/user');
                    }
                } else {
                    $request->session()->flash('gagal', 'Username atau Password Salah!');
                    return redirect('/');
                }
            } else {
                $request->session()->flash('gagal', 'Akun Belum Diverifikasi');
                return redirect('/');
            }
        } else {
            $request->session()->flash('gagal', 'Akun Belum Terdaftar');
            return view('/auth/login');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
