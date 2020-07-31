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
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        </div>
                    </div><br>
                    Setelah kamu memilih bentuk kegiatan pemetaan dipilihan pertama sebagai prioritas, maka saat ini kamu diwajibkan memilih bentuk pemetaan dipilihan kedua sebagai alternatif.<br><br>
                    <form id="form" action="/user/pemetaan/store/3" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan2">Pilihan 2</label>
                            <select id="pilihan2" name="pilihan2">
                                <option value="bem" <?php if ($pemetaan->pilihan2 == 'bem') : ?> selected <?php endif ?>>Internship Program BEM Kema FMIPA Unpad </option>
                                <option value="bpm" <?php if ($pemetaan->pilihan2 == 'bpm') : ?> selected <?php endif ?>>Internship Program BPM Kema FMIPA Unpad</option>
                                <option value="kka" <?php if ($pemetaan->pilihan2 == 'kka') : ?> selected <?php endif ?>>Kepanitiaan Kegiatan Angkatan 2020</option>
                                <option value="miba" <?php if ($pemetaan->pilihan2 == 'miba') : ?> selected <?php endif ?>>Internship Program UKM atau KKM ditingkat Fakultas</option>
                                <option value="kti" <?php if ($pemetaan->pilihan2 == 'kti') : ?> selected <?php endif ?>>Pengenalan Karya Tulis Ilmiah</option>
                            </select>
                        </div>
                        <a href="{{url('/user/pemetaan/2')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection