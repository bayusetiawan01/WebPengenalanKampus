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
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        </div>
                    </div><br>
                    Terimakasih kamu telah mengisi formulir pemetaan aspek pembinaan dan pelatihan anggota Kema FMIPA Unpad 2020 dengan pilihan sebagai berikut:<br><br>

                    <h3>PILIHAN 1</h3>
                    <h4><?php
                        if ($pemetaan->pilihan1 == 'bem') :
                            echo "Internship Program BEM Kema FMIPA Unpad";
                        elseif ($pemetaan->pilihan1 == 'bpm') :
                            echo "Internship Program BPM Kema FMIPA Unpad";
                        elseif ($pemetaan->pilihan1 == 'kka') :
                            echo "Kepanitiaan Kegiatan Angkatan 2020";
                        elseif ($pemetaan->pilihan1 == 'miba') :
                            echo "Internship Program UKM atau KKM ditingkat Fakultas";
                        elseif ($pemetaan->pilihan1 == 'kti') :
                            echo "Pengenalan Karya Tulis Ilmiah";
                        endif;
                        ?></h4>
                    Pilihan 1: <?php echo $pemetaan->pilihan11 ?><br>Pilihan 2: <?php echo $pemetaan->pilihan12 ?>
                    <h3>PILIHAN 2</h3>
                    <h4><?php
                        if ($pemetaan->pilihan2 == 'bem') :
                            echo "Internship Program BEM Kema FMIPA Unpad";
                        elseif ($pemetaan->pilihan2 == 'bpm') :
                            echo "Internship Program BPM Kema FMIPA Unpad";
                        elseif ($pemetaan->pilihan2 == 'kka') :
                            echo "Kepanitiaan Kegiatan Angkatan 2020";
                        elseif ($pemetaan->pilihan2 == 'miba') :
                            echo "Internship Program UKM atau KKM ditingkat Fakultas";
                        elseif ($pemetaan->pilihan2 == 'kti') :
                            echo "Pengenalan Karya Tulis Ilmiah";
                        endif;
                        ?></h4>
                    Pilihan 1: <?php echo $pemetaan->pilihan21 ?><br>Pilihan 2: <?php echo $pemetaan->pilihan22 ?>

                    <br><br>
                    Data kamu akan panitia proses dan kamu akan dikelompokan berdasar pada data yang telah kamu Input pada Formulir Pemetaan ini. Kamu dapat menunggu hasil olah data dan informasi dimana kamu akan melakukan kegiatan pemetaan. Pengumuman dan informasi selanjutnya dapat dilihat di Official Account Instagram dan LINE MIPA BERSATU 2020 <br><br>
                    Semangat selalu Pramuda FMIPA 2020 <br><br>
                    Semoga melalui kegiatan pemetaan ini kawan kawan akan lebih mengenal salah satu aspek pembinaan dan pelatihan anggota Kema FMIPA Unpad dan melanjutkan kegiatan pengembangan pada pembinaan lanjutan sesuai rekomendasi aspek pembinaan dan pelatihan yang nanti akan kawan kawan peroleh. <br><br>

                    <a href="{{url('/user/pemetaan/4')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                    <a href="{{url('/user')}}" class="btn btn-danger m-t-15 waves-effect">Selesai</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection