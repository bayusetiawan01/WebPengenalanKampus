@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Form -->
    <!-- Vertical Layout | With Floating Label -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/user/wawancara/update" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Data Diri
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama" class="form-control" value="{{ $isi->nama }}" required>
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_panggilan" value="{{ $isi->nama_panggilan }}" class="form-control">
                                <label class="form-label">Nama Panggilan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="male" name="jenis_kelamin" value="Laki - laki" @if($isi->jenis_kelamin =='Laki - laki') checked @endif>
                                <label for="male" style="padding-left: 0px; min-width: 100px;">Laki - laki</label>
                                <input type="radio" id="female" name="jenis_kelamin" value="Perempuan" @if($isi->jenis_kelamin =='Perempuan' ) checked @endif style="margin-right: -10">
                                <label for="female" style="padding-left: 0px; min-width: 100px;">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="npm" class="form-control" value="{{ $npm }}" readonly>
                                <label class="form-label">NPM</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Pilih Jurusan</label>
                            <select id="jurusan" name="jurusan">
                                <option value="Matematika" @if($isi->jurusan == 'Matematika' ) selected @endif>Matematika</option>
                                <option value="Biologi" @if($isi->jurusan == 'Biologi' ) selected @endif>Biologi</option>
                                <option value="Fisika" @if($isi->jurusan == 'Fisika' ) selected @endif>Fisika</option>
                                <option value="Kimia" @if($isi->jurusan == 'Kimia' ) selected @endif>Kimia</option>
                                <option value="Statistika" @if($isi->jurusan == 'Statistika' ) selected @endif>Statistika</option>
                                <option value="Geofisika" @if($isi->jurusan == 'Geofisika' ) selected @endif>Geofisika</option>
                                <option value="TeknikInformatika" @if($isi->jurusan == 'TeknikInformatika' ) selected @endif>TeknikInformatika</option>
                                <option value="TeknikElektro" @if($isi->jurusan == 'TeknikElektro' ) selected @endif>TeknikElektro</option>
                                <option value="Aktuaria" @if($isi->jurusan == 'Aktuaria' ) selected @endif>Aktuaria</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama">Pilih Agama</label>
                            <select id="agama" name="agama">
                                <option value="islam" @if($isi->agama =='islam' ) selected @endif>Islam</option>
                                <option value="protestan" @if($isi->agama =='protestan' ) selected @endif>Kristen Protestan</option>
                                <option value="katholik" @if($isi->agama =='katholik' ) selected @endif>Kristen Katolik</option>
                                <option value="hindu" @if($isi->agama =='hindu' ) selected @endif>Hindu</option>
                                <option value="buddha" @if($isi->agama =='buddha' ) selected @endif>Buddha</option>
                            </select>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_lahir" class="form-control" value="{{ $isi->tempat_lahir }}">
                                        <label class="form-label">Tempat, tanggal Lahir</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $isi->tanggal_lahir }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="anak_ke" class="form-control" value="{{ $isi->anak_ke }}">
                                        <label class="form-label">Anak Ke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="bersaudara" class="form-control" value="{{ $isi->bersaudara }}">
                                        <label class="form-label">Dari ... Bersaudara</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Foto
                        </h2>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="body">
                        <div class="thumbnail" style="padding-top: 6px;">
                            <img id="preview" src="{{ url('/images/profile/' . $isi->foto) }}">
                            <div class="caption">
                                <p>Foto 3x4 Berwarna</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" id="foto" name="foto" class="form-control">
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Ayah/Wali
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_ayah" class="form-control" value="{{ $isi->nama_ayah }}">
                                <label class="form-label">Nama Ayah/Wali</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ $isi->pekerjaan_ayah }}">
                                <label class="form-label">Pekerjaan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_ayah" class="form-control" value="{{ $isi->telp_ayah }}">
                                <label class="form-label">No Telp/HP</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Ibu/Wali
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_ibu" class="form-control" value="{{ $isi->nama_ibu }}">
                                <label class="form-label">Nama Ibu/Wali</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ $isi->pekerjaan_ibu }}">
                                <label class="form-label">Pekerjaan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_ibu" class="form-control" value="{{ $isi->telp_ibu }}">
                                <label class="form-label">No Telp/HP</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hobi" class="form-control" value="{{ $isi->hobi }}">
                                <label class="form-label">Kegemaran/Hobi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nohp" class="form-control" value="{{ $isi->nohp }}">
                                <label class="form-label">No HP Pribadi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="golongan_darah" class="form-control" value="{{ $isi->golongan_darah }}">
                                <label class="form-label">Golongan Darah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="tekanan_darah" class="form-control" value="{{ $isi->tekanan_darah }}">
                                <label class="form-label">Tekanan Darah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="berat_badan" class="form-control" value="{{ $isi->berat_badan }}">
                                <label class="form-label">Berat Badan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="tinggi_badan" class="form-control" value="{{ $isi->tinggi_badan }}">
                                <label class="form-label">Tinggi Badan</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Alamat
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control" value="{{ $isi->email }}">
                                <label class="form-label">Email Pribadi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="alamat_rumah" class="form-control" value="{{ $isi->alamat_rumah }}">
                                <label class="form-label">Alamat Rumah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_rumah" class="form-control" value="{{ $isi->telp_rumah }}">
                                <label class="form-label">Telp</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="alamat_kost" class="form-control" value="{{ $isi->alamat_kost }}">
                                <label class="form-label">Alamat Kost</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_kost" class="form-control" value="{{ $isi->telp_kost }}">
                                <label class="form-label">Telp</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Riwayat Pendidikan
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_tk" class="form-control" value="{{ $isi->nama_tk }}">
                                        <label class="form-label">Nama Sekolah (TK)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_tk" class="form-control" value="{{ $isi->kota_tk }}">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_tk" class="form-control" value="{{ $isi->tahun_tk }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_sd" class="form-control" value="{{ $isi->nama_sd }}">
                                        <label class="form-label">Nama Sekolah (SD)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_sd" class="form-control" value="{{ $isi->kota_sd }}">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_sd" class="form-control" value="{{ $isi->tahun_sd }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_smp" class="form-control" value="{{ $isi->nama_smp }}">
                                        <label class="form-label">Nama Sekolah (SMP)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_smp" class="form-control" value="{{ $isi->kota_smp }}">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_smp" class="form-control" value="{{ $isi->tahun_smp }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_sma" class="form-control" value="{{ $isi->nama_sma }}">
                                        <label class="form-label">Nama Sekolah (SMA)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_sma" class="form-control" value="{{ $isi->kota_sma }}">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_sma" class="form-control" value="{{ $isi->tahun_sma }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_pt" class="form-control" value="{{ $isi->nama_pt }}">
                                        <label class="form-label">Nama Sekolah (PT)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_pt" class="form-control" value="{{ $isi->kota_pt }}">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_pt" class="form-control" value="{{ $isi->tahun_pt }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Pengalaman Organisasi / Kepanitiaan / Ekstrakurikuler
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi1" class="form-control" value="{{ $isi->nama_organisasi1 }}">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan1" class="form-control" value="{{ $isi->jabatan1 }}">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun1" class="form-control" value="{{ $isi->tahun1 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi2" class="form-control" value="{{ $isi->nama_organisasi2 }}">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan2" class="form-control" value="{{ $isi->jabatan2 }}">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun2" class="form-control" value="{{ $isi->tahun2 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi3" class="form-control" value="{{ $isi->nama_organisasi3 }}">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan3" class="form-control" value="{{ $isi->jabatan3 }}">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun3" class="form-control" value="{{ $isi->tahun3 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi4" class="form-control" value="{{ $isi->nama_organisasi4 }}">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan4" class="form-control" value="{{ $isi->jabatan4 }}">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun4" class="form-control" value="{{ $isi->tahun4 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi5" class="form-control" value="{{ $isi->nama_organisasi5 }}">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan5" class="form-control" value="{{ $isi->jabatan5 }}">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun5" class="form-control" value="{{ $isi->tahun5 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Prestasi Akademik dan non Akademik
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi1" class="form-control" value="{{ $isi->prestasi1 }}">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga1" class="form-control" value="{{ $isi->lembaga1 }}">
                                        <label class="form-label">Lembaga</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp1" class="form-control" value="{{ $isi->tahunp1 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi2" class="form-control" value="{{ $isi->prestasi2 }}">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga2" class="form-control" value="{{ $isi->lembaga2 }}">
                                        <label class="form-label">Lembaga</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp2" class="form-control" value="{{ $isi->tahunp2 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi3" class="form-control" value="{{ $isi->prestasi3 }}">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga3" class="form-control" value="{{ $isi->lembaga3 }}">
                                        <label class="form-label">Lembaga</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp3" class="form-control" value="{{ $isi->tahunp3 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi4" class="form-control" value="{{ $isi->prestasi4 }}">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga4" class="form-control" value="{{ $isi->lembaga4 }}">
                                        <label class="form-label">Lembaga</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp4" class="form-control" value="{{ $isi->tahunp4 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi5" class="form-control" value="{{ $isi->prestasi5 }}">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga5" class="form-control" value="{{ $isi->lembaga5 }}">
                                        <label class="form-label">Lembaga</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp5" class="form-control" value="{{ $isi->tahunp5 }}">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button><br><br><br><br>
    </form>
    <!-- Vertical Layout | With Floating Label -->
    <!-- END Form -->
</section>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#foto").change(function() {
        readURL(this);
    });
</script>
@endsection