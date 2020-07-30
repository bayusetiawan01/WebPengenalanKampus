@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Kuis
                        @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                    </h2>
                </div>
                <div class="body clearfix">
                    @foreach($kuis as $k)
                    <?php $count = 0;
                    foreach ($jawaban as $j) :
                        if ($j->kuis_id == $k->id) {
                            $count = 1;
                        }
                    endforeach;
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{$k->judul}}
                                    <small>{{ \Illuminate\Support\Str::limit($k->deskripsi, 20, $end='...') }}</small>
                                </h2>
                            </div>
                            <div class="body">
                                <a href="../user/kuis/lihat/{{$k->id}}" class="btn btn-success">Lihat</a>
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