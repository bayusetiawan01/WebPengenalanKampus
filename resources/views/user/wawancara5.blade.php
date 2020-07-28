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
    <form action="/user/wawancara5/store" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Fasilitas Internet
                        </h2>
                    </div>
                    <div class="body">
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">1. Apakah akses internet utama yang anda gunakan?</h4>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <div class="demo-radio-button">
                                <input type="radio" id="wifi" name="akses_internet" value="wifi" @if(old('akses_internet')=='wifi' ) checked @endif>
                                <label for="wifi" style="padding-left: 0px; min-width: 100px;">Wi-Fi</label><br>
                                <input type="radio" id="mobile_data" name="akses_internet" value="mobile_data" @if(old('akses_internet')=='mobile_data' ) checked @endif>
                                <label for="mobile_data" style="padding-left: 0px; min-width: 100px;">Mobile Data</label><br>
                                <input type="radio" id="lain" name="akses_internet" value="lain" @if(old('akses_internet')=='lain' ) checked @endif>
                                <label for="lain" style="padding-left: 0px; min-width: 100px;">Yang lain</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="lainnya" class="form-control" value="{{ old('lainnya') }}">
                                <label class="form-label">Lainnya</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">2. Apakah akses tersebut unlimited?</h4>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <div class="demo-radio-button">
                                <input type="radio" id="ya" name="unlimited" value="ya" @if(old('unlimited')=='ya' ) checked @endif>
                                <label for="ya" style="padding-left: 0px; min-width: 100px;">Ya</label><br>
                                <input type="radio" id="tidak" name="unlimited" value="tidak" @if(old('unlimited')=='tidak' ) checked @endif>
                                <label for="tidak" style="padding-left: 0px; min-width: 100px;">Tidak</label><br>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="sebulan" class="form-control" value="{{ old('sebulan') }}">
                                <label class="form-label" style="color: #333;">3. Jika tidak, berapa pemakaian anda internet Anda dalam sebulan?</label>
                            </div>
                        </div>
                        <div class=" form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="kendala">{{ old('kendala') }}</textarea>
                                <label class="form-label" style="color: #333;">4. Kendala apa saja yang sering dialami selama anda menggunakan akses internet tersebut?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">5. Apakah akses internet tersebut lancar untuk video call dan streaming?</h4>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <div class="demo-radio-button">
                                <input type="radio" id="ya" name="streaming" value="ya" @if(old('streaming')=='ya' ) checked @endif>
                                <label for="ya" style="padding-left: 0px; min-width: 100px;">Ya</label><br>
                                <input type="radio" id="tidak" name="streaming" value="tidak" @if(old('streaming')=='tidak' ) checked @endif>
                                <label for="tidak" style="padding-left: 0px; min-width: 100px;">Tidak</label><br>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">6. Device pendukung keadaan kegiatan online yang dimiliki:</h4>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <input type="checkbox" class="filled-in chk-col-red" name="pc" />
                            <label for="md_checkbox_21">Pc</label><br>
                            <input type="checkbox" class="filled-in chk-col-red" name="laptop" />
                            <label for="md_checkbox_21">Laptop</label><br>
                            <input type="checkbox" class="filled-in chk-col-red" name="smartphone" />
                            <label for="md_checkbox_21">Smartphone</label><br>
                            <input type="checkbox" class="filled-in chk-col-red" name="tablet" />
                            <label for="md_checkbox_21">Tablet</label><br>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="lainnya2" class="form-control" value="{{ old('lainnya2') }}">
                                <label class="form-label">Lainnya</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">7. Apakah device tersebut memiliki kamera dan bisa digunakan untuk video call?</h4>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="ya" name="kamera" value="ya" @if(old('kamera')=='ya' ) checked @endif>
                                <label for="ya" style="padding-left: 0px; min-width: 100px;">Ya</label><br>
                                <input type="radio" id="tidak" name="kamera" value="tidak" @if(old('kamera')=='tidak' ) checked @endif>
                                <label for="tidak" style="padding-left: 0px; min-width: 100px;">Tidak</label><br>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">8. Platform apa yang pernah kalian gunakan:</h4>
                        <div class="form-group">
                            <input type="checkbox" class="filled-in chk-col-red" name="discord" />
                            <label for="md_checkbox_21">Discord</label><br>
                            <input type="checkbox" class="filled-in chk-col-red" name="meet" />
                            <label for="md_checkbox_21">Google Meet</label><br>
                            <input type="checkbox" class="filled-in chk-col-red" name="zoom" />
                            <label for="md_checkbox_21">Zoom</label><br>
                            <input type="checkbox" class="filled-in chk-col-red" name="tidak_satupun" />
                            <label for="md_checkbox_21">Tidak Satupun</label><br>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="kendala_penggunaan">{{ old('kendala_penggunaan') }}</textarea>
                                <label class="form-label" style="color: #333;">9. Dari platform tersebut apakah ada kendala saat penggunaan?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">10. Zona waktu Indonesia bagian manakah kalian tinggal?</h4>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input type="radio" id="wib" name="waktu" value="wib" @if(old('waktu')=='wib' ) checked @endif>
                                <label for="wib" style="padding-left: 0px; min-width: 100px;">WIB</label><br>
                                <input type="radio" id="wita" name="waktu" value="wita" @if(old('waktu')=='wita' ) checked @endif>
                                <label for="wita" style="padding-left: 0px; min-width: 100px;">WITA</label><br>
                                <input type="radio" id="wit" name="waktu" value="wit" @if(old('waktu')=='wit' ) checked @endif>
                                <label for="wit" style="padding-left: 0px; min-width: 100px;">WIT</label><br>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="kegiatan">{{ old('kegiatan') }}</textarea>
                                <label class="form-label" style="color: #333;">11. Kegiatan rutin di rumah apa yang dapat mempengaruhi forum online yang diadakan?</label>
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