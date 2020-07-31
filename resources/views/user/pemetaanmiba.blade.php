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
                    Terimakasih kamu telah memilih kegiatan pemetaan Kegiatan internship Program UKM atau KKM di tingkat Fakultas sebagai pilihan pertama.<br><br>

                    Sebelum kamu memilih UKM atau KKM tempat kamu magang, ada baiknya kamu mengenal dengan membaca deskripsi UKM atau KKM dibawah ini :<br><br>

                    - UKM KPPA Caldera<br>
                    Merupakan Lembaga Kemahasiswaan Pecinta Alam FMIPA Unpad<br><br>
                    - UKM FUMA<br>
                    Merupakan Lembaga Kemahasiswaan yang memfasilitasi pengembangan minat dan bakat akan olahraga Futsal<br><br>
                    - UKM BASMI<br>
                    Merupakan Lembaga Kemahasiswaan yang memfasilitasi pengembangan minat dan bakat akan olahraga Basket<br><br>
                    - UKM SCABA<br>
                    Merupakan Lembaga Kemahasiswaan yang memfasilitasi pengembangan minat dan bakat akan olahraga Bulutangkis<br><br>
                    - KKM VOLTASE<br>
                    Merupakan Kelompok Kegiatan Mahasiswa yang memfasilitasi pengembangan minat dan bakat akan olahraga Voli<br><br>
                    - KKM Artemipa<br>
                    Merupakan Kelompok Kegiatan Mahasiswa yang memfasilitasi pengembangan minat dan bakat akan Kesenian<br><br>

                    Setelah kamu mengenal UKM dan KKM yang tersedia untuk tempat kamu magang, silahkan pilih dua UKM atau KKM dengan pilihan pertama sebagai prioritas dan kedua adalah alternatif.
                    <br><br>

                    <form id="form" action="/user/pemetaan/store/2" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pilihan11">Pilihan 1</label>
                            <select id="pilihan11" name="pilihan11">
                                <option value="UKM KPPA Caldera" <?php if ($pemetaan->pilihan11 == 'UKM KPPA Caldera') : ?> selected <?php endif ?>>UKM KPPA Caldera</option>
                                <option value="UKM FUMA" <?php if ($pemetaan->pilihan11 == 'UKM FUMA') : ?> selected <?php endif ?>>UKM FUMA</option>
                                <option value="UKM BASMI" <?php if ($pemetaan->pilihan11 == 'UKM BASMI') : ?> selected <?php endif ?>>UKM BASMI</option>
                                <option value="UKM SCABA" <?php if ($pemetaan->pilihan11 == 'UKM SCABA') : ?> selected <?php endif ?>>UKM SCABA</option>
                                <option value="KKM VOLTASE" <?php if ($pemetaan->pilihan11 == 'KKM VOLTASE') : ?> selected <?php endif ?>>KKM VOLTASE</option>
                                <option value="KKM Artemipa" <?php if ($pemetaan->pilihan11 == 'KKM Artemipa') : ?> selected <?php endif ?>>KKM Artemipa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pilihan12">Pilihan 2</label>
                            <select id="pilihan12" name="pilihan12">
                                <option value="UKM KPPA Caldera" <?php if ($pemetaan->pilihan12 == 'UKM KPPA Caldera') : ?> selected <?php endif ?>>UKM KPPA Caldera</option>
                                <option value="UKM FUMA" <?php if ($pemetaan->pilihan12 == 'UKM FUMA') : ?> selected <?php endif ?>>UKM FUMA</option>
                                <option value="UKM BASMI" <?php if ($pemetaan->pilihan12 == 'UKM BASMI') : ?> selected <?php endif ?>>UKM BASMI</option>
                                <option value="UKM SCABA" <?php if ($pemetaan->pilihan12 == 'UKM SCABA') : ?> selected <?php endif ?>>UKM SCABA</option>
                                <option value="KKM VOLTASE" <?php if ($pemetaan->pilihan12 == 'KKM VOLTASE') : ?> selected <?php endif ?>>KKM VOLTASE</option>
                                <option value="KKM Artemipa" <?php if ($pemetaan->pilihan12 == 'KKM Artemipa') : ?> selected <?php endif ?>>KKM Artemipa</option>
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