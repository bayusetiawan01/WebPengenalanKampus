<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Materi;
use App\Tugas;
use App\Filetugas;
use App\Kuis;
use App\Wawancara;
use App\NilaiWawancara;
use App\Soal;
use App\Wawancara2;
use App\Wawancara3Islam;
use App\Wawancara3Buddha;
use App\Wawancara3Hindu;
use App\Wawancara3Katholik;
use App\Wawancara3Protestan;
use App\Wawancara4;
use App\Wawancara5;
use App\Pengumuman;
use App\Fitur;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Exports\MultipleSheet;
use App\Exports\BorangSheet;
use App\Exports\PemetaanSheet;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('revalidate')->except('export_excel', 'export_excel_hima', 'export_pemetaan');
    }
    public function index(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']     = $user->image;
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
        $data['p1']          = Pengumuman::find(1);
        $data['p2']          = Pengumuman::find(2);
        $data['p3']          = Pengumuman::find(3);
        $data['p4']          = Pengumuman::find(4);
        $data['p5']          = Pengumuman::find(5);
        $data['p6']          = Pengumuman::find(6);
        $data['fitur']  = Fitur::where('fitur', 'pemetaan')->first();
        $data['fitur2']  = Fitur::where('fitur', 'ganti_npm')->first();
        return view('/admin/dashboard', $data);
    }
    public function nonaktifkanPemetaan()
    {
        $u              = Fitur::find(1);
        $u->is_active   = 0;
        $u->save();
        return redirect('/admin');
    }
    public function aktifkanPemetaan()
    {
        $u              = Fitur::find(1);
        $u->is_active   = 1;
        $u->save();
        return redirect('/admin');
    }
    public function nonaktifkanGantiNPM()
    {
        $u              = Fitur::find(2);
        $u->is_active   = 0;
        $u->save();
        return redirect('/admin');
    }
    public function aktifkanGantiNPM()
    {
        $u              = Fitur::find(2);
        $u->is_active   = 1;
        $u->save();
        return redirect('/admin');
    }
    public function profile(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        $data['created']   = $user->created_at;
        return view('/admin/editprofile', $data);
    }
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'nama'           => 'required',
            'npm'            => 'required',
            'email'          => 'required',
            'foto'           => 'image|max:2048',
        ]);

        $p                 = User::where('email', $request->session()->get('email'))->first();
        $nama_file         = $p->image;
        if ($request->hasFile('foto')) {
            $file          = $request->file('foto');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/profile';
            $file->move($tujuan_upload, $nama_file);
        }
        $u          = User::find($p->id);
        $u->image   = $nama_file;
        $u->nama    = $request->nama;
        $u->npm     = $request->npm;
        $u->email   = $request->email;
        $u->save();

        return redirect('/admin');
    }
    public function pengumumanUpdate(Request $request)
    {
        $this->validate($request, [
            'foto1'          => 'image',
            'foto2'          => 'image',
            'foto3'          => 'image',
            'foto4'          => 'image',
            'foto5'          => 'image',
            'foto6'          => 'image',
        ]);
        $p1          = Pengumuman::find(1);
        $p2          = Pengumuman::find(2);
        $p3          = Pengumuman::find(3);
        $p4          = Pengumuman::find(4);
        $p5          = Pengumuman::find(5);
        $p6          = Pengumuman::find(6);
        $nama_file1         = $p1->url;
        $nama_file2         = $p2->url;
        $nama_file3         = $p3->url;
        $nama_file4         = $p4->url;
        $nama_file5         = $p5->url;
        $nama_file6         = $p6->url;
        if ($request->hasFile('foto1')) {
            $file          = $request->file('foto1');
            $nama_file1     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/desain';
            $file->move($tujuan_upload, $nama_file1);
        }
        if ($request->hasFile('foto2')) {
            $file          = $request->file('foto2');
            $nama_file2     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/desain';
            $file->move($tujuan_upload, $nama_file2);
        }
        if ($request->hasFile('foto3')) {
            $file          = $request->file('foto3');
            $nama_file3     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/desain';
            $file->move($tujuan_upload, $nama_file3);
        }
        if ($request->hasFile('foto4')) {
            $file          = $request->file('foto4');
            $nama_file4     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/desain';
            $file->move($tujuan_upload, $nama_file4);
        }
        if ($request->hasFile('foto5')) {
            $file          = $request->file('foto5');
            $nama_file5     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/desain';
            $file->move($tujuan_upload, $nama_file5);
        }
        if ($request->hasFile('foto6')) {
            $file          = $request->file('foto6');
            $nama_file6     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/desain';
            $file->move($tujuan_upload, $nama_file6);
        }
        $q1          = Pengumuman::find(1);
        $q2          = Pengumuman::find(2);
        $q3          = Pengumuman::find(3);
        $q4          = Pengumuman::find(4);
        $q5          = Pengumuman::find(5);
        $q6          = Pengumuman::find(6);
        $q1->url   = $nama_file1;
        $q1->link  = $request->link1;
        $q1->save();
        $q2->url   = $nama_file2;
        $q2->link  = $request->link2;
        $q2->save();
        $q3->url   = $nama_file3;
        $q3->link  = $request->link3;
        $q3->save();
        $q4->url   = $nama_file4;
        $q4->link  = $request->link4;
        $q4->save();
        $q5->url   = $nama_file5;
        $q5->link  = $request->link5;
        $q5->save();
        $q6->url   = $nama_file6;
        $q6->link  = $request->link6;
        $q6->save();

        return redirect('/admin');
    }
    public function password(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/admin/editpassword', $data);
    }
    public function passwordUpdate(Request $request)
    {
        $p                 = User::where('email', $request->session()->get('email'))->first();
        $this->validate($request, [
            'pl'           => 'required',
            'pb'           => 'required',
            'pb2'          => 'required',
        ]);
        if (Hash::check($request->pl, $p->password)) {
            if ($request->pb == $request->pb2) {
                $u              = User::find($p->id);
                $u->password    = Hash::make($request->pb);
                $u->save();
                $request->session()->flash('sukses', 'Password Berhasil Diperbaharui');
            } else {
                $request->session()->flash('gagal', 'Password Gagal Diperbaharui');
            }
        } else {
            $request->session()->flash('gagal', 'Password Gagal Diperbaharui');
        }
        return redirect('admin/password');
    }
    //////////////////////////////////////////
    // Method Materi -------------------------
    //////////////////////////////////////////
    public function materi(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::all();
        return view('/admin/materi', $data);
    }
    public function tambahMateri(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        return view('/admin/editor', $data);
    }
    public function materiStore(Request $request)
    {
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
            'youtube'   => $request->youtube,
            'kuis'      => $request->kuis,
        ]);

        return redirect('/admin/materi');
    }
    public function editMateri($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::find($id);
        return view('/admin/editor2', $data);
    }
    public function materiUpdate($id, Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required'
        ]);

        $materi = Materi::find($id);
        $materi->judul     = $request->judul;
        $materi->deskripsi = $request->deskripsi;
        $materi->youtube   = $request->youtube;
        $materi->kuis      = $request->kuis;
        $materi->save();

        return redirect('/admin/materi');
    }
    public function deleteMateri($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $materi = Materi::find($id);
        $materi->delete();

        return redirect('/admin/materi');
    }
    public function lihatMateri($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
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
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::all();
        return view('/admin/tugas', $data);
    }
    public function tambahTugas(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        return view('/admin/tugaseditor', $data);
    }
    public function tugasStore(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'deadline'  => 'required',
            'file'      => 'file',
        ]);

        $nama_file = NULL;
        if ($request->hasFile('file')) {
            $file          = $request->file('file');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'tugas';
            $file->move($tujuan_upload, $nama_file);
        }

        Tugas::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline'  => $request->deadline . " 11:59:59",
            'petunjuk'  => $nama_file,
        ]);

        return redirect('/admin/tugas');
    }
    public function editTugas($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::find($id);
        return view('/admin/tugaseditor2', $data);
    }
    public function tugasUpdate($id, Request $request)
    {
        $tugas          = Tugas::where('id', $id)->first();
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'deadline'  => 'required',
            'file'      => 'file',
        ]);
        $nama_file = $tugas->petunjuk;
        if ($request->hasFile('file')) {
            $file          = $request->file('file');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'tugas';
            $file->move($tujuan_upload, $nama_file);
        }

        $tugas = Tugas::find($id);
        $tugas->judul     = $request->judul;
        $tugas->deskripsi = $request->deskripsi;
        $tugas->deadline  = $request->deadline . " 23:59:59";
        $tugas->petunjuk  = $nama_file;
        $tugas->save();

        return redirect('/admin/tugas');
    }
    public function deleteTugas($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $materi = Tugas::find($id);
        $materi->delete();

        return redirect('/admin/tugas');
    }
    public function lihatTugas($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::find($id);
        $data['tabel'] = DB::table('file_tugas')->join('tugas', 'tugas.id', '=', 'file_tugas.tugas_id')
            ->join('user', 'user.npm', '=', 'file_tugas.user_npm')
            ->select('file_tugas.created_at', 'user.nama', 'user.npm', 'file_tugas.file_tugas')
            ->where('file_tugas.tugas_id', $id)->get();
        return view('/admin/hasiltugas', $data);
    }
    //////////////////////////////////////////
    // Method Kuis --------------------------
    //////////////////////////////////////////
    public function kuis(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['kuis']   = Kuis::all();
        return view('/admin/kuis', $data);
    }
    public function kuisStore(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'deadline'  => 'required',
            'file'      => 'file',
        ]);
        $nama_file = NULL;
        if ($request->hasFile('file')) {
            $file          = $request->file('file');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'tugas';
            $file->move($tujuan_upload, $nama_file);
        }

        Kuis::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline'  => $request->deadline,
            'petunjuk'  => $nama_file,
            'is_active' => 0,
        ]);

        return redirect('/admin/kuis');
    }
    public function aktivKuis($id, Request $request)
    {
        $kuis = Kuis::find($id);
        $kuis->is_active = 1;
        $kuis->save();

        return redirect('/admin/kuis');
    }
    public function nonaktivKuis($id, Request $request)
    {
        $kuis = Kuis::find($id);
        $kuis->is_active = 0;
        $kuis->save();

        return redirect('/admin/kuis');
    }
    public function editKuis($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['id']    = $id;
        $data['email'] = $user->email;
        $data['soal'] = Soal::where('kuis_id', $id)->get();
        $data['kuis'] = Kuis::find($id);
        return view('/admin/soal', $data);
    }
    public function soalStore(Request $request)
    {
        $this->validate($request, [
            'soal'      => 'required',
            'tipe_soal' => 'required',
            'foto'      => 'image',
        ]);

        $nama_file         = NULL;
        if ($request->hasFile('foto')) {
            $file          = $request->file('foto');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/soal';
            $file->move($tujuan_upload, $nama_file);
        }

        Soal::create([
            'soal'      => $request->soal,
            'kuis_id'   => $request->kuis_id,
            'jawaban'   => $request->jawaban,
            'tipe_soal' => $request->tipe_soal,
            'pilihan'   => $request->pilihan,
            'image'     => $nama_file,
        ]);

        return redirect('/admin/kuis/edit/' . $request->kuis_id);
    }
    public function deleteSoal($id, Request $request)
    {
        $soal = Soal::find($id);
        $kuis_id = $soal->kuis_id;
        $soal->delete();
        return redirect('/admin/kuis/edit/' . $kuis_id);
    }
    public function kuisUpdate($id, Request $request)
    {
        $k = Kuis::where('id', $id)->first();
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'deadline'  => 'required',
            'file'      => 'file',
        ]);

        $nama_file = $k->petunjuk;
        if ($request->hasFile('file')) {
            $file          = $request->file('file');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'tugas';
            $file->move($tujuan_upload, $nama_file);
        }

        $kuis = Kuis::find($id);
        $kuis->judul     = $request->judul;
        $kuis->deskripsi = $request->deskripsi;
        $kuis->deadline  = $request->deadline;
        $kuis->petunjuk  = $nama_file;
        $kuis->save();
        return redirect('/admin/kuis');
    }
    public function deleteKuis($id, Request $request)
    {
        $kuis = Kuis::find($id);
        $kuis->delete();
        return redirect('/admin/kuis');
    }
    public function lihatKuis($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']    = $user->image;
        $data['nama']    = $user->nama;
        $data['email']   = $user->email;
        $data['npm']     = $user->npm;
        $data['id']      = $id;
        $data['kuis']    = Kuis::find($id);
        $data['soal']    = Soal::where('kuis_id', $id)->get();
        $data['jawaban'] = DB::table('jawaban')->join('user', 'jawaban.user_npm', '=', 'user.npm')
            ->select('user.nama', 'jawaban.*', 'user.npm')->where('jawaban.kuis_id', $id)->get();
        return view('/admin/lihatkuis', $data);
    }
    //////////////////////////////////////////
    // Method Pemetaan -----------------------
    //////////////////////////////////////////
    public function pemetaan(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/admin/pemetaan', $data);
    }
    public function hasilpemetaan($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['jur']    = $id;
        $data['list']   = User::where([['himpunan', $id], ['role_id', 1]])->orderBy('npm')->get();
        $data['tabel'] = DB::table('user')
            ->leftJoin('pemetaan', 'pemetaan.user_npm', '=', 'user.npm')
            ->leftJoin('wawancara', 'wawancara.npm', '=', 'user.npm')
            ->where([['user.himpunan', $id], ['user.role_id', 1]])
            ->orderBy('user.npm')->get();
        return view('/admin/pemetaanuser', $data);
    }
    public function export_pemetaan()
    {
        return Excel::download(new PemetaanSheet(), 'Pemetaan.xlsx');
    }
    //////////////////////////////////////////
    // Method Manajemen User -----------------
    //////////////////////////////////////////
    public function users(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        if ($user->role_id == 4) {
            $data['user']   = User::where('role_id', '!=', 5)->get();
            return view('/admin/daftaruseru', $data);
        } else {
            $data['user']   = User::where('role_id', 1)->get();
            return view('/admin/daftaruser', $data);
        }
    }
    public function deleteUser($id, Request $request)
    {

        $phapus = User::find($id);
        $phapus->is_active = 0;
        $phapus->save();

        return redirect('/admin/users');
    }
    public function restoreUser($id, Request $request)
    {

        $phapus = User::find($id);
        $phapus->is_active = 1;
        $phapus->save();

        return redirect('/admin/users');
    }
    public function setAdmin($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
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
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $p = User::find($id);
        $p->role_id = 1;
        $p->save();

        return redirect('/admin/users');
    }
    //////////////////////////////////////////
    // Method Wawancara ----------------------
    //////////////////////////////////////////
    public function wawancara(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        return view('/admin/wawancara', $data);
    }
    public function hasilwawancara($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['jur']    = $id;
        $data['list']   = User::where([['himpunan', $id], ['role_id', 1]])->orderBy('npm')->get();
        return view('/admin/wawancarauser', $data);
    }
    public function isiwawancara($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $user2 = User::where('npm', $id)->first();
        $check = Wawancara::where('npm', $id)->get();
        if ($check->isEmpty()) {
            $request->session()->flash('gagal', 'Mahasiswa belum mengisi form wawancara');
            return redirect('/admin/wawancara/' . $user2->himpunan);
        }
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['jur']    = $id;
        $data['user']   = User::where('npm', $id)->first();
        $data['isi']    = Wawancara::where('npm', $id)->first();
        $data['isi2']   = Wawancara2::where('npm', $id)->first();
        $data['isi3']   = Wawancara4::where('npm', $id)->first();
        $data['isi4i']  = Wawancara3Islam::where('npm', $id)->first();
        $data['isi4p']  = Wawancara3Protestan::where('npm', $id)->first();
        $data['isi4k']  = Wawancara3Katholik::where('npm', $id)->first();
        $data['isi4h']  = Wawancara3Hindu::where('npm', $id)->first();
        $data['isi4b']  = Wawancara3Buddha::where('npm', $id)->first();
        $data['isi5']   = Wawancara5::where('npm', $id)->first();
        $data['nilai']  = NilaiWawancara::where('npm', $id)->first();
        return view('/admin/wawancarau', $data);
    }
    public function isiwawancarapdf($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $user2 = User::where('npm', $id)->first();
        $data['jur']    = $id;
        $data['user']   = User::where('npm', $id)->first();
        $data['isi']    = Wawancara::where('npm', $id)->first();
        $data['isi2']   = Wawancara2::where('npm', $id)->first();
        $data['isi3']   = Wawancara4::where('npm', $id)->first();
        $data['isi4i']  = Wawancara3Islam::where('npm', $id)->first();
        $data['isi4p']  = Wawancara3Protestan::where('npm', $id)->first();
        $data['isi4k']  = Wawancara3Katholik::where('npm', $id)->first();
        $data['isi4h']  = Wawancara3Hindu::where('npm', $id)->first();
        $data['isi4b']  = Wawancara3Buddha::where('npm', $id)->first();
        $data['isi5']   = Wawancara5::where('npm', $id)->first();
        $data['nilai']  = NilaiWawancara::where('npm', $id)->first();

        $pdf = PDF::loadView('/admin/wawancaraupdf', $data);
        return $pdf->download('wawancara_' . $id);
    }
    public function wawancaraStore(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $this->validate($request, [
            'npm'                 => 'required',
            'organisasi'          => 'required',
            'jawaban_wawancara'   => 'required',
            'sikap_wawancara'     => 'required',
            'jawaban_studi_kasus' => 'required',
            'koordinator'         => 'required',
            'sbmptn'              => 'required',
            'prodi_mipa'          => 'required',
            'lk_kkm'              => 'required',
            'sikap_prodi'         => 'required',
        ]);

        NilaiWawancara::create([
            'npm'                 => $request->npm,
            'organisasi'          => $request->organisasi,
            'jawaban_wawancara'   => $request->jawaban_wawancara,
            'jawaban_studi_kasus' => $request->jawaban_studi_kasus,
            'sikap_wawancara'     => $request->sikap_wawancara,
            'koordinator'         => $request->koordinator,
            'sbmptn'              => $request->sbmptn,
            'prodi_mipa'          => $request->prodi_mipa,
            'lk_kkm'              => $request->lk_kkm,
            'sikap_prodi'         => $request->sikap_prodi,
        ]);

        return redirect('/admin/wawancarau/' . $request->npm);
    }
    public function wawancaraUpdate(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $this->validate($request, [
            'npm'               => 'required',
            'organisasi'        => 'required',
            'jawaban_wawancara' => 'required',
            'sikap_wawancara'   => 'required',
            'jawaban_studi_kasus' => 'required',
            'koordinator'       => 'required',
            'sbmptn'            => 'required',
            'prodi_mipa'        => 'required',
            'lk_kkm'            => 'required',
            'sikap_prodi'       => 'required',
        ]);
        $p     = NilaiWawancara::where('npm', $request->npm)->first();
        $nilai = NilaiWawancara::find($p->id);
        $nilai->npm               = $request->npm;
        $nilai->organisasi        = $request->organisasi;
        $nilai->jawaban_wawancara = $request->jawaban_wawancara;
        $nilai->sikap_wawancara   = $request->sikap_wawancara;
        $nilai->koordinator       = $request->koordinator;
        $nilai->sbmptn            = $request->sbmptn;
        $nilai->prodi_mipa        = $request->prodi_mipa;
        $nilai->lk_kkm            = $request->lk_kkm;
        $nilai->sikap_prodi       = $request->sikap_prodi;
        $nilai->jawaban_studi_kasus = $request->jawaban_studi_kasus;
        $nilai->save();

        return redirect('/admin/wawancarau/' . $request->npm);
    }
    public function export_excel($id)
    {
        return Excel::download(new MultipleSheet($id), 'Wawancara.xlsx');
    }
    public function export_excel_hima($id)
    {
        return Excel::download(new BorangSheet($id), 'Borang_Cakorang.xlsx');
    }
    public function tambah_sbmptn_matematika()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14011020020" . $i,
                'email'     => "14011020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14011020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14011020020" . $i,
                'himpunan'  => "Matematika",
            ]);
        }
        for ($i = 10; $i < 100; $i++) {
            User::create([
                'nama'      => "1401102002" . $i,
                'email'     => "1401102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1401102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1401102002" . $i,
                'himpunan'  => "Matematika",
            ]);
        }
        User::create([
            'nama'      => "140110200300",
            'email'     => "140110200300",
            'image'     => "default.jpg",
            'password'  => Hash::make("140110200300"),
            'role_id'   => 1,
            'is_active' => 1,
            'npm'       => "140110200300",
            'himpunan'  => "Matematika",
        ]);
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14011020030" . $i,
                'email'     => "14011020030" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14011020030" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14011020030" . $i,
                'himpunan'  => "Matematika",
            ]);
        }
        User::create([
            'nama'      => "140110200310",
            'email'     => "140110200310",
            'image'     => "default.jpg",
            'password'  => Hash::make("140110200310"),
            'role_id'   => 1,
            'is_active' => 1,
            'npm'       => "140110200310",
            'himpunan'  => "Matematika",
        ]);
        return redirect('/admin');
    }
    public function tambah_sbmptn_kimia()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14021020020" . $i,
                'email'     => "14021020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14021020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14021020020" . $i,
                'himpunan'  => "Kimia",
            ]);
        }
        for ($i = 10; $i < 100; $i++) {
            User::create([
                'nama'      => "1402102002" . $i,
                'email'     => "1402102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1402102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1402102002" . $i,
                'himpunan'  => "Kimia",
            ]);
        }
        User::create([
            'nama'      => "140210200300",
            'email'     => "140210200300",
            'image'     => "default.jpg",
            'password'  => Hash::make("140210200300"),
            'role_id'   => 1,
            'is_active' => 1,
            'npm'       => "140210200300",
            'himpunan'  => "Kimia",
        ]);
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14021020030" . $i,
                'email'     => "14021020030" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14021020030" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14021020030" . $i,
                'himpunan'  => "Kimia",
            ]);
        }
        for ($i = 10; $i < 31; $i++) {
            User::create([
                'nama'      => "1402102003" . $i,
                'email'     => "1402102003" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1402102003" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1402102003" . $i,
                'himpunan'  => "Kimia",
            ]);
        }
        return redirect('/admin');
    }
    public function tambah_sbmptn_fisika()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14031020020" . $i,
                'email'     => "14031020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14031020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14031020020" . $i,
                'himpunan'  => "Fisika",
            ]);
        }
        for ($i = 10; $i < 91; $i++) {
            User::create([
                'nama'      => "1403102002" . $i,
                'email'     => "1403102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1403102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1403102002" . $i,
                'himpunan'  => "Fisika",
            ]);
        }
        return redirect('/admin');
    }
    public function tambah_sbmptn_biologi()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14041020020" . $i,
                'email'     => "14041020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14041020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14041020020" . $i,
                'himpunan'  => "Biologi",
            ]);
        }
        for ($i = 10; $i < 100; $i++) {
            User::create([
                'nama'      => "1404102002" . $i,
                'email'     => "1404102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1404102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1404102002" . $i,
                'himpunan'  => "Biologi",
            ]);
        }
        User::create([
            'nama'      => "140410200300",
            'email'     => "140410200300",
            'image'     => "default.jpg",
            'password'  => Hash::make("140410200300"),
            'role_id'   => 1,
            'is_active' => 1,
            'npm'       => "140410200300",
            'himpunan'  => "Biologi",
        ]);
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14041020030" . $i,
                'email'     => "14041020030" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14041020030" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14041020030" . $i,
                'himpunan'  => "Biologi",
            ]);
        }
        for ($i = 10; $i < 31; $i++) {
            User::create([
                'nama'      => "1404102003" . $i,
                'email'     => "1404102003" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1404102003" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1404102003" . $i,
                'himpunan'  => "Biologi",
            ]);
        }
        return redirect('/admin');
    }
    public function tambah_sbmptn_statis()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14061020020" . $i,
                'email'     => "14061020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14061020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14061020020" . $i,
                'himpunan'  => "Statistika",
            ]);
        }
        for ($i = 10; $i < 100; $i++) {
            User::create([
                'nama'      => "1406102002" . $i,
                'email'     => "1406102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1406102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1406102002" . $i,
                'himpunan'  => "Statistika",
            ]);
        }
        User::create([
            'nama'      => "140610200300",
            'email'     => "140610200300",
            'image'     => "default.jpg",
            'password'  => Hash::make("140610200300"),
            'role_id'   => 1,
            'is_active' => 1,
            'npm'       => "140610200300",
            'himpunan'  => "Statistika",
        ]);
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14061020030" . $i,
                'email'     => "14061020030" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14061020030" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14061020030" . $i,
                'himpunan'  => "Statistika",
            ]);
        }
        User::create([
            'nama'      => "140610200310",
            'email'     => "140610200310",
            'image'     => "default.jpg",
            'password'  => Hash::make("140610200310"),
            'role_id'   => 1,
            'is_active' => 1,
            'npm'       => "140610200310",
            'himpunan'  => "Statistika",
        ]);
        return redirect('/admin');
    }
    public function tambah_sbmptn_geofis()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14071020020" . $i,
                'email'     => "14071020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14071020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14071020020" . $i,
                'himpunan'  => "Geofisika",
            ]);
        }
        for ($i = 10; $i < 71; $i++) {
            User::create([
                'nama'      => "1407102002" . $i,
                'email'     => "1407102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1407102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1407102002" . $i,
                'himpunan'  => "Geofisika",
            ]);
        }
        return redirect('/admin');
    }
    public function tambah_sbmptn_ti()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14081020020" . $i,
                'email'     => "14081020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14081020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14081020020" . $i,
                'himpunan'  => "TeknikInformatika",
            ]);
        }
        for ($i = 10; $i < 91; $i++) {
            User::create([
                'nama'      => "1408102002" . $i,
                'email'     => "1408102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1408102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1408102002" . $i,
                'himpunan'  => "TeknikInformatika",
            ]);
        }
        return redirect('/admin');
    }
    public function tambah_sbmptn_te()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14091020020" . $i,
                'email'     => "14091020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14091020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14091020020" . $i,
                'himpunan'  => "TeknikElektro",
            ]);
        }
        for ($i = 10; $i < 71; $i++) {
            User::create([
                'nama'      => "1409102002" . $i,
                'email'     => "1409102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1409102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1409102002" . $i,
                'himpunan'  => "TeknikElektro",
            ]);
        }
        return redirect('/admin');
    }
    public function tambah_sbmptn_aktu()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'nama'      => "14101020020" . $i,
                'email'     => "14101020020" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("14101020020" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "14101020020" . $i,
                'himpunan'  => "Aktuaria",
            ]);
        }
        for ($i = 10; $i < 61; $i++) {
            User::create([
                'nama'      => "1410102002" . $i,
                'email'     => "1410102002" . $i,
                'image'     => "default.jpg",
                'password'  => Hash::make("1410102002" . $i),
                'role_id'   => 1,
                'is_active' => 1,
                'npm'       => "1410102002" . $i,
                'himpunan'  => "Aktuaria",
            ]);
        }
        return redirect('/admin');
    }
    public function izinUpdate($id)
    {
        $p            = User::where('npm', $id)->first();
        $u            = User::find($p->id);
        File::delete('tugas/suratizin/' . $u->suratizin);
        $u->suratizin = NULL;
        $u->save();
        return redirect('/admin/wawancarau/' . $id);
    }
    public function pernyataanUpdate($id)
    {
        $p                  = User::where('npm', $id)->first();
        $u                  = User::find($p->id);
        File::delete('tugas/suratpernyataan/' . $u->suratpernyataan);
        $u->suratpernyataan = NULL;
        $u->save();
        return redirect('/admin/wawancarau/' . $id);
    }
}
