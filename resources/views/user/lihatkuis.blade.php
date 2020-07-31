@extends('layouts.user')
@section('isi')
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h3>{{$kuis->judul}}</h3>
                    <h2>
                        {{$kuis->deskripsi}}
                        <?php if ($kuis->petunjuk != NULL) : ?>
                            <a href="<?php echo asset('tugas/' . $tugas->petunjuk) ?>" class="btn btn-danger waves-effect" role="button">Download Petunjuk</a>
                        <?php endif ?>
                    </h2>
                </div>
                <div class="body">
                    <form id="form" action="/user/kuis/store/{{$id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <?php $i = 0; ?>
                        <?php foreach ($soal as $s) :
                            $i = $i + 1; ?>
                            <?php if ($s->tipe_soal == 'pilihan ganda') : ?>
                                <?php if ($s->image != NULL) : ?>
                                    <img width="90%" src="{{ url('/images/soal/' . $s->image) }}">
                                <?php endif ?>
                                <p>{{$i}}. {{$s->soal}}</p>
                                <?php $pilihan = explode(',', $s->pilihan) ?>
                                <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input type="hidden" name="{{$s->id}}" value="-" />
                                        <?php foreach ($pilihan as $p) : ?>
                                            <input type="radio" id="{{$p}}" name="{{$s->id}}" value="{{$p}}" @if(old($s->id)==$p ) checked @endif>
                                            <label for="{{$p}}" style="padding-left: 0px; min-width: 100px;">{{$p}}</label><br>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            <?php elseif ($s->tipe_soal == 'essai') : ?>
                                <?php if ($s->image != NULL) : ?>
                                    <img width="90%" src="{{ url('/images/soal/' . $s->image) }}">
                                <?php endif ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="{{$s->id}}" class="form-control" value="{{ old($s->id) }}">
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
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect submit-btn">Submit</button>
                        <br><br><br><br><br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12" style="position: fixed; bottom:0; right:0">
            <div class="card">
                <div class="header">
                    Sisa Waktu<h3 id="time"></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function() {
        setInterval(time, 1000);
    });

    function time() {
        $.ajax({
            url: '<?= url('user/time/' . $jawaban->timer) ?>',
            success: function(data) {
                $('#time').html(data);
                if (data == "00:00:00") {
                    window.btn_clicked = true;
                    document.getElementById("form").submit();
                }
            },
        });
    }

    document.querySelector('.submit-btn').addEventListener("click", function() {
        window.btn_clicked = true;
    });

    window.onbeforeunload = function() {
        if (!window.btn_clicked) {
            return 'Jawaban Tidak tersimpan jika meninggalkan halaman';
        }
    };
</script>
@endsection