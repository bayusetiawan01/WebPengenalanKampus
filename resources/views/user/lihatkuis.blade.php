@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h3>{{$kuis->judul}}</h3>
                    <h2>
                        {{$kuis->deskripsi}}
                    </h2>
                </div>
                <div class="body">
                    <form action="/user/kuis/store/{{$id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <?php $i = 0; ?>
                        <?php foreach ($soal as $s) :
                            $i = $i + 1; ?>
                            <?php if ($s->tipe_soal == 'pilihan ganda') : ?>
                                <p>{{$i}}. {{$s->soal}}</p>
                                <?php $pilihan = explode(',', $s->pilihan) ?>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <?php foreach ($pilihan as $p) : ?>
                                            <input type="radio" id="{{$p}}" name="{{$s->id}}" value="{{$p}}" @if(old($s->id)==$p ) checked @endif>
                                            <label for="{{$p}}" style="padding-left: 0px; min-width: 100px;">{{$p}}</label><br>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            <?php elseif ($s->tipe_soal == 'essai') : ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="{{$s->id}}" class="form-control" value="{{ old($s->id) }}" required>
                                        <label class="form-label">{{$i}}. {{$s->soal}}</label>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection