<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Materi;
use App\Tugas;
use App\Filetugas;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        return view('/user/home', $data);
    }
    //////////////////////////////////////////
    // Method Materi -------------------------
    //////////////////////////////////////////
    public function materi(Request $request)
    {
        $user           = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::all();
        return view('/user/materi', $data);
    }
    public function lihatMateri($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::find($id);
        return view('/user/lihatmateri', $data);
    }
    //////////////////////////////////////////
    // Method Tugas --------------------------
    //////////////////////////////////////////
    public function tugas(Request $request)
    {
        $user               = User::where('email', $request->session()->get('email'))->first();
        $data['nama']       = $user->nama;
        $data['email']      = $user->email;
        $data['tugas']      = Tugas::all();
        $data['tugas_user'] = Filetugas::where('user_npm', $user->npm)->get();
        return view('/user/tugas', $data);
    }
    public function lihatTugas($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['id']     = $id;
        $data['tugas']  = Tugas::find($id);
        return view('/user/lihattugas', $data);
    }
    public function tugasStore($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $this->validate($request, ['file' => 'required']);

        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'tugas';
        $file->move($tujuan_upload, $nama_file);

        Filetugas::create([
            'tugas_id'   => $id,
            'user_npm'   => $user->npm,
            'file_tugas' => $nama_file
        ]);

        return redirect('/user/tugas');
    }
    public function deleteTugas($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $materi = Filetugas::where('user_npm', $user->npm)->where('tugas_id', $id)->first();
        $materi->delete();

        return redirect('/user/tugas');
    }
}
