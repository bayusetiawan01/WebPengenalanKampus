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
    <form action="/user/wawancara3store/protestan" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Wawancara Agama Kristen Protestan
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
                                <label class="form-label" style="color: #333;">2. Percaya atau tidak kalo masuk fmipa unpad itu jalan dari Tuhan? Ceritakan!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="kesaksian_pertolongan">{{ old('kesaksian_pertolongan') }}</textarea>
                                <label class="form-label" style="color: #333;">3. Apa Kesaksian perbuatan / pertolongan yang pernah dialami oleh anda? Ceritakan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="arti_natal">{{ old('arti_natal') }}</textarea>
                                <label class="form-label" style="color: #333;">4. Apa arti Natal menurut anda?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="siapa_yesus">{{ old('siapa_yesus') }}</textarea>
                                <label class="form-label" style="color: #333;">5. Siapa Yesus menurut anda?</label>
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
                                <textarea rows="4" class="form-control no-resize" name="berminat_pmk">{{ old('berminat_pmk') }}</textarea>
                                <label class="form-label" style="color: #333;">8. Mau mengikuti bagian pelayanan di PMK (persatuan mahasiswa Kristen) UNPAD? Apa alasannya?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="ayat_disukai">{{ old('ayat_disukai') }}</textarea>
                                <label class="form-label" style="color: #333;">9. Apa ayat Alkitab yang paling kamu sukai? Mengapa menyukai ayat tersebut?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="persekutuan_fmipa">{{ old('persekutuan_fmipa') }}</textarea>
                                <label class="form-label" style="color: #333;">10. Apakah kamu mengetahui persekutuan yang ada di FMIPA?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="maukah_ikut_persekutuan_fmipa">{{ old('maukah_ikut_persekutuan_fmipa') }}</textarea>
                                <label class="form-label" style="color: #333;">11. Setelah mengetahui adanya persekutuan maukah kamu mengikutinya?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="arti_pelayanan">{{ old('arti_pelayanan') }}</textarea>
                                <label class="form-label" style="color: #333;">12. Apa arti pelayanan bagi anda?</label>
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