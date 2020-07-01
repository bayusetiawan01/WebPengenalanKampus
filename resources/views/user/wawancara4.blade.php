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
                        <h4 class="card-inside-title">Penyakit yang pernah dialami:</h4>
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="asma" />
                                <label for="md_checkbox_21">Asma</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="sakit_mata" />
                                <label for="md_checkbox_21">Sakit Mata</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="dbd" />
                                <label for="md_checkbox_21">DBD</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="tbc" />
                                <label for="md_checkbox_21">TBC</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="patah_tulang" />
                                <label for="md_checkbox_21">Patah Tulang</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="malaria" />
                                <label for="md_checkbox_21">Malaria</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="pneumonia" />
                                <label for="md_checkbox_21">Pneumonia</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="kanker" />
                                <label for="md_checkbox_21">Kanker</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="liver" />
                                <label for="md_checkbox_21">Liver</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="sinusitis" />
                                <label for="md_checkbox_21">Sinusitis</label><br>
                            </div>
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="hepatitis" />
                                <label for="md_checkbox_21">Hepatitis</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="penyakit_jantung" />
                                <label for="md_checkbox_21">Penyakit Jantung</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="cacar" />
                                <label for="md_checkbox_21">Cacar</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="hipertensi" />
                                <label for="md_checkbox_21">Hipertensi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="kolera" />
                                <label for="md_checkbox_21">Kolera</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="campak" />
                                <label for="md_checkbox_21">Campak</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="hipotensi" />
                                <label for="md_checkbox_21">Hipotensi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="tifus" />
                                <label for="md_checkbox_21">Tifus</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="hipotermia" />
                                <label for="md_checkbox_21">Hipotermia</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="hipertermia" />
                                <label for="md_checkbox_21">Hipertermia</label><br>
                            </div>
                            <div class="col-lg-4">
                                <input type="checkbox" class="filled-in chk-col-red" name="anemia" />
                                <label for="md_checkbox_21">Anemia</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="usus_buntu" />
                                <label for="md_checkbox_21">Usus Buntu</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="migrain" />
                                <label for="md_checkbox_21">Migrain</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="diabetes" />
                                <label for="md_checkbox_21">Diabetes</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="epilepsi" />
                                <label for="md_checkbox_21">Epilepsi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="sakit_gigi" />
                                <label for="md_checkbox_21">Sakit gigi</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="maag" />
                                <label for="md_checkbox_21">Maag</label><br>
                                <input type="checkbox" class="filled-in chk-col-red" name="hiv" />
                                <label for="md_checkbox_21">HIV</label><br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="penyakit_lain" class="form-control" value="{{ old('penyakit_lain') }}">
                                        <label class="form-label">Penyakit Lain</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Apakah anda sedang menderita penyakit tertentu?</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="sedang_menderita">{{ old('sedang_menderita') }}</textarea>
                                <label class="form-label" style="color: #333;">Jika ya, jelaskan keluhan dari penyakit yang diderita serta cara penanganannya.</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="enam_bulan">{{ old('enam_bulan') }}</textarea>
                                <label class="form-label" style="color: #333;">Selama 6 Bulan Terakhir</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="tiga_bulan">{{ old('tiga_bulan') }}</textarea>
                                <label class="form-label" style="color: #333;">Selama 3 Bulan Terakhir</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Berdasarkan riwayat kesehatan keluarga anda, apakah orang tua anda sedang atau pernah menderita penyakit tertentu?</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="penyakit_keluarga">{{ old('penyakit_keluarga') }}</textarea>
                                <label class="form-label" style="color: #333;">Jika ya, sebutkan jenis penyakit yang diderita</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Apakah Anda mempunyai alergi? Jika ya:</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="jenis_alergi">{{ old('jenis_alergi') }}</textarea>
                                <label class="form-label" style="color: #333;">Jenis alergi apa yang anda miliki? Apa saja yang dapat memicu alergi tersebut?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="keluhan_alergi">{{ old('keluhan_alergi') }}</textarea>
                                <label class="form-label" style="color: #333;">Keluhan apa saja yang biasa terjadi ketika anda mengalami alergi?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="cara_menangani">{{ old('cara_menangani') }}</textarea>
                                <label class="form-label" style="color: #333;">Bagaimana cara anda menangani alergi tersebut?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Apakah Anda pernah dirawat di rumah sakit?</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="rumah_sakit">{{ old('rumah_sakit') }}</textarea>
                                <label class="form-label" style="color: #333;">Jika ya, apa penyebabnya?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Apakah Anda pernah menjalani operasi?</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="operasi">{{ old('operasi') }}</textarea>
                                <label class="form-label" style="color: #333;">Jika ya, apa penyebabnya?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" name="pantangan_operasi">{{ old('pantangan_operasi') }}</textarea>
                                <label class="form-label" style="color: #333;">Apa pantangan setelah operasi?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Keluarga yang dapat dihubungi dalam keadaan darurat</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_darurat" value="{{ old('nama_darurat') }}" class="form-control">
                                <label class="form-label">Nama</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="alamat_darurat" value="{{ old('alamat_darurat') }}" class="form-control">
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hp_darurat" value="{{ old('hp_darurat') }}" class="form-control">
                                <label class="form-label">Nomor HP</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hubungan_darurat" value="{{ old('hubungan_darurat') }}" class="form-control">
                                <label class="form-label">Hubungan Kekerabatan</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title">Keluarga yang dapat dihubungi dalam keadaan darurat (Alternatif)</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_darurat2" value="{{ old('nama_darurat2') }}" class="form-control">
                                <label class="form-label">Nama</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="alamat_darurat2" value="{{ old('alamat_darurat2') }}" class="form-control">
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hp_darurat2" value="{{ old('hp_darurat2') }}" class="form-control">
                                <label class="form-label">Nomor HP</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hubungan_darurat2" value="{{ old('hubungan_darurat2') }}" class="form-control">
                                <label class="form-label">Hubungan Kekerabatan</label>
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