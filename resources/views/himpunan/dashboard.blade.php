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
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a data-toggle="modal" data-target="#pengumumanModal">Edit Gambar</a></li>
                        </ul>
                    </li>
                </ul>
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
                            <a href="{{$p2->link}}"><img src="<?php echo asset('/images/desain/' . $p2->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p3->link}}"><img src="<?php echo asset('/images/desain/' . $p3->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p4->link}}"><img src="<?php echo asset('/images/desain/' . $p4->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p5->link}}"><img src="<?php echo asset('/images/desain/' . $p5->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p6->link}}"><img src="<?php echo asset('/images/desain/' . $p6->url) ?>" /></a>
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