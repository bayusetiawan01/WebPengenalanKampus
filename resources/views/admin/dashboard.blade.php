@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Widgets -->
    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12" style="padding: 0px">
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
    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12" style="padding: 0px">
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
                            <a href="{{$p1->link}}" target="_blank"><img src="<?php echo asset('/images/desain/' . $p1->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p2->link}}" target="_blank"><img src="<?php echo asset('/images/desain/' . $p2->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p3->link}}" target="_blank"><img src="<?php echo asset('/images/desain/' . $p3->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p4->link}}" target="_blank"><img src="<?php echo asset('/images/desain/' . $p4->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p5->link}}" target="_blank"><img src="<?php echo asset('/images/desain/' . $p5->url) ?>" /></a>
                        </div>
                        <div class="item">
                            <a href="{{$p6->link}}" target="_blank"><img src="<?php echo asset('/images/desain/' . $p6->url) ?>" /></a>
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
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header" style="background: firebrick;">
                <h2 style="color: #fff">Fitur Pemetaan</h2>
            </div>
            <div class="body" style="background: firebrick;">
                @if($fitur->is_active == 0)
                <a href="admin\pemetaans\aktif" class="btn btn-default btn-block">Aktifkan</a>
                @else
                <a href="admin\pemetaans\nonaktif" class="btn btn-default btn-block">Nonaktifkan</a>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header" style="background: firebrick;">
                <h2 style="color: #fff">Fitur Ganti NPM</h2>
            </div>
            <div class="body" style="background: firebrick;">
                @if($fitur2->is_active == 0)
                <a href="admin\ganti_npm\aktif" class="btn btn-default btn-block">Aktifkan</a>
                @else
                <a href="admin\ganti_npm\nonaktif" class="btn btn-default btn-block">Nonaktifkan</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Pengumuman Modal -->
    <div class="modal fade" id="pengumumanModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="/admin/pengumuman/update" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Ubah Slide</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Slide 1</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" name="foto1" class="form-control" value="{{ old('foto1') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link1" class="form-control" value="{{$p1->link}}">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Slide 2</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" name="foto2" class="form-control" value="{{ old('foto2') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link2" class="form-control" value="{{$p2->link}}">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Slide 3</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" name="foto3" class="form-control" value="{{ old('foto3') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link3" class="form-control" value="{{$p3->link}}">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Slide 4</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" name="foto4" class="form-control" value="{{ old('foto4') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link4" class="form-control" value="{{$p4->link}}">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Slide 5</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" name="foto5" class="form-control" value="{{ old('foto5') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link5" class="form-control" value="{{$p5->link}}">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Slide 6</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" name="foto6" class="form-control" value="{{ old('foto6') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link6" class="form-control" value="{{$p6->link}}">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Simpan</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection