<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Materi;
use MarkupTest;
use Session;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;
            return view('/admin/dashboard', $data);
        } else {
            return redirect('/');
        }
    }
    public function materi(Request $request)
    {
        if ($request->session()->has('email')) {
            $user           = User::where('email', $request->session()->get('email'))->first();
            $data['nama']   = $user->nama;
            $data['email']  = $user->email;
            $data['materi'] = Materi::all();
            return view('/admin/materi', $data);
        } else {
            return redirect('/');
        }
    }
    public function tambahMateri(Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;
            return view('/admin/editor', $data);
        } else {
            return redirect('/');
        }
    }
    public function materiStore(Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;

            $this->validate($request, [
                'judul'     => 'required',
                'deskripsi' => 'required',
                'video'     => 'max:2000000'
            ]);

            $file = $request->file('video');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'video';
            $file->move($tujuan_upload, $nama_file);

            Materi::create([
                'judul'     => $request->judul,
                'deskripsi' => $request->deskripsi,
                'video'     => $nama_file
            ]);

            return redirect('/admin/materi');
        } else {
            return redirect('/');
        }
    }
    public function editMateri($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user           = User::where('email', $request->session()->get('email'))->first();
            $data['nama']   = $user->nama;
            $data['email']  = $user->email;
            $data['materi'] = Materi::find($id);
            return view('/admin/editor2', $data);
        } else {
            return redirect('/');
        }
    }
    public function materiUpdate($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;

            $this->validate($request, [
                'judul'     => 'required',
                'deskripsi' => 'required'
            ]);

            $materi = Materi::find($id);
            $materi->judul = $request->judul;
            $materi->deskripsi = $request->deskripsi;
            $materi->save();

            return redirect('/admin/materi');
        } else {
            return redirect('/');
        }
    }
    public function deleteMateri($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;

            $materi = Materi::find($id);
            $materi->delete();

            return redirect('/admin/materi');
        } else {
            return redirect('/');
        }
    }
    public function lihatMateri($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user           = User::where('email', $request->session()->get('email'))->first();
            $data['nama']   = $user->nama;
            $data['email']  = $user->email;
            $data['materi'] = Materi::find($id);

            return view('/admin/lihatmateri', $data);
        } else {
            return redirect('/');
        }
    }
}
