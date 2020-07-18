@extends('layouts.himpunan')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Dashboard</span>
    <br><br>
    <!-- Widgets -->
    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
        <div class=" row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">Tugas Terkumpul</div>
                        <div class="number count-to" data-from="0" data-to="{{$c_tugas2}}" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="content">
                        <div class="text">Banyak Tugas</div>
                        <div class="number count-to" data-from="0" data-to="{{$c_tugas}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">Materi Diupload</div>
                        <div class="number count-to" data-from="0" data-to="{{$c_materi}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">Banyak User</div>
                        <div class="number count-to" data-from="0" data-to="{{$c_user}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
    <!-- Basic Example -->
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
    <!-- #END# Basic Example -->
</section>
@endsection