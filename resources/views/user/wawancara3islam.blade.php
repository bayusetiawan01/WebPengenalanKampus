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
    <form action="/user/wawancara3store/islam" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Wawancara Agama Islam
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="npm" class="form-control" value="{{ $npm }}" readonly>
                                <label class="form-label" style="color: #333;">NPM</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="kalimat_syahadat">{{ old('kalimat_syahadat') }}</textarea>
                                <label class="form-label" style="color: #333;">1. Tuliskan dua kalimat syahadat!</label>
                            </div>
                        </div>
                        <div class="row clearfix" style="margin: 5px;">
                            <h4 class="card-inside-title" style="color: #333; font-weight:normal;">2. Pelaksanaan amalan yaumi:</h4>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">a. Shalat Wajib</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="shalat_wajib" value="rutin" value="{{ old('shalat_wajib') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="shalat_wajib" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="shalat_wajib" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="shalat_wajib" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="shalat_wajib" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">b. Tilawah Al-Qur’an</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="tilawah" value="rutin" value="{{ old('tilawah') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="tilawah" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="tilawah" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="tilawah" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="tilawah" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">c. Shalat Dhuha</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="dhuha" value="rutin" value="{{ old('dhuha') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="dhuha" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="dhuha" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="dhuha" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="dhuha" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">d. Shalat Tahajud</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="tahajud" value="rutin" value="{{ old('tahajud') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="tahajud" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="tahajud" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="tahajud" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="tahajud" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">e. Shalat Rawatib</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="rawatib" value="rutin" value="{{ old('rawatib') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="rawatib" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="rawatib" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="rawatib" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="rawatib" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">f. Shalat Berjamaah</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="berjamaah" value="rutin" value="{{ old('berjamaah') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="berjamaah" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="berjamaah" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="berjamaah" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="berjamaah" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">g. Al Ma’tsurat</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="matsurat" value="rutin" value="{{ old('matsurat') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="matsurat" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="matsurat" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="matsurat" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="matsurat" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">h. Shaum Sunnah</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="shaum_sunnah" value="rutin" value="{{ old('shaum_sunnah') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Setiap Hari)</label><br>
                                        <input type="radio" id="sering" name="shaum_sunnah" value="sering" style="margin-right: -10">
                                        <label for="sering" style="padding-left: 0px; min-width: 100px;">Sering (3-5 Kali Seminggu)</label><br>
                                        <input type="radio" id="jarang" name="shaum_sunnah" value="jarang" style="margin-right: -10">
                                        <label for="jarang" style="padding-left: 0px; min-width: 100px;">Jarang(1-2 Kali Seminggu)</label><br>
                                        <input type="radio" id="kadangkadang" name="shaum_sunnah" value="kadang kadang" style="margin-right: -10">
                                        <label for="kadangkadang" style="padding-left: 0px; min-width: 100px;">Kadang - kadang</label><br>
                                        <input type="radio" id="tidakpernah" name="shaum_sunnah" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix" style="margin: 5px;">
                            <h4 class="card-inside-title" style="color: #333; font-weight:normal;">3. Pelaksanaan pembinaan diri (isi sesuai keadaan diri saat ini)</h4>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">a. Pengajian</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="pengajian" value="rutin" value="{{ old('pengajian') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Seminggu Sekali)</label><br>
                                        <input type="radio" id="tidakrutin" name="pengajian" value="tidak rutin" style="margin-right: -10">
                                        <label for="tidakrutin" style="padding-left: 0px; min-width: 100px;">Tidak Rutin</label><br>
                                        <input type="radio" id="tidakpernah" name="pengajian" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="durasi_pengajian" class="form-control" value="{{ old('durasi_pengajian') }}">
                                        <label class="form-label">Durasi Keikutsertaan (Tahun)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_pengajian" class="form-control" value="{{ old('tempat_pengajian') }}">
                                        <label class="form-label">Tempat (Sekolah/LingkunganTempat tinggal)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">b. Mentoring</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="mentoring" value="rutin" value="{{ old('mentoring') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Seminggu Sekali)</label><br>
                                        <input type="radio" id="tidakrutin" name="mentoring" value="tidak rutin" style="margin-right: -10">
                                        <label for="tidakrutin" style="padding-left: 0px; min-width: 100px;">Tidak Rutin</label><br>
                                        <input type="radio" id="tidakpernah" name="mentoring" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="durasi_mentoring" class="form-control" value="{{ old('durasi_mentoring') }}">
                                        <label class="form-label">Durasi Keikutsertaan (Tahun)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_mentoring" class="form-control" value="{{ old('tempat_mentoring') }}">
                                        <label class="form-label">Tempat (Sekolah/LingkunganTempat tinggal)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">c. Liqa</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="liqa" value="rutin" value="{{ old('liqa') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Seminggu Sekali)</label><br>
                                        <input type="radio" id="tidakrutin" name="liqa" value="tidak rutin" style="margin-right: -10">
                                        <label for="tidakrutin" style="padding-left: 0px; min-width: 100px;">Tidak Rutin</label><br>
                                        <input type="radio" id="tidakpernah" name="liqa" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="durasi_liqa" class="form-control" value="{{ old('durasi_liqa') }}">
                                        <label class="form-label">Durasi Keikutsertaan (Tahun)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_liqa" class="form-control" value="{{ old('tempat_liqa') }}">
                                        <label class="form-label">Tempat (Sekolah/LingkunganTempat tinggal)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">d. Keputrian (Khusus Akhwat)</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="keputrian" value="rutin" value="{{ old('keputrian') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Seminggu Sekali)</label><br>
                                        <input type="radio" id="tidakrutin" name="keputrian" value="tidak rutin" style="margin-right: -10">
                                        <label for="tidakrutin" style="padding-left: 0px; min-width: 100px;">Tidak Rutin</label><br>
                                        <input type="radio" id="tidakpernah" name="keputrian" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="durasi_keputrian" class="form-control" value="{{ old('durasi_keputrian') }}">
                                        <label class="form-label">Durasi Keikutsertaan (Tahun)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_keputrian" class="form-control" value="{{ old('tempat_keputrian') }}">
                                        <label class="form-label">Tempat (Sekolah/LingkunganTempat tinggal)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-inside-title" style="color: #333; font-weight:normal;">e. Baca Tulis Qur'an</h4>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="radio" id="rutin" name="baca_quran" value="rutin" value="{{ old('baca_quran') }}">
                                        <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin (Seminggu Sekali)</label><br>
                                        <input type="radio" id="tidakrutin" name="baca_quran" value="tidak rutin" style="margin-right: -10">
                                        <label for="tidakrutin" style="padding-left: 0px; min-width: 100px;">Tidak Rutin</label><br>
                                        <input type="radio" id="tidakpernah" name="baca_quran" value="tidak pernah" style="margin-right: -10">
                                        <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="durasi_baca_quran" class="form-control" value="{{ old('durasi_baca_quran') }}">
                                        <label class="form-label">Durasi Keikutsertaan (Tahun)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tempat_baca_quran" class="form-control" value="{{ old('tempat_baca_quran') }}">
                                        <label class="form-label">Tempat (Sekolah/LingkunganTempat tinggal)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">4. Jumlah Hafalan Al Qur'an</h4>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="lebihdua" name="hafalan_quran" value="lebih dari 2" value="{{ old('hafalan_quran') }}">
                                <label for="lebihdua" style="padding-left: 0px; min-width: 100px;">lebih dari 2 juz</label><br>
                                <input type="radio" id="satusampaidua" name="hafalan_quran" value="1 sampai 2" style="margin-right: -10">
                                <label for="satusampaidua" style="padding-left: 0px; min-width: 100px;">1 - 2 juz</label> <br>
                                <input type="radio" id="satu" name="hafalan_quran" value="satu" style="margin-right: -10">
                                <label for="satu" style="padding-left: 0px; min-width: 100px;">1 juz</label><br>
                                <input type="radio" id="setengahsampaisatu" name="hafalan_quran" value="setengah sampai satu" style="margin-right: -10">
                                <label for="setengahsampaisatu" style="padding-left: 0px; min-width: 100px;">1/2 - 1 juz</label><br>
                                <input type="radio" id="setengah" name="hafalan_quran" value="setengah" style="margin-right: -10">
                                <label for="setengah" style="padding-left: 0px; min-width: 100px;">1/2 juz</label><br>
                                <input type="radio" id="kurangsetengah" name="hafalan_quran" value="satu" style="margin-right: -10">
                                <label for="kurangsetengah" style="padding-left: 0px; min-width: 100px;">kurang dari 1/2 juz</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="buku_islam">{{ old('buku_islam') }}</textarea>
                                <label class="form-label" style="color: #333;">5. Sebutkan buku/ majalah/ tabloid/ bulletin islami yang pernah/ sering Anda baca!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="tokoh_islam">{{ old('tokoh_islam') }}</textarea>
                                <label class="form-label" style="color: #333;">6. Tuliskan tokoh Islam yang anda ketahui!
                                    (sebutkan nama tokoh yang anda ketahui, kemudian isi jika tahu perannya)
                                </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="pendapat_jilbab">{{ old('pendapat_jilbab') }}</textarea>
                                <label class="form-label" style="color: #333;">7. Berikan pendapat Anda tentang Jilbab! Untuk perempuan apakah anda menggunakan jilbab?
                                </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="8" class="form-control no-resize" name="pendapat_ikhtilat">{{ old('pendapat_ikhtilat') }}</textarea>
                                <label class="form-label" style="color: #333;">8. Bagaimana pendapat Anda mengenai ikhtilat (bercampur baur antara laki-laki dan perempuan) dan khalwat (berdua-duaan antara laki-laki dan perempuan yang bukan mahram)?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="pendapat_pacaran">{{ old('pendapat_pacaran') }}</textarea>
                                <label class="form-label" style="color: #333;">9. Bagaimana pendapat Anda mengenai pacaran? Apakah Anda berpacaran?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="ramalan_bintang">{{ old('ramalan_bintang') }}</textarea>
                                <label class="form-label" style="color: #333;">10. Apakah Anda menyukai bacaan tentang ramalan bintang? Apakah Anda mempercayainya? Berikan pendapatmu!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="pendapat_merokok">{{ old('pendapat_merokok') }}</textarea>
                                <label class="form-label" style="color: #333;">11. Apakah Anda merokok? Berikan pendapatmu!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="7" class="form-control no-resize" name="pemimpin_non_muslim">{{ old('pemimpin_non_muslim') }}</textarea>
                                <label class="form-label" style="color: #333;">12. Bagaimana pendapat anda mengenai memilih pemimpin non muslim di suatu wilayah yang masyarakatnya mayoritas muslim? Berikan alasan.</label>
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