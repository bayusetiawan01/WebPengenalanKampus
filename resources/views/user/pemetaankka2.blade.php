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
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div><br>
                    Terimakasih kamu telah memilih kegiatan pemetaan Kegiatan Kepanitiaan Angkatan 2020 sebagai pilihan kedua.<br><br>

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

                    <form id="form" action="/user/pemetaan/store/4" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan21">Pilihan 1</label>
                            <select id="pilihan21" name="pilihan21">
                                <option value="Project Officer" <?php if ($pemetaan->pilihan21 == 'Project Officer') : ?> selected <?php endif ?>>Project Officer</option>
                                <option value="Divisi Acara" <?php if ($pemetaan->pilihan21 == 'Divisi Acara') : ?> selected <?php endif ?>>Divisi Acara</option>
                                <option value="Divisi Hubungan Masyarakat" <?php if ($pemetaan->pilihan21 == 'Divisi Hubungan Masyarakat') : ?> selected <?php endif ?>>Divisi Hubungan Masyarakat</option>
                                <option value="Divisi Sponsorship and Funding" <?php if ($pemetaan->pilihan21 == 'Divisi Sponsorship and Funding') : ?> selected <?php endif ?>>Divisi Sponsorship and Funding</option>
                                <option value="Divisi Logistik" <?php if ($pemetaan->pilihan21 == 'Divisi Logistik') : ?> selected <?php endif ?>>Divisi Logistik</option>
                                <option value="Divisi Dokumentasi dan Desain" <?php if ($pemetaan->pilihan21 == 'Divisi Dokumentasi dan Desain') : ?> selected <?php endif ?>>Divisi Dokumentasi dan Desain</option>
                                <option value="Divisi Publikasi" <?php if ($pemetaan->pilihan21 == 'Divisi Publikasi') : ?> selected <?php endif ?>>Divisi Publikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pilihan22">Pilihan 2</label>
                            <select id="pilihan22" name="pilihan22">
                                <option value="Project Officer" <?php if ($pemetaan->pilihan22 == 'Project Officer') : ?> selected <?php endif ?>>Project Officer</option>
                                <option value="Divisi Acara" <?php if ($pemetaan->pilihan22 == 'Divisi Acara') : ?> selected <?php endif ?>>Divisi Acara</option>
                                <option value="Divisi Hubungan Masyarakat" <?php if ($pemetaan->pilihan22 == 'Divisi Hubungan Masyarakat') : ?> selected <?php endif ?>>Divisi Hubungan Masyarakat</option>
                                <option value="Divisi Sponsorship and Funding" <?php if ($pemetaan->pilihan22 == 'Divisi Sponsorship and Funding') : ?> selected <?php endif ?>>Divisi Sponsorship and Funding</option>
                                <option value="Divisi Logistik" <?php if ($pemetaan->pilihan22 == 'Divisi Logistik') : ?> selected <?php endif ?>>Divisi Logistik</option>
                                <option value="Divisi Dokumentasi dan Desain" <?php if ($pemetaan->pilihan22 == 'Divisi Dokumentasi dan Desain') : ?> selected <?php endif ?>>Divisi Dokumentasi dan Desain</option>
                                <option value="Divisi Publikasi" <?php if ($pemetaan->pilihan22 == 'Divisi Publikasi') : ?> selected <?php endif ?>>Divisi Publikasi</option>
                            </select>
                        </div>
                        <a href="{{url('/user/pemetaan/3')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection