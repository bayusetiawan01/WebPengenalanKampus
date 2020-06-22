@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <br>
    <span class="h3">Dashboard</span>
    <br><br>
    <!-- Widgets -->
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
    <!-- #END# Widgets -->
</section>
@endsection