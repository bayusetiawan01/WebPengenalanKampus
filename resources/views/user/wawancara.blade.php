@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Form -->
    <!-- Vertical Layout | With Floating Label -->
    <form action="/user/wawancara/store" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="nama" class="form-control">
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_panggilan" class="form-control">
                                <label class="form-label">Nama Panggilan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="male" name="jenis_kelamin" value="Laki - laki">
                                <label for="male">Laki - laki</label>
                                <input type="radio" id="female" name="jenis_kelamin" value="Perempuan">
                                <label for="female">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="npm" class="form-control">
                                <label class="form-label">NPM</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jurusan" class="form-control">
                                <label class="form-label">Jurusan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="agama" class="form-control">
                                <label class="form-label">Agama</label>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_lahir" class="form-control">
                                        <label class="form-label">Tempat, tanggal Lahir</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" name="tanggal_lahir" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="anak_ke" class="form-control">
                                        <label class="form-label">Anak Ke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="bersaudara" class="form-control">
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
                    <div class="body">
                        <div class="thumbnail" style="padding-top: 16px;">
                            <img src="http://placehold.it/300x400">
                            <div class="caption">
                                <p>Foto 3x4 Berwarna</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" name="foto" class="form-control">
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
                                <input type="text" name="nama_ayah" class="form-control">
                                <label class="form-label">Nama Ayah/Wali</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pekerjaan_ayah" class="form-control">
                                <label class="form-label">Pekerjaan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_ayah" class="form-control">
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
                                <input type="text" name="nama_ibu" class="form-control">
                                <label class="form-label">Nama Ibu/Wali</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pekerjaan_ibu" class="form-control">
                                <label class="form-label">Pekerjaan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_ibu" class="form-control">
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
                                <input type="text" name="hobi" class="form-control">
                                <label class="form-label">Kegemaran/Hobi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nohp" class="form-control">
                                <label class="form-label">No HP Pribadi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="golongan_darah" class="form-control">
                                <label class="form-label">Golongan Darah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="tekanan_darah" class="form-control">
                                <label class="form-label">Tekanan Darah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="berat_badan" class="form-control">
                                <label class="form-label">Berat Badan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="tinggi_badan" class="form-control">
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
                                <input type="text" name="email" class="form-control">
                                <label class="form-label">Email Pribadi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="alamat_rumah" class="form-control">
                                <label class="form-label">Alamat Rumah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_rumah" class="form-control">
                                <label class="form-label">Telp</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="alamat_kost" class="form-control">
                                <label class="form-label">Alamat Kost</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telp_kost" class="form-control">
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
                                        <input type="text" name="nama_tk" class="form-control">
                                        <label class="form-label">Nama Sekolah (TK)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_tk" class="form-control">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_tk" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_sd" class="form-control">
                                        <label class="form-label">Nama Sekolah (SD)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_sd" class="form-control">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_sd" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_smp" class="form-control">
                                        <label class="form-label">Nama Sekolah (SMP)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_smp" class="form-control">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_smp" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_sma" class="form-control">
                                        <label class="form-label">Nama Sekolah (SMA)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_sma" class="form-control">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_sma" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_pt" class="form-control">
                                        <label class="form-label">Nama Sekolah (PT)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="kota_pt" class="form-control">
                                        <label class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun_pt" class="form-control">
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
                                        <input type="text" name="nama_organisasi1" class="form-control">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan1" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun1" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi2" class="form-control">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan2" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun2" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi3" class="form-control">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan3" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun3" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi4" class="form-control">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan4" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun4" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_organisasi5" class="form-control">
                                        <label class="form-label">Nama Organisasi / Kepanitiaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="jabatan5" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahun5" class="form-control">
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
                                        <input type="text" name="prestasi1" class="form-control">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga1" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp1" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi2" class="form-control">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga2" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp2" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi3" class="form-control">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga3" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp3" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi4" class="form-control">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga4" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp4" class="form-control">
                                        <label class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="prestasi5" class="form-control">
                                        <label class="form-label">Prestasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="lembaga5" class="form-control">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tahunp5" class="form-control">
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
@endsection