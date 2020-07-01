<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Materi;
use App\Tugas;
use App\Filetugas;
use App\Wawancara;
use App\Wawancara2;
use App\Wawancara4;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $user               = User::where('email', $request->session()->get('email'))->first();
        $data['nama']       = $user->nama;
        $data['email']      = $user->email;
        $data['wawancara']  = Wawancara::where('npm', $user->npm)->first();
        $data['wawancara2'] = Wawancara2::where('npm', $user->npm)->first();
        $data['wawancara4'] = Wawancara4::where('npm', $user->npm)->first();
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
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/user/wawancara', $data);
    }
    public function wawancaraStore(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
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
    public function wawancara2(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;
        return view('/user/wawancara2', $data);
    }
    public function wawancara2Store(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
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
    public function wawancara3(Request $request, $agama)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
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
    public function wawancara4(Request $request)
    {
        $user              = User::where('email', $request->session()->get('email'))->first();
        $data['nama']      = $user->nama;
        $data['email']     = $user->email;
        $data['npm']       = $user->npm;

        return view('/user/wawancara4', $data);
    }
    public function wawancara4Store(Request $request)
    {
        $user          = User::where('email', $request->session()->get('email'))->first();
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
}
