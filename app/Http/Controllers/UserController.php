<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Materi;
use App\Tugas;
use App\Kuis;
use App\Jawaban;
use App\Soal;
use App\Soalp;
use App\Jawabanp;
use App\Filetugas;
use App\Pemetaan;
use App\Wawancara;
use App\Wawancara2;
use App\Wawancara3Buddha;
use App\Wawancara3Hindu;
use App\Wawancara3Katholik;
use App\Wawancara3Protestan;
use App\Wawancara3Islam;
use App\Wawancara4;
use App\Wawancara5;
use App\Fitur;
use App\Pengumuman;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('revalidate')->except('lihatKuis');
        $this->middleware('user');
    }
    public function index(Request $request)
    {
        $user                = User::where('email', $request->session()->get('email'))->first();
        $data['foto']        = $user->image;
        $data['nama']        = $user->nama;
        $data['email']       = $user->email;
        $data['wawancara']   = Wawancara::where('npm', $user->npm)->get();
        $data['wawancarad']  = Wawancara::where('npm', $user->npm)->first();
        $data['wawancara2']  = Wawancara2::where('npm', $user->npm)->get();
        $data['wawancara3i'] = Wawancara3Islam::where('npm', $user->npm)->get();
        $data['wawancara3p'] = Wawancara3Protestan::where('npm', $user->npm)->get();
        $data['wawancara3k'] = Wawancara3Katholik::where('npm', $user->npm)->get();
        $data['wawancara3b'] = Wawancara3Buddha::where('npm', $user->npm)->get();
        $data['wawancara3h'] = Wawancara3Hindu::where('npm', $user->npm)->get();
        $data['wawancara4']  = Wawancara4::where('npm', $user->npm)->get();
        $data['wawancara5']  = Wawancara5::where('npm', $user->npm)->get();
        $data['p1']          = Pengumuman::find(1);
        $data['p2']          = Pengumuman::find(2);
        $data['p3']          = Pengumuman::find(3);
        $data['p4']          = Pengumuman::find(4);
        $data['p5']          = Pengumuman::find(5);
        $data['p6']          = Pengumuman::find(6);
        $data['suratizin']   = $user->suratizin;
        $data['suratpernyataan']   = $user->suratpernyataan;
        return view('/user/home', $data);
    }
    public function profile(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        $data['created']   = $user->created_at;
        return view('/user/editprofile', $data);
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

        return redirect('/user');
    }
    public function password(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/user/editpassword', $data);
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
        return redirect('user/password');
    }
    //////////////////////////////////////////
    // Method Materi -------------------------
    //////////////////////////////////////////
    public function materi(Request $request)
    {
        $user           = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['materi'] = Materi::all();
        return view('/user/materi', $data);
    }
    public function lihatMateri($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $data['foto']   = $user->image;
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
        $data['foto']       = $user->image;
        $data['nama']       = $user->nama;
        $data['email']      = $user->email;
        $data['tugas']      = Tugas::all();
        $data['tugas_user'] = Filetugas::where('user_npm', $user->npm)->get();
        return view('/user/tugas', $data);
    }
    public function lihatTugas($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $tugas_user = Filetugas::where([['user_npm', $user->npm], ['tugas_id', $id]])->get();
        if ($tugas_user->isEmpty()) {
            $data['foto']   = $user->image;
            $data['nama']   = $user->nama;
            $data['email']  = $user->email;
            $data['id']     = $id;
            $data['tugas']  = Tugas::find($id);
            return view('/user/lihattugas', $data);
        } else {
            return redirect('user/tugas');
        }
    }
    public function tugasStore($id, Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
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
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $materi = Filetugas::where('user_npm', $user->npm)->where('tugas_id', $id)->first();
        $materi->delete();

        return redirect('/user/tugas');
    }
    //////////////////////////////////////////
    // Method Kuis   -------------------------
    //////////////////////////////////////////
    public function kuis(Request $request)
    {
        $user            = User::where('email', $request->session()->get('email'))->first();
        $data['foto']    = $user->image;
        $data['nama']    = $user->nama;
        $data['email']   = $user->email;
        $data['kuis']    = Kuis::where('is_active', 1)->get();
        $data['jawaban'] = Jawaban::where('user_npm', $user->npm)->get();
        return view('/user/kuis', $data);
    }
    public function lihatKuis($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $check = Jawaban::where([['kuis_id', $id], ['user_npm', $user->npm]])->get();
        $kuis = Kuis::where('id', $id)->first();

        if ($check->isEmpty()) {
            Jawaban::create([
                'kuis_id'    => $id,
                'user_npm'   => $user->npm,
                'timer'      => time() + (60 * $kuis->deadline),
            ]);
        }
        $check2 = Jawaban::where([['kuis_id', $id], ['user_npm', $user->npm]])->first();

        $data['jawaban'] = $check2;
        $data['foto']   = $user->image;
        $data['nama']   = $user->nama;
        $data['email']  = $user->email;
        $data['npm']    = $user->npm;
        $data['id']     = $id;
        $data['kuis']   = Kuis::find($id);
        $data['soal']   = Soal::where('kuis_id', $id)->get();
        if ($check2->timer - time() <= 0 || $check2->jawaban != NULL) {
            $request->session()->flash('gagal', 'Kuis sudah tidak tersedia');
            return redirect('user/kuis');
        } else {
            return view('/user/lihatkuis', $data);
        }
    }
    public function kuisStore($id, Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $array = array_slice($request->post(), 1,);
        foreach ($array as $key => $value) {
            if (is_null($value)) {
                $array[$key] = "-";
            }
        }
        $nama_file         = NULL;
        if ($request->hasFile('file')) {
            $file          = $request->file('file');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/soal';
            $file->move($tujuan_upload, $nama_file);
        }
        $string = implode(';', $array);
        if ($string == NULL) {
            $string = $nama_file;
        }

        $check2       = Jawaban::where([['kuis_id', $id], ['user_npm', $user->npm]])->first();
        $u            = Jawaban::find($check2->id);
        $u->jawaban   = $string;
        $u->image     = $nama_file;
        $u->save();
        return redirect('/user/kuis');
    }
    //////////////////////////////////////////
    // Method Pemetaan   ---------------------
    //////////////////////////////////////////
    public function pemetaan(Request $request)
    {
        $p = Fitur::where('fitur', 'pemetaan')->first();
        if ($p->is_active == 0){
            $request->session()->flash('gagal', 'Belum waktunya mengisi pemetaan');
            return redirect('/user');
        } else{
        $user  = User::where('email', $request->session()->get('email'))->first();
        $check = Pemetaan::where('user_npm', $user->npm)->get();

        if ($check->isEmpty()) {
            Pemetaan::create([
                'user_npm'   => $user->npm,
            ]);
        }

        $check2 = Pemetaan::where('user_npm', $user->npm)->first();
        if ($check2->pilihan22 != NULL) {
            return redirect('/user/pemetaan/5');
        }
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/user/pemetaan', $data);
        }
    }
    public function pemetaan1(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['pemetaan'] = Pemetaan::where('user_npm', $user->npm)->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/user/pemetaan1', $data);
    }
    public function pemetaanStore1(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $p    = Pemetaan::where('user_npm', $user->npm)->first();

        $u            = Pemetaan::find($p->id);
        $u->pilihan1  = $request->pilihan1;
        $u->save();

        return redirect('/user/pemetaan/2');
    }
    public function pemetaan2(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['pemetaan'] = Pemetaan::where('user_npm', $user->npm)->first();
        $pemetaan         = Pemetaan::where('user_npm', $user->npm)->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        if ($pemetaan->pilihan1 == 'bem') {
            return view('/user/pemetaanbem', $data);
        } elseif ($pemetaan->pilihan1 == 'bpm') {
            return view('/user/pemetaanbpm', $data);
        } elseif ($pemetaan->pilihan1 == 'kka') {
            return view('/user/pemetaankka', $data);
        } elseif ($pemetaan->pilihan1 == 'miba') {
            return view('/user/pemetaanmiba', $data);
        } elseif ($pemetaan->pilihan1 == 'kti') {
            return view('/user/pemetaankti', $data);
        }
    }
    public function pemetaanStore2(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $p    = Pemetaan::where('user_npm', $user->npm)->first();

        if ($request->pilihan11 == $request->pilihan12) {
            $request->session()->flash('gagal', 'Pilihan 1 dan 2 tidak boleh sama');
            return redirect('/user/pemetaan/2');
        }
        $u            = Pemetaan::find($p->id);
        $u->pilihan11  = $request->pilihan11;
        $u->pilihan12  = $request->pilihan12;
        $u->save();

        return redirect('/user/pemetaan/3');
    }
    public function pemetaan3(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['pemetaan'] = Pemetaan::where('user_npm', $user->npm)->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/user/pemetaan2', $data);
    }
    public function pemetaanStore3(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $p    = Pemetaan::where('user_npm', $user->npm)->first();

        if ($request->pilihan2 == $p->pilihan1) {
            $request->session()->flash('gagal', 'Pilihan 1 dan 2 tidak boleh sama');
            return redirect('/user/pemetaan/3');
        }

        $u            = Pemetaan::find($p->id);
        $u->pilihan2  = $request->pilihan2;
        $u->save();

        return redirect('/user/pemetaan/4');
    }
    public function pemetaan4(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['pemetaan'] = Pemetaan::where('user_npm', $user->npm)->first();
        $pemetaan         = Pemetaan::where('user_npm', $user->npm)->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        if ($pemetaan->pilihan2 == 'bem') {
            return view('/user/pemetaanbem2', $data);
        } elseif ($pemetaan->pilihan2 == 'bpm') {
            return view('/user/pemetaanbpm2', $data);
        } elseif ($pemetaan->pilihan2 == 'kka') {
            return view('/user/pemetaankka2', $data);
        } elseif ($pemetaan->pilihan2 == 'miba') {
            return view('/user/pemetaanmiba2', $data);
        } elseif ($pemetaan->pilihan2 == 'kti') {
            return view('/user/pemetaankti2', $data);
        }
    }
    public function pemetaanStore4(Request $request)
    {
        $user = User::where('email', $request->session()->get('email'))->first();
        $p    = Pemetaan::where('user_npm', $user->npm)->first();

        if ($request->pilihan21 == $request->pilihan22) {
            $request->session()->flash('gagal', 'Pilihan 1 dan 2 tidak boleh sama');
            return redirect('/user/pemetaan/4');
        }
        $u            = Pemetaan::find($p->id);
        $u->pilihan21  = $request->pilihan21;
        $u->pilihan22  = $request->pilihan22;
        $u->save();

        return redirect('/user/pemetaan/5');
    }
    public function pemetaan5(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['pemetaan'] = Pemetaan::where('user_npm', $user->npm)->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/user/pemetaan5', $data);
    }
    //////////////////////////////////////////
    // Method Wawancara ----------------------
    //////////////////////////////////////////
    public function wawancara(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/user/wawancara', $data);
    }
    public function wawancaraEdit(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        $data['isi']       = Wawancara::where('npm', $user->npm)->first();
        return view('/user/wawancaraedit', $data);
    }
    public function wawancaraStore(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'nama'           => 'required',
            'nama_panggilan' => 'required',
            'jenis_kelamin'  => 'required',
            'npm'            => 'required',
            'jurusan'        => 'required',
            'agama'          => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required',
            'anak_ke'        => 'required',
            'bersaudara'     => 'required',
            'foto'           => 'required|image|max:2048',
            'nama_ayah'      => 'required',
            'pekerjaan_ayah' => 'required',
            'telp_ayah'      => 'required',
            'nama_ibu'       => 'required',
            'pekerjaan_ibu'  => 'required',
            'telp_ibu'       => 'required',
            'hobi'           => 'required',
            'nohp'           => 'required',
            'golongan_darah' => 'required',
            'tekanan_darah'  => 'required',
            'berat_badan'    => 'required',
            'tinggi_badan'   => 'required',
            'email'          => 'required',
            'alamat_rumah'   => 'required',
            'telp_rumah'     => 'required',
            'nama_tk'        => 'required',
            'kota_tk'        => 'required',
            'tahun_tk'       => 'required',
            'nama_sd'        => 'required',
            'kota_sd'        => 'required',
            'tahun_sd'       => 'required',
            'nama_smp'       => 'required',
            'kota_smp'       => 'required',
            'tahun_smp'      => 'required',
            'nama_sma'       => 'required',
            'kota_sma'       => 'required',
            'tahun_sma'      => 'required',
            'nama_pt'        => 'required',
            'kota_pt'        => 'required',
            'tahun_pt'       => 'required',
        ]);

        $file          = $request->file('foto');
        $nama_file     = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'images/profile';
        $file->move($tujuan_upload, $nama_file);

        $u          = User::find($user->id);
        $u->image   = $nama_file;
        $u->save();

        Wawancara::create([
            'nama'             => $request->nama,
            'nama_panggilan'   => $request->nama_panggilan,
            'jenis_kelamin'    => $request->jenis_kelamin,
            'npm'              => $request->npm,
            'jurusan'          => $request->jurusan,
            'agama'            => $request->agama,
            'tempat_lahir'     => $request->tempat_lahir,
            'tanggal_lahir'    => $request->tanggal_lahir,
            'anak_ke'          => $request->anak_ke,
            'bersaudara'       => $request->bersaudara,
            'foto'             => $nama_file,
            'nama_ayah'        => $request->nama_ayah,
            'pekerjaan_ayah'   => $request->pekerjaan_ayah,
            'telp_ayah'        => $request->telp_ayah,
            'nama_ibu'         => $request->nama_ibu,
            'pekerjaan_ibu'    => $request->pekerjaan_ibu,
            'telp_ibu'         => $request->telp_ibu,
            'hobi'             => $request->hobi,
            'nohp'             => $request->nohp,
            'golongan_darah'   => $request->golongan_darah,
            'tekanan_darah'    => $request->tekanan_darah,
            'berat_badan'      => $request->berat_badan,
            'tinggi_badan'     => $request->tinggi_badan,
            'email'            => $request->email,
            'alamat_rumah'     => $request->alamat_rumah,
            'telp_rumah'       => $request->telp_rumah,
            'alamat_kost'      => $request->alamat_kost,
            'telp_kost'        => $request->telp_kost,
            'nama_tk'          => $request->nama_tk,
            'kota_tk'          => $request->kota_tk,
            'tahun_tk'         => $request->tahun_tk,
            'nama_sd'          => $request->nama_sd,
            'kota_sd'          => $request->kota_sd,
            'tahun_sd'         => $request->tahun_sd,
            'nama_smp'         => $request->nama_smp,
            'kota_smp'         => $request->kota_smp,
            'tahun_smp'        => $request->tahun_smp,
            'nama_sma'         => $request->nama_sma,
            'kota_sma'         => $request->kota_sma,
            'tahun_sma'        => $request->tahun_sma,
            'nama_pt'          => $request->nama_pt,
            'kota_pt'          => $request->kota_pt,
            'tahun_pt'         => $request->tahun_pt,
            'nama_organisasi1' => $request->nama_organisasi1,
            'jabatan1'         => $request->jabatan1,
            'tahun1'           => $request->tahun1,
            'nama_organisasi2' => $request->nama_organisasi2,
            'jabatan2'         => $request->jabatan2,
            'tahun2'           => $request->tahun2,
            'nama_organisasi3' => $request->nama_organisasi3,
            'jabatan3'         => $request->jabatan3,
            'tahun3'           => $request->tahun3,
            'nama_organisasi4' => $request->nama_organisasi4,
            'jabatan4'         => $request->jabatan4,
            'tahun4'           => $request->tahun4,
            'nama_organisasi5' => $request->nama_organisasi5,
            'jabatan5'         => $request->jabatan5,
            'tahun5'           => $request->tahun5,
            'prestasi1'        => $request->prestasi1,
            'lembaga1'         => $request->lembaga1,
            'tahunp1'          => $request->tahunp1,
            'prestasi2'        => $request->prestasi2,
            'lembaga2'         => $request->lembaga2,
            'tahunp2'          => $request->tahunp2,
            'prestasi3'        => $request->prestasi3,
            'lembaga3'         => $request->lembaga3,
            'tahunp3'          => $request->tahunp3,
            'prestasi4'        => $request->prestasi4,
            'lembaga4'         => $request->lembaga4,
            'tahunp4'          => $request->tahunp4,
            'prestasi5'        => $request->prestasi5,
            'lembaga5'         => $request->lembaga5,
            'tahunp5'          => $request->tahunp5,
        ]);

        $u           = User::find($user->id);
        $u->himpunan = $request->jurusan;
        $u->nama     = $request->nama;
        $u->save();

        return redirect('/user');
    }
    public function wawancaraUpdate(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $this->validate($request, [
            'nama'           => 'required',
            'nama_panggilan' => 'required',
            'jenis_kelamin'  => 'required',
            'npm'            => 'required',
            'jurusan'        => 'required',
            'agama'          => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required',
            'anak_ke'        => 'required',
            'bersaudara'     => 'required',
            'nama_ayah'      => 'required',
            'pekerjaan_ayah' => 'required',
            'telp_ayah'      => 'required',
            'nama_ibu'       => 'required',
            'pekerjaan_ibu'  => 'required',
            'telp_ibu'       => 'required',
            'hobi'           => 'required',
            'nohp'           => 'required',
            'golongan_darah' => 'required',
            'tekanan_darah'  => 'required',
            'berat_badan'    => 'required',
            'tinggi_badan'   => 'required',
            'email'          => 'required',
            'alamat_rumah'   => 'required',
            'telp_rumah'     => 'required',
            'nama_tk'        => 'required',
            'kota_tk'        => 'required',
            'tahun_tk'       => 'required',
            'nama_sd'        => 'required',
            'kota_sd'        => 'required',
            'tahun_sd'       => 'required',
            'nama_smp'       => 'required',
            'kota_smp'       => 'required',
            'tahun_smp'      => 'required',
            'nama_sma'       => 'required',
            'kota_sma'       => 'required',
            'tahun_sma'      => 'required',
            'nama_pt'        => 'required',
            'kota_pt'        => 'required',
            'tahun_pt'       => 'required',
        ]);

        $p                 = Wawancara::where('npm', $user->npm)->first();
        $nama_file         = $p->foto;
        if ($request->hasFile('foto')) {
            $file          = $request->file('foto');
            $nama_file     = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/profile';
            $file->move($tujuan_upload, $nama_file);
        }
        $u          = User::find($user->id);
        $u->image    = $nama_file;
        $u->save();

        $wawancara                   = Wawancara::find($p->id);
        $wawancara->nama             = $request->nama;
        $wawancara->foto             = $nama_file;
        $wawancara->nama_panggilan   = $request->nama_panggilan;
        $wawancara->jenis_kelamin    = $request->jenis_kelamin;
        $wawancara->npm              = $request->npm;
        $wawancara->jurusan          = $request->jurusan;
        $wawancara->agama            = $request->agama;
        $wawancara->tempat_lahir     = $request->tempat_lahir;
        $wawancara->tanggal_lahir    = $request->tanggal_lahir;
        $wawancara->anak_ke          = $request->anak_ke;
        $wawancara->bersaudara       = $request->bersaudara;
        $wawancara->nama_ayah        = $request->nama_ayah;
        $wawancara->pekerjaan_ayah   = $request->pekerjaan_ayah;
        $wawancara->telp_ayah        = $request->telp_ayah;
        $wawancara->nama_ibu         = $request->nama_ibu;
        $wawancara->pekerjaan_ibu    = $request->pekerjaan_ibu;
        $wawancara->telp_ibu         = $request->telp_ibu;
        $wawancara->hobi             = $request->hobi;
        $wawancara->nohp             = $request->nohp;
        $wawancara->golongan_darah   = $request->golongan_darah;
        $wawancara->tekanan_darah    = $request->tekanan_darah;
        $wawancara->berat_badan      = $request->berat_badan;
        $wawancara->tinggi_badan     = $request->tinggi_badan;
        $wawancara->email            = $request->email;
        $wawancara->alamat_rumah     = $request->alamat_rumah;
        $wawancara->telp_rumah       = $request->telp_rumah;
        $wawancara->alamat_kost      = $request->alamat_kost;
        $wawancara->telp_kost        = $request->telp_kost;
        $wawancara->nama_tk          = $request->nama_tk;
        $wawancara->kota_tk          = $request->kota_tk;
        $wawancara->tahun_tk         = $request->tahun_tk;
        $wawancara->nama_sd          = $request->nama_sd;
        $wawancara->kota_sd          = $request->kota_sd;
        $wawancara->tahun_sd         = $request->tahun_sd;
        $wawancara->nama_smp         = $request->nama_smp;
        $wawancara->kota_smp         = $request->kota_smp;
        $wawancara->tahun_smp        = $request->tahun_smp;
        $wawancara->nama_sma         = $request->nama_sma;
        $wawancara->kota_sma         = $request->kota_sma;
        $wawancara->tahun_sma        = $request->tahun_sma;
        $wawancara->nama_pt          = $request->nama_pt;
        $wawancara->kota_pt          = $request->kota_pt;
        $wawancara->tahun_pt         = $request->tahun_pt;
        $wawancara->nama_organisasi1 = $request->nama_organisasi1;
        $wawancara->jabatan1         = $request->jabatan1;
        $wawancara->tahun1           = $request->tahun1;
        $wawancara->nama_organisasi2 = $request->nama_organisasi2;
        $wawancara->jabatan2         = $request->jabatan2;
        $wawancara->tahun2           = $request->tahun2;
        $wawancara->nama_organisasi3 = $request->nama_organisasi3;
        $wawancara->jabatan3         = $request->jabatan3;
        $wawancara->tahun3           = $request->tahun3;
        $wawancara->nama_organisasi4 = $request->nama_organisasi4;
        $wawancara->jabatan4         = $request->jabatan4;
        $wawancara->tahun4           = $request->tahun4;
        $wawancara->nama_organisasi5 = $request->nama_organisasi5;
        $wawancara->jabatan5         = $request->jabatan5;
        $wawancara->tahun5           = $request->tahun5;
        $wawancara->prestasi1        = $request->prestasi1;
        $wawancara->lembaga1         = $request->lembaga1;
        $wawancara->tahunp1          = $request->tahunp1;
        $wawancara->prestasi2        = $request->prestasi2;
        $wawancara->lembaga2         = $request->lembaga2;
        $wawancara->tahunp2          = $request->tahunp2;
        $wawancara->prestasi3        = $request->prestasi3;
        $wawancara->lembaga3         = $request->lembaga3;
        $wawancara->tahunp3          = $request->tahunp3;
        $wawancara->prestasi4        = $request->prestasi4;
        $wawancara->lembaga4         = $request->lembaga4;
        $wawancara->tahunp4          = $request->tahunp4;
        $wawancara->prestasi5        = $request->prestasi5;
        $wawancara->lembaga5         = $request->lembaga5;
        $wawancara->tahunp5          = $request->tahunp5;
        $wawancara->save();

        $u           = User::find($user->id);
        $u->himpunan  = $request->jurusan;
        $u->save();

        return redirect('/user');
    }
    public function wawancara2(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/user/wawancara2', $data);
    }
    public function wawancara2Edit(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        $data['isi']       = Wawancara2::where('npm', $user->npm)->first();
        return view('/user/wawancaraedit2', $data);
    }
    public function wawancara2Store(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                  => 'required',
            'kekurangan_kelebihan' => 'required',
            'perbedaan_mahasiswa'  => 'required',
            'bem_hima'             => 'required',
            'fungsi_angkatan'      => 'required',
            'kritis'               => 'required',
            'solusional'           => 'required',
            'sistematis'           => 'required',
            'logis'                => 'required',
            'berlandasan'          => 'required',
            'arti_pemimpin'        => 'required',
            'koordinator'          => 'required',
        ]);

        Wawancara2::create([
            'npm'                  => $request->npm,
            'kekurangan_kelebihan' => $request->kekurangan_kelebihan,
            'perbedaan_mahasiswa'  => $request->perbedaan_mahasiswa,
            'bem_hima'             => $request->bem_hima,
            'fungsi_angkatan'      => $request->fungsi_angkatan,
            'kritis'               => $request->kritis,
            'solusional'           => $request->solusional,
            'sistematis'           => $request->sistematis,
            'logis'                => $request->logis,
            'berlandasan'          => $request->berlandasan,
            'arti_pemimpin'        => $request->arti_pemimpin,
            'koordinator'          => $request->koordinator,
        ]);

        return redirect('/user');
    }
    public function wawancara2Update(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;

        $this->validate($request, [
            'npm'                  => 'required',
            'kekurangan_kelebihan' => 'required',
            'perbedaan_mahasiswa'  => 'required',
            'bem_hima'             => 'required',
            'fungsi_angkatan'      => 'required',
            'kritis'               => 'required',
            'solusional'           => 'required',
            'sistematis'           => 'required',
            'logis'                => 'required',
            'berlandasan'          => 'required',
            'arti_pemimpin'        => 'required',
            'koordinator'          => 'required',
        ]);

        $p                 = Wawancara2::where('npm', $user->npm)->first();
        $wawancara         = Wawancara2::find($p->id);
        $wawancara->npm                  = $request->npm;
        $wawancara->kekurangan_kelebihan = $request->kekurangan_kelebihan;
        $wawancara->perbedaan_mahasiswa  = $request->perbedaan_mahasiswa;
        $wawancara->bem_hima             = $request->bem_hima;
        $wawancara->fungsi_angkatan      = $request->fungsi_angkatan;
        $wawancara->kritis               = $request->kritis;
        $wawancara->solusional           = $request->solusional;
        $wawancara->sistematis           = $request->sistematis;
        $wawancara->logis                = $request->logis;
        $wawancara->berlandasan          = $request->berlandasan;
        $wawancara->arti_pemimpin        = $request->arti_pemimpin;
        $wawancara->koordinator          = $request->koordinator;
        $wawancara->save();

        return redirect('/admin/materi');
    }
    public function wawancara3(Request $request, $agama)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        if ($agama == 'islam')
            return view('/user/wawancara3islam', $data);
        elseif ($agama == 'protestan')
            return view('/user/wawancara3protestan', $data);
        elseif ($agama == 'katholik')
            return view('/user/wawancara3katholik', $data);
        elseif ($agama == 'hindu')
            return view('/user/wawancara3hindu', $data);
        elseif ($agama == 'budha')
            return view('/user/wawancara3budha', $data);
    }
    public function wawancara3StoreBuddha(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                  => 'required',
            'tentang_agama_budha'  => 'required',
            'memilih_agama_budha'  => 'required',
            'kelas_agama_budha'    => 'required',
            'hari_besar_budha'     => 'required',
            'pancasila_buddhist'   => 'required',
        ]);

        Wawancara3Buddha::create([
            'npm'                  => $request->npm,
            'tentang_agama_budha'  => $request->tentang_agama_budha,
            'memilih_agama_budha'  => $request->memilih_agama_budha,
            'kelas_agama_budha'    => $request->kelas_agama_budha,
            'hari_besar_budha'     => $request->hari_besar_budha,
            'pancasila_buddhist'   => $request->pancasila_buddhist,
        ]);

        return redirect('/user');
    }
    public function wawancara3StoreHindu(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                   => 'required',
            'pemahaman_agama_hindu' => 'required',
            'dasar_agama_hindu'     => 'required',
            'tujuan_yadnya'         => 'required',
            'pernahkah_mengeluh'    => 'required',
            'berminat_kmh'          => 'required',
            'saran_program'         => 'required',
        ]);

        Wawancara3Hindu::create([
            'npm'                   => $request->npm,
            'pemahaman_agama_hindu' => $request->pemahaman_agama_hindu,
            'dasar_agama_hindu'     => $request->dasar_agama_hindu,
            'tujuan_yadnya'         => $request->tujuan_yadnya,
            'pernahkah_mengeluh'    => $request->pernahkah_mengeluh,
            'berminat_kmh'          => $request->berminat_kmh,
            'saran_program'         => $request->saran_program,
        ]);

        return redirect('/user');
    }
    public function wawancara3StoreKatholik(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                   => 'required',
            'asal_gereja'           => 'required',
            'masuk_fmipa'           => 'required',
            'jelaskan_trinitas'     => 'required',
            'siapa_yesus'           => 'required',
            'seperti_apa_natal'     => 'required',
            'pelayanan_gereja'      => 'required',
            'membaca_alkitab'       => 'required',
            'berminat_kmk'          => 'required',
            'ayat_pegangan'         => 'required',
        ]);

        Wawancara3Katholik::create([
            'npm'                   => $request->npm,
            'asal_gereja'           => $request->asal_gereja,
            'masuk_fmipa'           => $request->masuk_fmipa,
            'jelaskan_trinitas'     => $request->jelaskan_trinitas,
            'siapa_yesus'           => $request->siapa_yesus,
            'seperti_apa_natal'     => $request->seperti_apa_natal,
            'pelayanan_gereja'      => $request->pelayanan_gereja,
            'membaca_alkitab'       => $request->membaca_alkitab,
            'berminat_kmk'          => $request->berminat_kmk,
            'ayat_pegangan'         => $request->ayat_pegangan,
        ]);

        return redirect('/user');
    }
    public function wawancara3StoreProtestan(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                           => 'required',
            'kalimat_syahadat'              => 'required',
            'shalat_wajib'                  => 'required',
            'tilawah'                       => 'required',
            'dhuha'                         => 'required',
            'tahajud'                       => 'required',
            'rawatib'                       => 'required',
            'berjamaah'                     => 'required',
            'matsurat'                      => 'required',
            'shaum_sunnah'                  => 'required',
            'pengajian'                     => 'required',
            'durasi_pengajian'              => 'required',
            'tempat_pengajian'              => 'required',
            'mentoring'                     => 'required',
            'durasi_mentoring'              => 'required',
            'tempat_mentoring'              => 'required',
            'liqa'                          => 'required',
            'durasi_liqa'                   => 'required',
            'tempat_liqa'                   => 'required',
            'baca_quran'                    => 'required',
            'durasi_baca_quran'             => 'required',
            'tempat_baca_quran'             => 'required',
            'hafalan_quran'                 => 'required',
            'buku_islam'                    => 'required',
            'tokoh_islam'                   => 'required',
            'pendapat_jilbab'               => 'required',
            'pendapat_ikhtilat'             => 'required',
            'pendapat_pacaran'              => 'required',
            'ramalan_bintang'               => 'required',
            'pendapat_merokok'              => 'required',
            'pemimpin_non_muslim'           => 'required',
        ]);

        Wawancara3Islam::create([
            'npm'                           => $request->npm,
            'kalimat_syahadat'              => $request->kalimat_syahadat,
            'shalat_wajib'                  => $request->shalat_wajib,
            'tilawah'                       => $request->tilawah,
            'dhuha'                         => $request->dhuha,
            'tahajud'                       => $request->tahajud,
            'rawatib'                       => $request->rawatib,
            'berjamaah'                     => $request->berjamaah,
            'matsurat'                      => $request->matsurat,
            'shaum_sunnah'                  => $request->shaum_sunnah,
            'pengajian'                     => $request->pengajian,
            'durasi_pengajian'              => $request->durasi_pengajian,
            'tempat_pengajian'              => $request->tempat_pengajian,
            'mentoring'                     => $request->mentoring,
            'durasi_mentoring'              => $request->durasi_mentoring,
            'tempat_mentoring'              => $request->tempat_mentoring,
            'liqa'                          => $request->liqa,
            'durasi_liqa'                   => $request->durasi_liqa,
            'tempat_liqa'                   => $request->tempat_liqa,
            'keputrian'                     => $request->keputrian,
            'durasi_keputrian'              => $request->durasi_keputrian,
            'tempat_keputrian'              => $request->tempat_keputrian,
            'baca_quran'                    => $request->baca_quran,
            'durasi_baca_quran'             => $request->durasi_baca_quran,
            'tempat_baca_quran'             => $request->tempat_baca_quran,
            'hafalan_quran'                 => $request->hafalan_quran,
            'buku_islam'                    => $request->buku_islam,
            'tokoh_islam'                   => $request->tokoh_islam,
            'pendapat_jilbab'               => $request->pendapat_jilbab,
            'pendapat_ikhtilat'             => $request->pendapat_ikhtilat,
            'pendapat_pacaran'              => $request->pendapat_pacaran,
            'ramalan_bintang'               => $request->ramalan_bintang,
            'pendapat_merokok'              => $request->pendapat_merokok,
            'pemimpin_non_muslim'           => $request->pemimpin_non_muslim,
        ]);

        return redirect('/user');
    }
    public function wawancara3StoreIslam(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                           => 'required',
            'asal_gereja'                   => 'required',
            'masuk_fmipa'                   => 'required',
            'kesaksian_pertolongan'         => 'required',
            'siapa_yesus'                   => 'required',
            'arti_natal'                    => 'required',
            'pelayanan_gereja'              => 'required',
            'membaca_alkitab'               => 'required',
            'berminat_pmk'                  => 'required',
            'ayat_disukai'                  => 'required',
            'persekutuan_fmipa'             => 'required',
            'maukah_ikut_persekutuan_fmipa' => 'required',
            'arti_pelayanan'                => 'required',
        ]);

        Wawancara3Protestan::create([
            'npm'                           => $request->npm,
            'asal_gereja'                   => $request->asal_gereja,
            'masuk_fmipa'                   => $request->masuk_fmipa,
            'kesaksian_pertolongan'         => $request->kesaksian_pertolongan,
            'siapa_yesus'                   => $request->siapa_yesus,
            'arti_natal'                    => $request->arti_natal,
            'pelayanan_gereja'              => $request->pelayanan_gereja,
            'membaca_alkitab'               => $request->membaca_alkitab,
            'berminat_pmk'                  => $request->berminat_pmk,
            'ayat_disukai'                  => $request->ayat_disukai,
            'persekutuan_fmipa'             => $request->persekutuan_fmipa,
            'maukah_ikut_persekutuan_fmipa' => $request->maukah_ikut_persekutuan_fmipa,
            'arti_pelayanan'                => $request->arti_pelayanan,
        ]);

        return redirect('/user');
    }
    public function wawancara4(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;

        return view('/user/wawancara4', $data);
    }
    public function wawancara4Store(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['foto']  = $user->image;
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        $data['npm']   = $user->npm;

        $this->validate($request, [
            'npm'                  => 'required',
            'nama_darurat'         => 'required',
            'alamat_darurat'       => 'required',
            'hubungan_darurat'     => 'required',
            'hp_darurat'           => 'required',
            'nama_darurat2'        => 'required',
            'alamat_darurat2'      => 'required',
            'hubungan_darurat2'    => 'required',
            'hp_darurat2'          => 'required',
        ]);

        Wawancara4::create([
            'npm'                  => $request->npm,
            'nama_darurat'         => $request->nama_darurat,
            'alamat_darurat'       => $request->alamat_darurat,
            'hubungan_darurat'     => $request->hubungan_darurat,
            'hp_darurat'           => $request->hp_darurat,
            'nama_darurat2'        => $request->nama_darurat2,
            'alamat_darurat2'      => $request->alamat_darurat2,
            'hubungan_darurat2'    => $request->hubungan_darurat2,
            'hp_darurat2'          => $request->hp_darurat2,
            'asma'                 => $request->asma,
            'sakit_mata'           => $request->sakit_mata,
            'dbd'                  => $request->dbd,
            'tbc'                  => $request->tbc,
            'patah_tulang'         => $request->patah_tulang,
            'malaria'              => $request->malaria,
            'pneumonia'            => $request->pneumonia,
            'kanker'               => $request->kanker,
            'liver'                => $request->liver,
            'sinusitis'            => $request->sinusitis,
            'hepatitis'            => $request->hepatitis,
            'penyakit_jantung'     => $request->penyakit_jantung,
            'cacar'                => $request->cacar,
            'hipertensi'           => $request->hipertensi,
            'kolera'               => $request->kolera,
            'campak'               => $request->campak,
            'hipotensi'            => $request->hipotensi,
            'tifus'                => $request->tifus,
            'hipotermia'           => $request->hipotermia,
            'hipertermia'          => $request->hipertermia,
            'anemia'               => $request->anemia,
            'usus_buntu'           => $request->usus_buntu,
            'migrain'              => $request->migrain,
            'diabetes'             => $request->diabetes,
            'epilepsi'             => $request->epilepsi,
            'sakit_gigi'           => $request->sakit_gigi,
            'maag'                 => $request->maag,
            'hiv'                  => $request->hiv,
            'penyakit_lain'        => $request->penyakit_lain,
            'sedang_menderita'     => $request->sedang_menderita,
            'enam_bulan'           => $request->enam_bulan,
            'tiga_bulan'           => $request->tiga_bulan,
            'penyakit_keluarga'    => $request->penyakit_keluarga,
            'jenis_alergi'         => $request->jenis_alergi,
            'keluhan_alergi'       => $request->keluhan_alergi,
            'cara_menangani'       => $request->cara_menangani,
            'rumah_sakit'          => $request->rumah_sakit,
            'operasi'              => $request->operasi,
            'pantangan_operasi'    => $request->pantangan_operasi,
        ]);

        return redirect('/user');
    }
    public function wawancara5(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['foto']      = $user->image;
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/user/wawancara5', $data);
    }
    public function wawancara5Store(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $this->validate($request, [
            'akses_internet'     => 'required',
            'unlimited'          => 'required',
            'sebulan'            => 'required',
            'kendala'            => 'required',
            'streaming'          => 'required',
            'kamera'             => 'required',
            'kendala_penggunaan' => 'required',
            'waktu'              => 'required',
            'kegiatan'           => 'required',
        ]);

        Wawancara5::create([
            'npm'                => $user->npm,
            'akses_internet'     => $request->akses_internet,
            'lainnya'            => $request->lainnya,
            'unlimited'          => $request->unlimited,
            'sebulan'            => $request->sebulan,
            'kendala'            => $request->kendala,
            'streaming'          => $request->streaming,
            'pc'                 => $request->pc,
            'laptop'             => $request->laptop,
            'smartphone'         => $request->smartphone,
            'tablet'             => $request->tablet,
            'lainnya2'           => $request->lainnya2,
            'kamera'             => $request->kamera,
            'discord'            => $request->discord,
            'meet'               => $request->meet,
            'zoom'               => $request->zoom,
            'tidak_satupun'      => $request->tidak_satupun,
            'kendala_penggunaan' => $request->kendala_penggunaan,
            'waktu'              => $request->waktu,
            'kegiatan'           => $request->kegiatan,
        ]);

        return redirect('/user');
    }
    public function izin(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/user/suratizin', $data);
    }
    public function pernyataan(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $data['foto']     = $user->image;
        $data['nama']     = $user->nama;
        $data['email']    = $user->email;
        return view('/user/suratpernyataan', $data);
    }
    public function izinStore(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $this->validate($request, [
            'file'        => 'required',
        ]);

        $p             = User::where('npm', $user->npm)->first();
        $file          = $request->file('file');
        $nama_file     = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'tugas/suratizin';
        $file->move($tujuan_upload, $nama_file);

        $u              = User::find($p->id);
        $u->suratizin   = $nama_file;
        $u->save();

        return redirect('/user');
    }
    public function pernyataanStore(Request $request)
    {
        $user             = User::where('email', $request->session()->get('email'))->first();
        $this->validate($request, [
            'file'        => 'required',
        ]);

        $p             = User::where('npm', $user->npm)->first();
        $file          = $request->file('file');
        $nama_file     = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'tugas/suratpernyataan';
        $file->move($tujuan_upload, $nama_file);

        $u                  = User::find($p->id);
        $u->suratpernyataan = $nama_file;
        $u->save();

        return redirect('/user');
    }
    public function waktu($id)
    {
        return gmdate("H:i:s", $id - time());
    }
}
