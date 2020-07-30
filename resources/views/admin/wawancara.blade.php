@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Wawancara -->
    <div class="card">
        <div class="header">
            <h2>Formulir Wawancara</h2>
        </div>
        <div class="body">
            <div class="row clearfix">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_01.png') }}">
                        <div class="caption">
                            <h3 style="margin-top: 0;">Matematika</h3>
                            <p>
                                <a href="/admin/wawancara/Matematika" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_02.png') }}">
                        <div class="caption">
                            <h3>Kimia</h3>
                            <p>
                                <a href="/admin/wawancara/Kimia" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_03.png') }}">
                        <div class="caption">
                            <h3>Fisika</h3>
                            <p>
                                <a href="/admin/wawancara/Fisika" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_04.png') }}">
                        <div class="caption">
                            <h3>Biologi</h3>
                            <p>
                                <a href="/admin/wawancara/Biologi" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_06.png') }}">
                        <div class="caption">
                            <h3>Statistika</h3>
                            <p>
                                <a href="/admin/wawancara/Statistika" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_07.png') }}">
                        <div class="caption">
                            <h3>Geofisika</h3>
                            <p>
                                <a href="/admin/wawancara/Geofisika" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_08.png') }}">
                        <div class="caption">
                            <h3>Teknik Informatika</h3>
                            <p>
                                <a href="/admin/wawancara/TeknikInformatika" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_09.png') }}">
                        <div class="caption">
                            <h3>Teknik Elektro</h3>
                            <p>
                                <a href="/admin/wawancara/TeknikElektro" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img style="height: 120px !important; padding:10px" src="{{ url('/images/desain/lg_10.png') }}">
                        <div class="caption">
                            <h3>Aktuaria</h3>
                            <p>
                                <a href="/admin/wawancara/Aktuaria" class="btn btn-danger waves-effect" role="button">Lihat Hasil</a>
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