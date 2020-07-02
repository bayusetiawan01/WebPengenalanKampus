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
    <form action="/user/wawancara3store/hindu" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Wawancara Agama Hindu
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
                                <textarea rows="4" class="form-control no-resize" name="pemahaman_agama_hindu">{{ old('pemahaman_agama_hindu') }}</textarea>
                                <label class="form-label" style="color: #333;">1. Menurut pemahaman anda, apa hal yg paling esensi dari agama Hindu? Jelaskan!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="dasar_agama_hindu">{{ old('dasar_agama_hindu') }}</textarea>
                                <label class="form-label" style="color: #333;">2. Apa dasar agama Hindu yg anda ketahui? Jelaskan!</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">3. Yadnya</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="tujuan_yadnya">{{ old('tujuan_yadnya') }}</textarea>
                                <label class="form-label" style="color: #333;">a. Apa tujuan anda melakukan Yadnya selama ini?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="pernahkah_mengeluh">{{ old('pernahkah_mengeluh') }}</textarea>
                                <label class="form-label" style="color: #333;">b. Pernahkah ada perasaan mengeluh dengan hal itu?</label>
                            </div>
                        </div>
                        <h4 class="card-inside-title" style="color: #333; font-weight:normal;">4. Keluarga Mahasiswa Hindu</h4>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="berminat_kmh">{{ old('berminat_kmh') }}</textarea>
                                <label class="form-label" style="color: #333;">a. Apakah anda berminat bergabung dengan KMH (Keluarga Mahasiswa Hindu)?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="saran_program">{{ old('saran_program') }}</textarea>
                                <label class="form-label" style="color: #333;">b. Menurut anda apa program yg bagus untuk organisasi Hindu kedepannya?</label>
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