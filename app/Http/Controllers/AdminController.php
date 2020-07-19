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
        return view('/admin/dashboard', $data);
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
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
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
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::find($id);
        return view('/admin/editor2', $data);
    }
    public function materiUpdate($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
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
        $data['foto']  = $user->image;
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
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['tugas'] = Tugas::find($id);
        return view('/admin/tugaseditor2', $data);
    }
    public function tugasUpdate($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
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

        Kuis::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline'  => $request->deadline
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
            'tipe_soal' => 'required'
        ]);

        Soal::create([
            'soal'      => $request->soal,
            'kuis_id'   => $request->kuis_id,
            'jawaban'   => $request->jawaban,
            'tipe_soal' => $request->tipe_soal,
            'pilihan'   => $request->pilihan
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
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'deadline'  => 'required'
        ]);
        $kuis = Kuis::find($id);
        $kuis->judul     = $request->judul;
        $kuis->deskripsi = $request->deskripsi;
        $kuis->deadline  = $request->deadline;
        $kuis->save();
        return redirect('/admin/kuis');
    }
    public function deleteKuis($id, Request $request)
    {
        $kuis = Kuis::find($id);
        $kuis_id = $kuis->kuis_id;
        $kuis->delete();
        return redirect('/admin/kuis');
    }
    public function lihatKuis($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['npm']    = $user->npm;
        $data['id']     = $id;
        $data['kuis']   = Kuis::find($id);
        $data['soal']   = Soal::where('kuis_id', $id)->get();
        return view('/admin/lihatkuis', $data);
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
