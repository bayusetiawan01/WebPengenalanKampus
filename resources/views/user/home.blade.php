@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Pengumuman -->
    @if($message = Session::get('gagal'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if($message = Session::get('suksesupload'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="header">
            <h2>Pengumuman</h2>
        </div>
        <div class="body" style="padding-left: 0px; padding-right:0px">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="{{$p1->link}}"><img src="<?php echo asset('/images/desain/' . $p1->url) ?>" /></a>
                    </div>
                    <div class="item">
                        <a href="{{$p1->link}}"><img src="<?php echo asset('/images/desain/' . $p2->url) ?>" /></a>
                    </div>
                    <div class="item">
                        <a href="{{$p1->link}}"><img src="<?php echo asset('/images/desain/' . $p3->url) ?>" /></a>
                    </div>
                    <div class="item">
                        <a href="{{$p1->link}}"><img src="<?php echo asset('/images/desain/' . $p4->url) ?>" /></a>
                    </div>
                    <div class="item">
                        <a href="{{$p1->link}}"><img src="<?php echo asset('/images/desain/' . $p5->url) ?>" /></a>
                    </div>
                    <div class="item">
                        <a href="{{$p1->link}}"><img src="<?php echo asset('/images/desain/' . $p6->url) ?>" /></a>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- #END# Pengumuman -->
    <!-- Wawancara -->
    <div class="card">
        <div class="header">
            <h2>Formulir Wawancara</h2>
        </div>
        <div class="body">
            <div class="row clearfix">
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Formulir Data Diri</h3><br><br>
                            <p>
                                @if($wawancara->isEmpty())
                                <a href="/user/wawancara" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <a href="/user/wawancara/edit" class="btn btn-success waves-effect" role="button">Ubah Jawaban</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Formulir Informasi Diri</h3><br>
                            <p>
                                @if($wawancara2->isEmpty())
                                <a href="/user/wawancara2" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <a href="/user/wawancara2/edit" class="btn btn-success waves-effect" role="button">Ubah Jawaban</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Formulir Data Agama</h3><br><br>
                            <p>
                                @if($wawancara->isEmpty())
                                <button class="btn bg-grey waves-effects" role="button">Form Belum Dapat Diisi</button>
                                @else

                                @if($wawancarad->agama == 'islam')
                                @if($wawancara3i->isEmpty())
                                <a href="/user/wawancara3/islam" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                                @elseif($wawancarad->agama == 'buddha')
                                @if($wawancara3b->isEmpty())
                                <a href="/user/wawancara3/budha" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                                @elseif($wawancarad->agama == 'hindu')
                                @if($wawancara3h->isEmpty())
                                <a href="/user/wawancara3/hindu" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                                @elseif($wawancarad->agama == 'katholik')
                                @if($wawancara3k->isEmpty())
                                <a href="/user/wawancara3/katholik" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                                @elseif($wawancarad->agama == 'protestan')
                                @if($wawancara3p->isEmpty())
                                <a href="/user/wawancara3/protestan" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                                @endif
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Formulir Riwayat Kesehatan</h3><br>
                            <p>
                                @if($wawancara4->isEmpty())
                                <a href="/user/wawancara4" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Formulir Fasilitas Internet</h3><br>
                            <p>
                                @if($wawancara5->isEmpty())
                                <a href="/user/wawancara5" class="btn btn-danger waves-effect" role="button">Isi Formulir</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Surat Izin</h3><br><br>
                            <p>
                                @if($suratizin == NULL)
                                <a href="/user/izin" class="btn btn-danger waves-effect" role="button">Lihat</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <div class="icon" style="margin: 10px;">
                            <i class="material-icons" style="display:block; color: firebrick; font-size:130px; margin:auto; text-align:center;">description</i>
                        </div>
                        <div class="caption">
                            <h3>Surat Pernyataan</h3><br><br>
                            <p>
                                @if($suratpernyataan == NULL)
                                <a href="/user/pernyataan" class="btn btn-danger waves-effect" role="button">Lihat</a>
                                @else
                                <button class="btn bg-grey waves-effects" role="button">Form Sudah Diisi</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Wawancara -->
</section>
@endsection