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
    <form action="/user/wawancara3store/katholik" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Wawancara Agama Kristen Katholik
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
                                <input type="text" name="asal_gereja" class="form-control" value="{{ old('asal_gereja') }}">
                                <label class="form-label" style="color: #333;">1. Sebutkan asal gereja anda!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="masuk_fmipa">{{ old('masuk_fmipa') }}</textarea>
                                <label class="form-label" style="color: #333;">2. Masuk FMIPA apakah jalan dari Tuhan atau kemampuan anda sendiri?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="jelaskan_trinitas">{{ old('jelaskan_trinitas') }}</textarea>
                                <label class="form-label" style="color: #333;">3. Jelaskan mengenai trinitas?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="siapa_yesus">{{ old('siapa_yesus') }}</textarea>
                                <label class="form-label" style="color: #333;">4. Siapa Yesus menurut anda?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="seperti_apa_natal">{{ old('seperti_apa_natal') }}</textarea>
                                <label class="form-label" style="color: #333;">5. Menurut anda Natal itu seperti apa?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="pelayanan_gereja">{{ old('pelayanan_gereja') }}</textarea>
                                <label class="form-label" style="color: #333;">6. Pernahkah anda melakukan pelayanan gereja?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">7. Seberapa sering anda membaca alkitab</h4>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="rutin" name="membaca_alkitab" value="rutin" value="{{ old('membaca_alkitab') }}">
                                <label for="rutin" style="padding-left: 0px; min-width: 100px;">Rutin</label>
                                <input type="radio" id="tidakrutin" name="membaca_alkitab" value="tidak rutin" style="margin-right: -10">
                                <label for="tidakrutin" style="padding-left: 0px; min-width: 100px;">Tidak Rutin</label><br>
                                <input type="radio" id="sesekali" name="membaca_alkitab" value="sesekali" style="margin-right: -10">
                                <label for="sesekali" style="padding-left: 0px; min-width: 100px;">Sesekali</label>
                                <input type="radio" id="tidakpernah" name="membaca_alkitab" value="tidak pernah" style="margin-right: -10">
                                <label for="tidakpernah" style="padding-left: 0px; min-width: 100px;">Tidak Pernah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="berminat_kmk">{{ old('berminat_kmk') }}</textarea>
                                <label class="form-label" style="color: #333;">8. Maukah anda bergabung dalam KMK (keluarga Mahasiswa Katholik) Unpad? Apa alasannya? Maukah anda bergabung dalam pelayanan gereja di Jatinangor ?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="ayat_pegangan">{{ old('ayat_pegangan') }}</textarea>
                                <label class="form-label" style="color: #333;">9. Adakah ayat pegangan ? Apa alasan berpegang pada ayat tersebut ?</label>
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