@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Pengumuman -->
    <div class="card">
        <div class="header">
            <h2>Pengumuman</h2>
        </div>
        <div class="body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('/images/desain/gambar1.jpg') }}" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/desain/gambar1.jpg') }}" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/desain/gambar1.jpg') }}" />
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
            <h2>Form Data Diri</h2>
        </div>
        <div class="body">
            <div class="row clearfix">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/500x300">
                        <div class="caption">
                            <p>Lengkapi Data Diri Disini</p>
                            <p>
                                @if($wawancara->isEmpty())
                                <a href="/user/wawancara" class="btn btn-primary waves-effect" role="button">Isi Form</a>
                                @else
                                <a href="/user/wawancara/edit" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/500x300">
                        <div class="caption">
                            <p>Lengkapi Informasi Diri Disini</p>
                            <p>
                                @if($wawancara2->isEmpty())
                                <a href="/user/wawancara2" class="btn btn-primary waves-effect" role="button">Isi Form</a>
                                @else
                                <a href="/user/wawancara2" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/500x300">
                        <div class="caption">
                            <p>Lengkapi Data Agama Disini</p>
                            <p>
                                @if($wawancara->isEmpty())
                                <button class="btn bg-black waves-effects" role="button">Isi Form Data Diri Terlebih Dahulu</button>
                                @else

                                @if($wawancarad->agama == 'islam')
                                <a href="/user/wawancara3/islam" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @elseif($wawancarad->agama == 'buddha')
                                <a href="/user/wawancara3/budha" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @elseif($wawancarad->agama == 'hindu')
                                <a href="/user/wawancara3/hindu" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @elseif($wawancarad->agama == 'katholik')
                                <a href="/user/wawancara3/katholik" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @elseif($wawancarad->agama == 'protestan')
                                <a href="/user/wawancara3/protestan" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @endif
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/500x300">
                        <div class="caption">
                            <p>Isi Riwayat Kesehatan Disini</p>
                            <p>
                                @if($wawancara4->isEmpty())
                                <a href="/user/wawancara4" class="btn btn-primary waves-effect" role="button">Isi Form</a>
                                @else
                                <a href="/user/wawancara4" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/500x300">
                        <div class="caption">
                            <p>Isi Pernyataan Tata Tertib Disini</p>
                            <p>
                                @if($wawancara2->isEmpty())
                                <a href="/user/wawancara2" class="btn btn-primary waves-effect" role="button">Isi Form</a>
                                @else
                                <a href="/user/wawancara2" class="btn btn-primary waves-effect" role="button">Edit Form</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/500x300">
                        <div class="caption">
                            <p>Isi Pernyataan Surat Izin Disini</p>
                            <p>
                                @if($wawancara->isEmpty())
                                <a href="/user/wawancara" class="btn btn-primary waves-effect" role="button">Isi Form</a>
                                @else
                                <a href="/user/wawancara" class="btn btn-primary waves-effect" role="button">Edit Form</a>
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