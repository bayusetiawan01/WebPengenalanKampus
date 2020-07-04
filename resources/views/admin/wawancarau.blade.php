@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Formulir Data Diri
                    </h2>
                </div>
                <div class="body">
                    <br><br>
                    <div class="panel-group" id="accordion_4" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingOne_4">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseOne_4" aria-expanded="true" aria-controls="collapseOne_4">
                                        Data Diri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_4">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>{{$isi->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td>{{$isi->nama_panggilan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{$isi->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NPM</td>
                                                    <td>{{$isi->npm}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jurusan</td>
                                                    <td>{{$isi->jurusan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>{{$isi->agama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Lahir</td>
                                                    <td>{{$isi->tempat_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>{{$isi->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Anak ke</td>
                                                    <td>{{$isi->anak_ke}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bersaudara</td>
                                                    <td>{{$isi->bersaudara}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Foto</td>
                                                    <td><img id="preview" src="{{ url('/images/profile/' . $isi->foto) }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ayah</td>
                                                    <td>{{$isi->nama_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td>{{$isi->pekerjaan_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>No Telp Ayah</td>
                                                    <td>{{$isi->telp_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ibu</td>
                                                    <td>{{$isi->nama_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan Ibu</td>
                                                    <td>{{$isi->pekerjaan_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <td>No Telp Ibu</td>
                                                    <td>{{$isi->telp_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kegemaran / Hobi</td>
                                                    <td>{{$isi->hobi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Hp Pribadi</td>
                                                    <td>{{$isi->nohp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Golongan Darah</td>
                                                    <td>{{$isi->golongan_darah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tekanan Darah</td>
                                                    <td>{{$isi->tekanan_darah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tinggi Badan</td>
                                                    <td>{{$isi->tinggi_badan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Berat Badan</td>
                                                    <td>{{$isi->berat_badan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{$isi->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Rumah</td>
                                                    <td>{{$isi->alamat_rumah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon Rumah</td>
                                                    <td>{{$isi->telp_rumah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Kost</td>
                                                    <td>{{$isi->alamat_kost}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon Kost</td>
                                                    <td>{{$isi->telp_kost}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama TK</td>
                                                    <td>{{$isi->nama_tk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_tk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_tk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama SD</td>
                                                    <td>{{$isi->nama_sd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_sd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_sd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama SMP</td>
                                                    <td>{{$isi->nama_smp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_smp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_smp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama SMA</td>
                                                    <td>{{$isi->nama_sma}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_sma}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_sma}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama PT</td>
                                                    <td>{{$isi->nama_pt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_pt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_pt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp5}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingTwo_4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseTwo_4" aria-expanded="false" aria-controls="collapseTwo_4">
                                        Informasi Diri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_4">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sebutkan kekurangan dan kelebihan anda!</td>
                                                    <td>{{$isi2->kekurangan_kelebihan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa yang kamu ketahui tentang perbedaan siswa dan mahasiswa?</td>
                                                    <td>{{$isi2->perbedaan_mahasiswa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa yang kamu ketahui tentang BEM? Apa yang kamu ketahui tentang Himpunan Mahasiswa?</td>
                                                    <td>{{$isi2->bem_hima}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Menurut kamu, apa peran dan fungsi angkatan FMIPA Unpad?</td>
                                                    <td>{{$isi2->fungsi_angkatan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kritis</td>
                                                    <td>{{$isi2->kritis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Solusional</td>
                                                    <td>{{$isi2->solusional}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Logis</td>
                                                    <td>{{$isi2->logis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sistematis</td>
                                                    <td>{{$isi2->sistematis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Berlandasan</td>
                                                    <td>{{$isi2->berlandasan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa arti pemimpin menurutmu? Siapa pemimpin idolamu (selain Rasulullah)?</td>
                                                    <td>{{$isi2->arti_pemimpin}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa yang kamu ketahui tentang koordinator angkatan? Siapkah menjadi koordinator angkatan?</td>
                                                    <td>{{$isi2->koordinator}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingThree_4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseThree_4" aria-expanded="false" aria-controls="collapseThree_4">
                                        Kesehatan
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_4">
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Asma</td>
                                                <td>{{$isi3->asma}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sakit Mata</td>
                                                <td>{{$isi3->sakit_mata}}</td>
                                            </tr>
                                            <tr>
                                                <td>DBD</td>
                                                <td>{{$isi3->dbd}}</td>
                                            </tr>
                                            <tr>
                                                <td>TBC</td>
                                                <td>{{$isi3->tbc}}</td>
                                            </tr>
                                            <tr>
                                                <td>Patah Tulang</td>
                                                <td>{{$isi3->patah_tulang}}</td>
                                            </tr>
                                            <tr>
                                                <td>Malaria</td>
                                                <td>{{$isi3->malaria}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pneumonia</td>
                                                <td>{{$isi3->pneumonia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kanker</td>
                                                <td>{{$isi3->kanker}}</td>
                                            </tr>
                                            <tr>
                                                <td>Liver</td>
                                                <td>{{$isi3->liver}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sinusitis</td>
                                                <td>{{$isi3->sinusitis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hepatitis</td>
                                                <td>{{$isi3->hepatitis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Penyakit Jantung</td>
                                                <td>{{$isi3->penyakit_jantung}}</td>
                                            </tr>
                                            <tr>
                                                <td>Cacar</td>
                                                <td>{{$isi3->cacar}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipertensi</td>
                                                <td>{{$isi3->hipertensi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kolera</td>
                                                <td>{{$isi3->kolera}}</td>
                                            </tr>
                                            <tr>
                                                <td>Campak</td>
                                                <td>{{$isi3->campak}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipotensi</td>
                                                <td>{{$isi3->hipotensi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tifus</td>
                                                <td>{{$isi3->tifus}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipotermia</td>
                                                <td>{{$isi3->hipotermia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipertermia</td>
                                                <td>{{$isi3->hipertermia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Anemia</td>
                                                <td>{{$isi3->anemia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Usus Buntu</td>
                                                <td>{{$isi3->usus_buntu}}</td>
                                            </tr>
                                            <tr>
                                                <td>Migrain</td>
                                                <td>{{$isi3->migrain}}</td>
                                            </tr>
                                            <tr>
                                                <td>Diabetes</td>
                                                <td>{{$isi3->diabetes}}</td>
                                            </tr>
                                            <tr>
                                                <td>Epilepsi</td>
                                                <td>{{$isi3->epilepsi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sakit Gigi</td>
                                                <td>{{$isi3->sakit_gigi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Maag</td>
                                                <td>{{$isi3->maag}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hiv</td>
                                                <td>{{$isi3->hiv}}</td>
                                            </tr>
                                            <tr>
                                                <td>Penyakit Lain</td>
                                                <td>{{$isi3->penyakit_lain}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sedang Menderita Penyakit Tertentu</td>
                                                <td>{{$isi3->sedang_menderita}}</td>
                                            </tr>
                                            <tr>
                                                <td>3 Bulan Terakhir</td>
                                                <td>{{$isi3->tiga_bulan}}</td>
                                            </tr>
                                            <tr>
                                                <td>6 Bulan Terakhir</td>
                                                <td>{{$isi3->enam_bulan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Riwayat Kesehatan Keluarga</td>
                                                <td>{{$isi3->penyakit_keluarga}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Alergi</td>
                                                <td>{{$isi3->jenis_alergi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Keluhan Alergi</td>
                                                <td>{{$isi3->keluhan_alergi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Menangani Alergi</td>
                                                <td>{{$isi3->cara_menangani}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernah Dirawat di Rumah Sakit</td>
                                                <td>{{$isi3->rumah_sakit}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernah Operasi</td>
                                                <td>{{$isi3->operasi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pantangan Operasi</td>
                                                <td>{{$isi3->pantangan_operasi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Keluarga yang Dapat Dihubungi</td>
                                                <td>{{$isi3->nama_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td>{{$isi3->hp_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{$isi3->alamat_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hubungan Kekerabatan</td>
                                                <td>{{$isi3->hubungan_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Keluarga yang Dapat Dihubungi</td>
                                                <td>{{$isi3->nama_darurat2}}</td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td>{{$isi3->hp_darurat2}}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{$isi3->alamat_darurat2}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hubungan Kekerabatan</td>
                                                <td>{{$isi3->hubungan_darurat2}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingFour_4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseFour_4" aria-expanded="false" aria-controls="collapseFour_4">
                                        Agama
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_4">
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sebutkan kekurangan dan kelebihan anda!</td>
                                                <td>{{$isi2->kekurangan_kelebihan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa yang kamu ketahui tentang perbedaan siswa dan mahasiswa?</td>
                                                <td>{{$isi2->perbedaan_mahasiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa yang kamu ketahui tentang BEM? Apa yang kamu ketahui tentang Himpunan Mahasiswa?</td>
                                                <td>{{$isi2->bem_hima}}</td>
                                            </tr>
                                            <tr>
                                                <td>Menurut kamu, apa peran dan fungsi angkatan FMIPA Unpad?</td>
                                                <td>{{$isi2->fungsi_angkatan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kritis</td>
                                                <td>{{$isi2->kritis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Solusional</td>
                                                <td>{{$isi2->solusional}}</td>
                                            </tr>
                                            <tr>
                                                <td>Logis</td>
                                                <td>{{$isi2->logis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sistematis</td>
                                                <td>{{$isi2->sistematis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Berlandasan</td>
                                                <td>{{$isi2->berlandasan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa arti pemimpin menurutmu? Siapa pemimpin idolamu (selain Rasulullah)?</td>
                                                <td>{{$isi2->arti_pemimpin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa yang kamu ketahui tentang koordinator angkatan? Siapkah menjadi koordinator angkatan?</td>
                                                <td>{{$isi2->koordinator}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: fixed; right:0" class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Formulir Penilaian
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix" style="text-align: center;">
                        <button class="btn btn-danger waves-effect" type="button" data-toggle="collapse" data-target="#collapseKetentuan" aria-expanded="false" aria-controls="collapseExample">
                            Buka Ketentuan
                        </button>
                        <button class="btn btn-danger waves-effect" type="button" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseExample">
                            Buka Form
                        </button>
                    </div>
                    <div class="collapse" id="collapseForm">
                        <div class="well" style="background-color: white; overflow:scroll; height:400px">
                            @if($nilai == NULL)
                            <form action="/admin/wawancara/store" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="npm" class="form-control" value="{{ $isi->npm }}" readonly>
                                        <label class="form-label">NPM</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="organisasi" class="form-control" value="{{ old('organisasi') }}" required>
                                        <label class="form-label">Organisasi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="jawaban_wawancara" class="form-control" value="{{ old('jawaban_wawancara') }}" required>
                                        <label class="form-label">Jawaban Wawancara dan Studi Kasus</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="sikap_wawancara" class="form-control" value="{{ old('sikap_wawancara') }}" required>
                                        <label class="form-label">Sikap Selama Wawancara</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="koordinator" class="form-control" value="{{ old('koordinator') }}" required>
                                        <label class="form-label">Ketersediaan Koordinator Angkatan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="sbmptn" class="form-control" value="{{ old('sbmptn') }}" required>
                                        <label class="form-label">SBMPTN Lagi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="prodi_mipa" class="form-control" value="{{ old('prodi_mipa') }}" required>
                                        <label class="form-label">Menyebutkan Prodi di Mipa</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="lk_kkm" class="form-control" value="{{ old('lk_kkm') }}" required>
                                        <label class="form-label">LK/KKM di Mipa</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="sikap_prodi" class="form-control" value="{{ old('sikap_prodi') }}" required>
                                        <label class="form-label">Sikap Terhadap Prodi Lain</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                            </form>
                            @else
                            <form action="/admin/wawancara/update" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="npm" class="form-control" value="{{ $nilai->npm }}" readonly>
                                        <label class="form-label">NPM</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="organisasi" class="form-control" value="{{ $nilai->organisasi }}" required>
                                        <label class="form-label">Organisasi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="jawaban_wawancara" class="form-control" value="{{ $nilai->jawaban_wawancara }}" required>
                                        <label class="form-label">Jawaban Wawancara dan Studi Kasus</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="sikap_wawancara" class="form-control" value="{{ $nilai->sikap_wawancara }}" required>
                                        <label class="form-label">Sikap Selama Wawancara</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="koordinator" class="form-control" value="{{ $nilai->koordinator }}" required>
                                        <label class="form-label">Ketersediaan Koordinator Angkatan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="sbmptn" class="form-control" value="{{ $nilai->sbmptn }}" required>
                                        <label class="form-label">SBMPTN Lagi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="prodi_mipa" class="form-control" value="{{ $nilai->prodi_mipa }}" required>
                                        <label class="form-label">Menyebutkan Prodi di Mipa</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="lk_kkm" class="form-control" value="{{ $nilai->lk_kkm }}" required>
                                        <label class="form-label">LK/KKM di Mipa</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="sikap_prodi" class="form-control" value="{{ $nilai->sikap_prodi }}" required>
                                        <label class="form-label">Sikap Terhadap Prodi Lain</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    <div class="collapse" id="collapseKetentuan">
                        <div class="well" style="overflow:scroll; height:400px">
                            Organisasi: <br>
                            0 = tidak mengikuti <br>
                            1 = staff <br>
                            2 = kepala departemen/divisi <br>
                            3 = ketua/wakil/kepala bidang/sekben <br><br>
                            Jawaban Wawancara dan Studi Kasus: <br>
                            1 = lama dan penuh pertimbangan <br>
                            2 = terbata-bata/cepat tapi plinplan <br>
                            3 = percaya diri dan tegas menyampaikan alasan <br><br>
                            Sikap Selama Wawancara: <br>
                            1 = duduk dan bicara seenaknya <br>
                            2 = santai seperti ke teman <br>
                            3 = sopan dan menghargai pewawancara <br><br>
                            Ketersediaan mencadi koordinator: <br>
                            1 = tidak. 2 = ragu. 3 = ya <br><br>
                            SBMPTN Lagi: <br>
                            1 = ya. 2 = ragu. 3 = tidak <br><br>
                            Sebutkan Prodi: <br>
                            1 = (0-3). 2 = (4-6). 3 = (7-9) <br><br>
                            LK/KKM di FMIPA: <br>
                            1 = tidak tahu dan tidak mau<br>
                            2 = tahu tapi tidak mau atau sebaliknya<br>
                            3 = tahu dan mau <br><br>
                            Sikap terhadap prodi lain: <br>
                            1 = tidak peduli<br>
                            2 = biasa saja<br>
                            3 = peduli dan ingin saling berkoordinasi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</section>
@endsection