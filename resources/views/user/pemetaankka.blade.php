@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        FORMULIR PEMETAAN ASPEK PEMBINAAN DAN PELATIHAN ANGGOTA KEMA FMIPA UNPAD 2020
                        @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                    </h2>
                </div>
                <div class="body clearfix" style="padding: 50px; padding-top:10px">
                    <div class="progress">
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        </div>
                    </div><br>
                    Terimakasih kamu telah memilih kegiatan pemetaan Kegiatan Kepanitiaan Angkatan 2020 sebagai pilihan pertama.<br><br>

                    Sebelum kamu memilih Bagian Pekerjaan tempat kamu bekerja, ada baiknya kamu mengenal dengan membaca deskripsi kerja bagian pekerjaan dibawah ini :<br><br>

                    - Project Officer<br>
                    Project Officer bertugas untuk memimpin penyelenggaraan kegiatan angkatan 2020.<br><br>
                    - Acara<br>
                    Merupakan divisi yang bertugas untuk membuat konsep dan teknis detail kegiatan angkatan 2020.<br><br>
                    - Hubungan Masyarakat<br>
                    Merupakan divisi yang bertugas untuk menyampaikan informasi kepada pihak pendukung kegiatan dan menjaga nama baik kegiatan angkatan 2020.<br><br>
                    - Sponsorship and Funding<br>
                    Merupakan divisi yang bertugas untuk mengusahakan ketersediaan dana kegiatan.<br><br>
                    - Logistik<br>
                    Merupakan divisi yang bertugas untuk memastikan ketersediaan alat dan bahan penunjang kegiatan angkatan 2020 berlangsung.<br><br>
                    - Dokumentasi dan Desain<br>
                    Merupaka divisi yang bertugas untuk membuat desain pesan digital sebagai bahan penunjang sosialisasi kegiatan angkatan 2020.<br><br>
                    - Publikasi<br>
                    Merupakan divisi yang bertugas untuk mengatur segala jenis penyampaian informasi dari berbagai media social.<br><br>

                    Setelah kamu mengenal bagian pekerjaan yang tersedia untuk tempat kamu bekerja, silahkan pilih dua bagian pekerjaan dengan pilihan pertama sebagai prioritas dan kedua adalah alternatif.
                    <br><br>

                    <form id="form" action="/user/pemetaan/store/2" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan11">Pilihan 1</label>
                            <select id="pilihan11" name="pilihan11">
                                <option value="Project Offier" <?php if ($pemetaan->pilihan11 == 'Project Offier') : ?> selected <?php endif ?>>Project Offier</option>
                                <option value="Divisi Acara" <?php if ($pemetaan->pilihan11 == 'Divisi Acara') : ?> selected <?php endif ?>>Divisi Acara</option>
                                <option value="Divisi Hubungan Masyarakat" <?php if ($pemetaan->pilihan11 == 'Divisi Hubungan Masyarakat') : ?> selected <?php endif ?>>Divisi Hubungan Masyarakat</option>
                                <option value="Divisi Sponsorship and Funding" <?php if ($pemetaan->pilihan11 == 'Divisi Sponsorship and Funding') : ?> selected <?php endif ?>>Divisi Sponsorship and Funding</option>
                                <option value="Divisi Logistik" <?php if ($pemetaan->pilihan11 == 'Divisi Logistik') : ?> selected <?php endif ?>>Divisi Logistik</option>
                                <option value="Divisi Dokumentasi dan Desain" <?php if ($pemetaan->pilihan11 == 'Divisi Dokumentasi dan Desain') : ?> selected <?php endif ?>>Divisi Dokumentasi dan Desain</option>
                                <option value="Divisi Publikasi" <?php if ($pemetaan->pilihan11 == 'Divisi Publikasi') : ?> selected <?php endif ?>>Divisi Publikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pilihan12">Pilihan 2</label>
                            <select id="pilihan12" name="pilihan12">
                                <option value="Project Offier" <?php if ($pemetaan->pilihan12 == 'Project Offier') : ?> selected <?php endif ?>>Project Offier</option>
                                <option value="Divisi Acara" <?php if ($pemetaan->pilihan12 == 'Divisi Acara') : ?> selected <?php endif ?>>Divisi Acara</option>
                                <option value="Divisi Hubungan Masyarakat" <?php if ($pemetaan->pilihan12 == 'Divisi Hubungan Masyarakat') : ?> selected <?php endif ?>>Divisi Hubungan Masyarakat</option>
                                <option value="Divisi Sponsorship and Funding" <?php if ($pemetaan->pilihan12 == 'Divisi Sponsorship and Funding') : ?> selected <?php endif ?>>Divisi Sponsorship and Funding</option>
                                <option value="Divisi Logistik" <?php if ($pemetaan->pilihan12 == 'Divisi Logistik') : ?> selected <?php endif ?>>Divisi Logistik</option>
                                <option value="Divisi Dokumentasi dan Desain" <?php if ($pemetaan->pilihan12 == 'Divisi Dokumentasi dan Desain') : ?> selected <?php endif ?>>Divisi Dokumentasi dan Desain</option>
                                <option value="Divisi Publikasi" <?php if ($pemetaan->pilihan12 == 'Divisi Publikasi') : ?> selected <?php endif ?>>Divisi Publikasi</option>
                            </select>
                        </div>
                        <a href="{{url('/user/pemetaan/1')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection