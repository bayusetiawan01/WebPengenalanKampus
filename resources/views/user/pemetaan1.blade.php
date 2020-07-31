@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        FORMULIR PEMETAAN ASPEK PEMBINAAN DAN PELATIHAN ANGGOTA KEMA FMIPA UNPAD 2020
                    </h2>
                </div>
                <div class="body clearfix" style="padding: 50px; padding-top:10px">
                    <div class="progress">
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                    </div><br>
                    Setelah kawan kawan mengetahui keempat kegiatan pemetaan yang telah disediakan, kawan kawan diwajibkan memilih 2 (dua) bentuk kegiatan pemetaan dengan pilihan satu adalah prioritas kawan kawan dalam memilih aspek pembinaan anggota Kema FMIPA Unpad. <br><br>

                    Panitia akan memilih dan menempatkan kawan kawan dalam satu kegiatan pemetaan berdasar pada pilihan dan latar belakang kawan kawan sebelumnya. <br><br>
                    <form id="form" action="/user/pemetaan/store/1" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan1">Pilihan 1</label>
                            <select id="pilihan1" name="pilihan1">
                                <option value="bem" <?php if ($pemetaan->pilihan1 == 'bem') : ?> selected <?php endif ?>>Internship Program BEM Kema FMIPA Unpad </option>
                                <option value="bpm" <?php if ($pemetaan->pilihan1 == 'bpm') : ?> selected <?php endif ?>>Internship Program BPM Kema FMIPA Unpad</option>
                                <option value="kka" <?php if ($pemetaan->pilihan1 == 'kka') : ?> selected <?php endif ?>>Kepanitiaan Kegiatan Angkatan 2020</option>
                                <option value="miba" <?php if ($pemetaan->pilihan1 == 'miba') : ?> selected <?php endif ?>>Internship Program UKM atau KKM ditingkat Fakultas</option>
                                <option value="kti" <?php if ($pemetaan->pilihan1 == 'kti') : ?> selected <?php endif ?>>Pengenalan Karya Tulis Ilmiah</option>
                            </select>
                        </div>
                        <a href="{{url('/user/pemetaan')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection