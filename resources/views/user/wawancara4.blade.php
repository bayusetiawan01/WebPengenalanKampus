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
    <form action="/user/wawancara4/store" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Riwayat Kesehatan
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="npm" class="form-control" value="{{ $npm }}" readonly>
                                <label class="form-label" style="color: #333;">NPM</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">1. Penyakit yang pernah dialami:</h4>
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="asma" />
                                <label for="md_checkbox_21">Asma</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="tbc" />
                                <label for="md_checkbox_21">TBC</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="pneumonia" />
                                <label for="md_checkbox_21">Pneumonia</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="epilepsi" />
                                <label for="md_checkbox_21">Epilepsi</label><br>
                            </div>
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="jantung" />
                                <label for="md_checkbox_21">Penyakit Jantung</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="patah_tulang" />
                                <label for="md_checkbox_21">Patah Tulang</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="hipertensi" />
                                <label for="md_checkbox_21">Hipertensi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="diabetes" />
                                <label for="md_checkbox_21">Diabetes</label><br>
                            </div>
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="hipotensi" />
                                <label for="md_checkbox_21">Hipotensi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="anemia" />
                                <label for="md_checkbox_21">Anemia</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="kolera" />
                                <label for="md_checkbox_21">Kolera</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="maag" />
                                <label for="md_checkbox_21">Maag</label><br>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="penyakit_lain" class="form-control" value="{{ old('penyakit_lain') }}">
                                <label class="form-label">Penyakit Lain</label>
                            </div>
                        </div>
                        <p>a. Kapan terakhir mengalami?</p>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="Rentang 0-14 Hari" name="terakhir_mengalami" value="Rentang 0-14 Hari">
                                <label for="Rentang 0-14 Hari" style="padding-left: 0px; min-width: 100px;">Rentang 0-14 Hari</label><br>
                                <input type="radio" id="Rentang 2-8 minggu" name="terakhir_mengalami" value="Rentang 2-8 minggu">
                                <label for="Rentang 2-8 minggu" style="padding-left: 0px; min-width: 100px;">Rentang 2-8 minggu</label><br>
                                <input type="radio" id="Rentang 2-6 bulan" name="terakhir_mengalami" value="Rentang 2-6 bulan">
                                <label for="Rentang 2-6 bulan" style="padding-left: 0px; min-width: 100px;">Rentang 2-6 bulan</label><br>
                                <input type="radio" id="Rentang ½-sekian tahun" name="terakhir_mengalami" value="Rentang ½-sekian tahun">
                                <label for="Rentang ½-sekian tahun" style="padding-left: 0px; min-width: 100px;">Rentang ½-sekian tahun</label><br>
                            </div>
                        </div>
                        <p>b. Untuk rentang 0-8 minggu, Seberapa sering terjadi?</p>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="Sekali dan tuntas" name="seberapa_sering_terjadi" value="Sekali dan tuntas">
                                <label for="Sekali dan tuntas" style="padding-left: 0px; min-width: 100px;">Sekali dan tuntas</label><br>
                                <input type="radio" id="Setiap minggu" name="seberapa_sering_terjadi" value="Setiap minggu">
                                <label for="Setiap minggu" style="padding-left: 0px; min-width: 100px;">Setiap minggu</label><br>
                                <input type="radio" id="Setiap 3 hari" name="seberapa_sering_terjadi" value="Setiap 3 hari">
                                <label for="Setiap 3 hari" style="padding-left: 0px; min-width: 100px;">Setiap 3 hari</label><br>
                                <input type="radio" id="Lebih sering dari 3 hari sekali" name="seberapa_sering_terjadi" value="Lebih sering dari 3 hari sekali">
                                <label for="Lebih sering dari 3 hari sekali" style="padding-left: 0px; min-width: 100px;">Lebih sering dari 3 hari sekali</label><br>
                            </div>
                        </div>
                        <h4 class="card-inside-title">2. Mampu berjalan 200 meter tercepat seberapa lama? </h4>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="Tidak bisa" name="mampu_berjalan" value="Tidak bisa">
                                <label for="Tidak bisa" style="padding-left: 0px; min-width: 100px;">Tidak bisa</label><br>
                                <input type="radio" id="Bisa rentang 0-5 menit" name="mampu_berjalan" value="Bisa rentang 0-5 menit">
                                <label for="Bisa rentang 0-5 menit" style="padding-left: 0px; min-width: 100px;">Bisa rentang 0-5 menit</label><br>
                                <input type="radio" id="Bisa rentang 5-15 menit" name="mampu_berjalan" value="Bisa rentang 5-15 menit">
                                <label for="Bisa rentang 5-15 menit" style="padding-left: 0px; min-width: 100px;">Bisa rentang 5-15 menit</label><br>
                                <input type="radio" id="Bisa rentang ¼-2 jam" name="mampu_berjalan" value="Bisa rentang ¼-2 jam">
                                <label for="Bisa rentang ¼-2 jam" style="padding-left: 0px; min-width: 100px;">Bisa rentang ¼-2 jam</label><br>
                            </div>
                        </div>
                        <h4 class="card-inside-title">3. Apakah Anda mempunyai alergi? </h4>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <div class="demo-radio-button">
                                <input type="radio" id="Ya" name="mempunyai_alergi" value="Ya">
                                <label for="Ya" style="padding-left: 0px; min-width: 100px;">Ya</label><br>
                                <input type="radio" id="Tidak" name="mempunyai_alergi" value="Tidak">
                                <label for="Tidak" style="padding-left: 0px; min-width: 100px;">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jenis_alergi" class="form-control" value="{{ old('jenis_alergi') }}">
                                <label class="form-label">Jenis alergi apa yang anda miliki? Apa saja pemicu alergi tersebut?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">4. Untuk yang memiliki penyakit diatas, apakah ada pantangan dari dokter? Sebutkan jika ada</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pantangan" class="form-control" value="{{ old('pantangan') }}">
                            </div>
                        </div>
                        <h4 class="card-inside-title">5. Kelainan mental yang pernah dialami</h4>
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="fobia" />
                                <label for="md_checkbox_21">Fobia</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="stress" />
                                <label for="md_checkbox_21">Stress</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="adhd" />
                                <label for="md_checkbox_21">ADHD</label><br>
                            </div>
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="disosiatif" />
                                <label for="md_checkbox_21">Gangguan Disosiatif</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="kecemasan" />
                                <label for="md_checkbox_21">Gangguan Kecemasan</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="self_harm" />
                                <label for="md_checkbox_21">Self Harm</label><br>
                            </div>
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="bipolar" />
                                <label for="md_checkbox_21">Bipolar</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="depresi" />
                                <label for="md_checkbox_21">Depresi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="trauma" />
                                <label for="md_checkbox_21">Trauma</label><br>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="mental_lainnya" class="form-control" value="{{ old('mental_lainnya') }}">
                                <label class="form-label">Lainnya</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="dikonsultasikan" class="form-control" value="{{ old('dikonsultasikan') }}">
                                <label class="form-label">a. Apakah pernah dikonsultasikan?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="obat" class="form-control" value="{{ old('obat') }}">
                                <label class="form-label">b. Ada medikasi (pemberian obat)? Obat apa?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pemicu" class="form-control" value="{{ old('pemicu') }}">
                                <label class="form-label">c. Untuk bipolar,trauma,kecemasan,fobia,stress, apakah pemicunya?</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Vertical Layout | With Floating Label -->
    <!-- END Form -->
</section>
@endsection