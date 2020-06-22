@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Daftar Materi</span> <a href="/admin/materi/tambah" class="btn btn-success btn-lg" style="margin-left: 50px;">+ Tambah Materi</a>
    <br><br>
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
                    <a href="materi/edit/{{$m->id}}" class="btn btn-primary btn-block btn-lg">Edit</a>
                    <a href="../admin/materi/lihat/{{$m->id}}" class="btn btn-success btn-block btn-lg">Lihat</a>
                    <a href="../admin/materi/hapus/{{$m->id}}" class="btn btn-danger btn-block btn-lg">Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection