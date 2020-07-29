<?php

namespace App\Http\Controllers;

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
use App\Pemetaan;
use App\Soalp;
use Illuminate\Support\Facades\Hash;

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
        return view('/admin/dashboard', $data);
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
            'foto'           => 'image',
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
        $q1->save();
        $q2->url   = $nama_file2;
        $q2->save();
        $q3->url   = $nama_file3;
        $q3->save();
        $q4->url   = $nama_file4;
        $q4->save();
        $q5->url   = $nama_file5;
        $q5->save();
        $q6->url   = $nama_file6;
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
            'deadline'  => 'required'
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
            'deadline'  => $request->deadline,
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
            'deadline'  => 'required'
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
        $tugas->deadline  = $request->deadline;
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
            'deadline'  => 'required'
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
        ]);

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
            'deadline'  => 'required'
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
        $data['jawaban'] = DB::select("
                    SELECT u.nama, u.npm, j.user_npm, j.kuis_id, j.jawaban, j.image FROM jawaban AS j
                    JOIN user AS u ON j.user_npm = u.npm
                    WHERE j.kuis_id = $id
                ");
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
        $data['pemetaan'] = Pemetaan::all();
        return view('/admin/pemetaan', $data);
    }
    public function pemetaanStore(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
        ]);

        Pemetaan::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/admin/pemetaan');
    }
    public function editPemetaan($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['id']    = $id;
        $data['email'] = $user->email;
        $data['soal'] = Soalp::where('pemetaan_id', $id)->get();
        $data['pemetaan'] = Pemetaan::find($id);
        return view('/admin/soalp', $data);
    }
    public function soalpStore(Request $request)
    {
        $this->validate($request, [
            'soal'      => 'required',
            'tipe_soal' => 'required',
        ]);

        Soalp::create([
            'soal'        => $request->soal,
            'pemetaan_id' => $request->pemetaan_id,
            'tipe_soal'   => $request->tipe_soal,
            'pilihan'     => $request->pilihan,
        ]);

        return redirect('/admin/pemetaan/edit/' . $request->pemetaan_id);
    }
    public function deleteSoalp($id, Request $request)
    {
        $soal = Soalp::find($id);
        $pemetaan_id = $soal->pemetaan_id;
        $soal->delete();
        return redirect('/admin/pemetaan/edit/' . $pemetaan_id);
    }
    public function pemetaanUpdate($id, Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
        ]);
        $pemetaan = Pemetaan::find($id);
        $pemetaan->judul     = $request->judul;
        $pemetaan->deskripsi = $request->deskripsi;
        $pemetaan->save();
        return redirect('/admin/pemetaan');
    }
    public function deletePemetaan($id, Request $request)
    {
        $pemetaan = Pemetaan::find($id);
        $pemetaan->delete();
        return redirect('/admin/pemetaan');
    }
    public function lihatPemetaan($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']    = $user->image;
        $data['nama']    = $user->nama;
        $data['email']   = $user->email;
        $data['npm']     = $user->npm;
        $data['id']      = $id;
        $data['pemetaan']    = Pemetaan::find($id);
        $data['soal']    = Soalp::where('pemetaan_id', $id)->get();
        $data['jawaban'] = DB::select("
                    SELECT * FROM jawabanp AS j
                    JOIN user AS u ON j.user_npm = u.npm
                    WHERE j.pemetaan_id = $id
                ");
        return view('/admin/lihatpemetaan', $data);
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
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $phapus = User::find($id);
        $phapus->delete();

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
        $data['list']   = Wawancara::where('jurusan', $id)->get();
        return view('/admin/wawancarauser', $data);
    }
    public function isiwawancara($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['jur']    = $id;
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
    public function wawancaraStore(Request $request)
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
            'koordinator'       => 'required',
            'sbmptn'            => 'required',
            'prodi_mipa'        => 'required',
            'lk_kkm'            => 'required',
            'sikap_prodi'       => 'required',
        ]);

        NilaiWawancara::create([
            'npm'               => $request->npm,
            'organisasi'        => $request->organisasi,
            'jawaban_wawancara' => $request->jawaban_wawancara,
            'sikap_wawancara'   => $request->sikap_wawancara,
            'koordinator'       => $request->koordinator,
            'sbmptn'            => $request->sbmptn,
            'prodi_mipa'        => $request->prodi_mipa,
            'lk_kkm'            => $request->lk_kkm,
            'sikap_prodi'       => $request->sikap_prodi,
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
        $nilai->save();

        return redirect('/admin/wawancarau/' . $request->npm);
    }
}
