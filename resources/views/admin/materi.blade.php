@extends('admin\master')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <h3>Daftar Materi</h3>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        Tambah Materi
                    </h2>
                </div>
                <div class="body" style="margin: auto; height:162px">
                    <br><br>
                    <a href="/admin/tambahmateri" class="btn btn-danger btn-lg">+ ADD</a>
                </div>
            </div>
        </div>
        @foreach($materi as $m)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$m->judul}}
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