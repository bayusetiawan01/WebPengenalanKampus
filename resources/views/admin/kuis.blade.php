@extends('admin\master')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Daftar Kuis</span> <a href="/admin/kuis/tambah" class="btn btn-success btn-lg" style="margin-left: 50px;">+ Tambah Kuis</a>
    <br><br>
    <div class="row clearfix">
        @foreach($kuis as $k)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$k->judul}}
                        <small>{{ \Illuminate\Support\Str::limit($k->deskripsi, 30, $end='...') }}</small>
                    </h2>
                </div>
                <div class="body">
                    <a href="tugas/edit/{{$k->id}}" class="btn btn-primary btn-block btn-lg">Edit</a>
                    <a href="../admin/tugas/lihat/{{$k->id}}" class="btn btn-success btn-block btn-lg">Lihat</a>
                    <a href="../admin/tugas/hapus/{{$k->id}}" class="btn btn-danger btn-block btn-lg">Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection