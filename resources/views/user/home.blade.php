@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Pengumuman -->
    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
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
    </div>
    <!-- #END# Pengumuman -->
    <!-- Wawancara -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Form Data Diri</h2>
            </div>
            <div class="body">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300">
                    <div class="caption">
                        <p>Lengkapi Data Diri Disini</p>
                        <p>
                            <a href="/user/wawancara" class="btn btn-primary waves-effect" role="button">Form</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- #END# Wawancara -->
    <!-- Timeline -->
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="card">
            <div class="header">
                <h2>Jadwal</h2>
            </div>
            <div class="body">

            </div>
        </div>
    </div>
    <!-- #END# Timeline -->
</section>
@endsection