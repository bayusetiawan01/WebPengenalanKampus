@extends('user\master')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Daftar Materi</span><br><br>
    <div class="row clearfix">
        @foreach($materi as $m)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$m->judul}}
                        <small>{{ \Illuminate\Support\Str::limit($m->deskripsi, 30, $end='...') }}</small>
                    </h2>
                </div>
                <div class="body">
                    <a href="../user/materi/lihat/{{$m->id}}" class="btn btn-success btn-block btn-lg">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection