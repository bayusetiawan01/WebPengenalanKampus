<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Materi;
use App\Tugas;
use App\Filetugas;
use App\Wawancara;

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
    //////////////////////////////////////////
    // Method Wawancara -------------------------
    //////////////////////////////////////////
    public function wawancara(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
        $data['nama']  = $user->nama;
        $data['email'] = $user->email;
        return view('/user/wawancara', $data);
    }
    public function wawancaraStore(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
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
            'foto'           => 'required',
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
            'prestasi1'        => $request->nama_organisasi1,
            'lembaga1'         => $request->jabatan1,
            'tahunp1'          => $request->tahun1,
            'prestasi2'        => $request->nama_organisasi2,
            'lembaga2'         => $request->jabatan2,
            'tahunp2'          => $request->tahun2,
            'prestasi3'        => $request->nama_organisasi3,
            'lembaga3'         => $request->jabatan3,
            'tahunp3'          => $request->tahun3,
            'prestasi4'        => $request->nama_organisasi4,
            'lembaga4'         => $request->jabatan4,
            'tahunp4'          => $request->tahun4,
            'prestasi5'        => $request->nama_organisasi5,
            'lembaga5'         => $request->jabatan5,
            'tahunp5'          => $request->tahun5,
        ]);

        return redirect('/user');
    }
}
