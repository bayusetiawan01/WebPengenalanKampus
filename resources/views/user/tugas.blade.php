@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Tugas
                    </h2>
                </div>
                <div class="body clearfix">
                    @foreach($tugas as $t)
                    <?php $count = 0;
                    foreach ($tugas_user as $tu) :
                        if ($tu->tugas_id == $t->id) {
                            $count = 1;
                        }
                    endforeach;
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{$t->judul}}
                                    <small>{{ \Illuminate\Support\Str::limit($t->deskripsi, 30, $end='...') }}</small>
                                    <small>{{ $t->deadline}}</small>
                                </h2>
                            </div>
                            <div class="body">
                                <?php if ($count == 0) { ?>
                                    <a href="../user/tugas/lihat/{{$t->id}}" class="btn btn-success">Lihat</a>
                                <?php } else { ?>
                                    <a href="../user/tugas/hapus/{{$t->id}}" class="wave btn btn-danger">Batal Submit</a>
                                <?php } ?>
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