@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Daftar Tugas</span> <a href="/admin/tugas/tambah" class="btn btn-danger btn-lg" style="margin-left: 50px;">+ Tambah Tugas</a>
    <br><br>
    <div class="row clearfix">
        @foreach($tugas as $t)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$t->judul}}
                        <small>{{ \Illuminate\Support\Str::limit($t->deskripsi, 30, $end='...') }}</small>
                    </h2>
                </div>
                <div class="body">
                    <a href="tugas/edit/{{$t->id}}" class="btn btn-default">Edit</a>
                    <a href="../admin/tugas/lihat/{{$t->id}}" class="btn btn-default">Lihat</a>
                    <a href="../admin/tugas/hapus/{{$t->id}}" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection