<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Materi;
use App\Tugas;
use App\Filetugas;
use MarkupTest;
use Session;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $user_list        = User::where('role_id', 1)->get();
                $materi_list      = Materi::all();
                $tugas_list       = Tugas::all();
                $tugas2_list      = Filetugas::all();
                $data['nama']     = $user->nama;
                $data['email']    = $user->email;
                $data['c_user']   = count($user_list);
                $data['c_materi'] = count($materi_list);
                $data['c_tugas']  = count($tugas_list);
                $data['c_tugas2'] = count($tugas2_list);
                return view('/admin/dashboard', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
    //////////////////////////////////////////
    // Method Materi -------------------------
    //////////////////////////////////////////
    public function materi(Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']   = $user->nama;
                $data['email']  = $user->email;
                $data['materi'] = Materi::all();
                return view('/admin/materi', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
    public function tambahMateri(Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']  = $user->nama;
                $data['email'] = $user->email;
                return view('/admin/editor', $data);
            } else {
                return redirect('/user');
            }
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

            $nama_file = NULL;
            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                $tujuan_upload = 'video';
                $file->move($tujuan_upload, $nama_file);
            }

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
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']   = $user->nama;
                $data['email']  = $user->email;
                $data['materi'] = Materi::find($id);
                return view('/admin/editor2', $data);
            } else {
                return redirect('/user');
            }
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
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']   = $user->nama;
                $data['email']  = $user->email;
                $data['materi'] = Materi::find($id);
                return view('/admin/lihatmateri', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
    //////////////////////////////////////////
    // Method Tugas --------------------------
    //////////////////////////////////////////
    public function tugas(Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']   = $user->nama;
                $data['email']  = $user->email;
                $data['tugas'] = Tugas::all();
                return view('/admin/tugas', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
    public function tambahTugas(Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']  = $user->nama;
                $data['email'] = $user->email;
                return view('/admin/tugaseditor', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
    public function tugasStore(Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;

            $this->validate($request, [
                'judul'     => 'required',
                'deskripsi' => 'required',
                'deadline'  => 'required'
            ]);

            Tugas::create([
                'judul'     => $request->judul,
                'deskripsi' => $request->deskripsi,
                'deadline'  => $request->deadline
            ]);

            return redirect('/admin/tugas');
        } else {
            return redirect('/');
        }
    }
    public function editTugas($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']   = $user->nama;
                $data['email']  = $user->email;
                $data['tugas'] = Tugas::find($id);
                return view('/admin/tugaseditor2', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
    public function tugasUpdate($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;

            $this->validate($request, [
                'judul'     => 'required',
                'deskripsi' => 'required',
                'deadline'  => 'required'
            ]);

            $tugas = Tugas::find($id);
            $tugas->judul     = $request->judul;
            $tugas->deskripsi = $request->deskripsi;
            $tugas->deadline  = $request->deadline;
            $tugas->save();

            return redirect('/admin/tugas');
        } else {
            return redirect('/');
        }
    }
    public function deleteTugas($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user          = User::where('email', $request->session()->get('email'))->first();
            $data['nama']  = $user->nama;
            $data['email'] = $user->email;

            $materi = Tugas::find($id);
            $materi->delete();

            return redirect('/admin/tugas');
        } else {
            return redirect('/');
        }
    }
    public function lihatTugas($id, Request $request)
    {
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                $data['nama']   = $user->nama;
                $data['email']  = $user->email;
                $data['tugas'] = Tugas::find($id);
                $data['tabel'] = DB::select("
                    SELECT f.created_at, u.nama, u.npm, f.file_tugas FROM file_tugas AS f
                    JOIN tugas AS t ON t.id = f.tugas_id
                    JOIN user AS u ON u.npm = f.user_npm
                    WHERE f.tugas_id = $id
                ");
                return view('/admin/hasiltugas', $data);
            } else {
                return redirect('/user');
            }
        } else {
            return redirect('/');
        }
    }
}
