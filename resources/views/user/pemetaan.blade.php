@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Pemetaan
                    </h2>
                </div>
                <div class="body clearfix">
                    @foreach($pemetaan as $p)
                    <?php $count = 0;
                    foreach ($jawaban as $j) :
                        if ($j->pemetaan_id == $p->id) {
                            $count = 1;
                        }
                    endforeach;
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{$p->judul}}
                                    <small>{{ \Illuminate\Support\Str::limit($p->deskripsi, 20, $end='...') }}</small>
                                </h2>
                            </div>
                            <div class="body">
                                <?php if ($count == 0) { ?>
                                    <a href="../user/pemetaan/lihat/{{$p->id}}" class="btn btn-success">Lihat</a>
                                <?php } else { ?>
                                    <button class="wave btn btn-grey">Sudah Dikerjakan</button>
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