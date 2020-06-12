@extends('user\master')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <h3>Daftar Tugas</h3>
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
                        <button class="wave btn btn-success btn-block btn-lg">Tugas sudah Disubmit</button>
                    <?php } ?>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection