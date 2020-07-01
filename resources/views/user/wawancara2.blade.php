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
    <form action="/user/wawancara2/store" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Informasi Diri
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
                                <textarea rows="4" class="form-control no-resize" name="kekurangan_kelebihan">{{ old('kekurangan_kelebihan') }}</textarea>
                                <label class="form-label" style="color: #333;">1. Sebutkan kekurangan dan kelebihan anda!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="perbedaan_mahasiswa">{{ old('perbedaan_mahasiswa') }}</textarea>
                                <label class="form-label" style="color: #333;">2. Apa yang kamu ketahui tentang perbedaan siswa dan mahasiswa?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="bem_hima">{{ old('bem_hima') }}</textarea>
                                <label class="form-label" style="color: #333;">3. Apa yang kamu ketahui tentang BEM? Apa yang kamu ketahui tentang Himpunan Mahasiswa?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="fungsi_angkatan">{{ old('fungsi_angkatan') }}</textarea>
                                <label class="form-label" style="color: #333;">4. Menurut kamu, apa peran dan fungsi angkatan FMIPA Unpad?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">5. Tuliskan apa yang kamu pahami dari pola pikir mahasiswa berikut:</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="2" class="form-control no-resize" name="kritis">{{ old('kritis') }}</textarea>
                                <label class="form-label" style="color: #333;">- Kritis</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="2" class="form-control no-resize" name="solusional">{{ old('solusional') }}</textarea>
                                <label class="form-label" style="color: #333;">- Solusional</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="2" class="form-control no-resize" name="sistematis">{{ old('sistematis') }}</textarea>
                                <label class="form-label" style="color: #333;">- Sistematis</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="2" class="form-control no-resize" name="logis">{{ old('logis') }}</textarea>
                                <label class="form-label" style="color: #333;">- Logis</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="2" class="form-control no-resize" name="berlandasan">{{ old('berlandasan') }}</textarea>
                                <label class="form-label" style="color: #333;">- Berlandasan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="arti_pemimpin">{{ old('arti_pemimpin') }}</textarea>
                                <label class="form-label" style="color: #333;">6. Apa arti pemimpin menurutmu? Siapa pemimpin idolamu (selain Rasulullah)?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="koordinator">{{ old('koordinator') }}</textarea>
                                <label class="form-label" style="color: #333;">7. Apa yang kamu ketahui tentang koordinator angkatan? Siapkah menjadi koordinator angkatan?</label>
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