@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Materi
                    </h2>
                </div>
                <div class="body clearfix">
                    @foreach($materi as $m)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{$m->judul}}
                                    <small>{{ \Illuminate\Support\Str::limit($m->deskripsi, 20, $end='...') }}</small>
                                </h2>
                            </div>
                            <div class="body">
                                <a href="../user/materi/lihat/{{$m->id}}" class="btn btn-success">Lihat</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection