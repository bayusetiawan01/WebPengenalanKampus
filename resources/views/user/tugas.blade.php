@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Daftar Tugas</span><br><br>
    <div class="row clearfix">
        @foreach($tugas as $t)
        <?php $count = 0;
        foreach ($tugas_user as $tu) :
            if ($tu->tugas_id == $t->id) {
                $count = 1;
            }
        endforeach;
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$t->judul}}
                        <small>{{ \Illuminate\Support\Str::limit($t->deskripsi, 30, $end='...') }}</small>
                        <small>{{ $t->deadline . $t->id}}</small>
                    </h2>
                </div>
                <div class="body">
                    <?php if ($count == 0) { ?>
                        <a href="../user/tugas/lihat/{{$t->id}}" class="btn btn-success btn-block btn-lg">Lihat</a>
                    <?php } else { ?>
                        <a href="../user/tugas/hapus/{{$t->id}}" class="wave btn btn-danger btn-block btn-lg">Batal Submit</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection