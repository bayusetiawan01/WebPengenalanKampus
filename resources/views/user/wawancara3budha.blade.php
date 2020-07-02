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
    <form action="/user/wawancara3store/buddha" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Form Wawancara Agama Buddha
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
                                <textarea rows="4" class="form-control no-resize" name="tentang_agama_budha">{{ old('tentang_agama_budha') }}</textarea>
                                <label class="form-label" style="color: #333;">1. Apa yang anda ketahui tentang Agama Buddha?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="memilih_agama_budha">{{ old('memilih_agama_budha') }}</textarea>
                                <label class="form-label" style="color: #333;">2. Mengapa anda memilih Agama Buddha?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="kelas_agama_budha">{{ old('kelas_agama_budha') }}</textarea>
                                <label class="form-label" style="color: #333;">3. Apakah anda pernah mengikuti kelas Agama Buddha sebelumnya?</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="hari_besar_budha">{{ old('hari_besar_budha') }}</textarea>
                                <label class="form-label" style="color: #333;">4. Apa yang anda ketahui tentang 4 hari besar Agama Buddha? Jelaskan!</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="pancasila_buddhist">{{ old('pancasila_buddhist') }}</textarea>
                                <label class="form-label" style="color: #333;">5. Sebutkan dan jelaskan mengenai pancasila Buddhist!</label>
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