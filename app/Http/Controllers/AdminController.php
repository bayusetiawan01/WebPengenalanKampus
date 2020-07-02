<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Materi;
use App\Tugas;
use App\Filetugas;
use App\Kuis;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('revalidate');
    }
    public function index(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
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
    }
    //////////////////////////////////////////
    // Method Materi -------------------------
    //////////////////////////////////////////
    public function materi(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::all();
        return view('/admin/materi', $data);
    }
    public function tambahMateri(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        return view('/admin/editor', $data);
    }
    public function materiStore(Request $request)
    {
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
            $file          = $request->file('video');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'video';
            $file->move($tujuan_upload, $nama_file);
        }

        Materi::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'video'     => $nama_file,
            'youtube'   => $request->youtube
        ]);

        return redirect('/admin/materi');
    }
    public function editMateri($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::find($id);
        return view('/admin/editor2', $data);
    }
    public function materiUpdate($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required'
        ]);

        $materi = Materi::find($id);
        $materi->judul     = $request->judul;
        $materi->deskripsi = $request->deskripsi;
        $materi->youtube   = $request->youtube;
        $materi->save();

        return redirect('/admin/materi');
    }
    public function deleteMateri($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $materi = Materi::find($id);
        $materi->delete();

        return redirect('/admin/materi');
    }
    public function lihatMateri($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::find($id);
        return view('/admin/lihatmateri', $data);
    }
    //////////////////////////////////////////
    // Method Tugas --------------------------
    //////////////////////////////////////////
    public function tugas(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::all();
        return view('/admin/tugas', $data);
    }
    public function tambahTugas(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        return view('/admin/tugaseditor', $data);
    }
    public function tugasStore(Request $request)
    {
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
    }
    public function editTugas($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::find($id);
        return view('/admin/tugaseditor2', $data);
    }
    public function tugasUpdate($id, Request $request)
    {
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
    }
    public function deleteTugas($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $materi = Tugas::find($id);
        $materi->delete();

        return redirect('/admin/tugas');
    }
    public function lihatTugas($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::find($id);
        $data['tabel'] = DB::select("
                    SELECT f.created_at, u.nama, u.npm, f.file_tugas FROM file_tugas AS f
                    JOIN tugas AS t ON t.id = f.tugas_id
                    JOIN user AS u ON u.npm = f.user_npm
                    WHERE f.tugas_id = $id
                ");
        return view('/admin/hasiltugas', $data);
    }
    //////////////////////////////////////////
    // Method Kuis --------------------------
    //////////////////////////////////////////
    public function kuis(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['kuis']   = Kuis::all();
        return view('/admin/kuis', $data);
    }
    //////////////////////////////////////////
    // Method Manajemen User -----------------
    //////////////////////////////////////////
    public function users(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['user']   = User::all();
        return view('/admin/daftaruser', $data);
    }
    public function deleteUser($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $phapus = User::find($id);
        $phapus->delete();

        return redirect('/admin/users');
    }
    public function setAdmin($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $p = User::find($id);
        $p->role_id = 2;
        $p->save();

        return redirect('/admin/users');
    }
    public function setUser($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $p = User::find($id);
        $p->role_id = 1;
        $p->save();

        return redirect('/admin/users');
    }
}
