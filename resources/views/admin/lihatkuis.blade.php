@extends('layouts.admin')
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
                            <?php elseif ($s->tipe_soal == 'bergambar') : ?>
                                <p>{{$i}}. {{$s->soal}}</p>
                                <img width="90%" src="{{ url('/images/soal/' . $s->image) }}">
                                <div class="form-group form-group-lg">
                                    <p>Edit Gambar di atas kemudian upload</p>
                                    <div class="custom-file">
                                        <input type="file" name="file">
                                    </div>
                                    @if($errors->has('file'))
                                    <div class="text-danger">
                                        {{ $errors->first('file')}}
                                    </div>
                                    @endif
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h3>Jawaban Peserta</h3>
                </div>
                <div class="body clearfix">
                    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                        <?php foreach ($jawaban as $j) : ?>
                            <div class="panel-group" id="hasilkuis" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-danger">
                                    <div class="panel-heading" role="tab" id="{{$j->npm}}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#hasilkuis" href="#collapse{{$j->npm}}" aria-expanded="true" aria-controls="collapse{{$j->npm}}">
                                                {{$j->npm}} - {{$j->nama}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$j->npm}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="{{$j->npm}}">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Soal</th>
                                                            <th>Jawaban</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 0;
                                                        $jawab = explode(';', $j->jawaban)
                                                        ?>
                                                        <?php foreach ($soal as $so) : ?>
                                                            <?php if ($so->tipe_soal != "bergambar") : ?>
                                                                <tr>
                                                                    <td>{{$i+1}}</td>
                                                                    <td>{{$so->soal}}</td>
                                                                    <td><?php if (isset($jawab[$i])) {
                                                                            echo $jawab[$i];
                                                                        }  ?></td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php $i = $i + 1;
                                                        endforeach; ?>
                                                    </tbody>
                                                </table>
                                                <?php if ($j->image != NULL) : ?>
                                                    <img width="90%" src="{{ url('/images/soal/' . $j->image) }}">
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection