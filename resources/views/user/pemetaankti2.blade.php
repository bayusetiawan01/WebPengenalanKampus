@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        FORMULIR PEMETAAN ASPEK PEMBINAAN DAN PELATIHAN ANGGOTA KEMA FMIPA UNPAD 2020
                    </h2>
                </div>
                <div class="body clearfix" style="padding: 50px; padding-top:10px">
                    <div class="progress">
                        <div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div><br>
                    Terimakasih kamu telah memilih kegiatan pemetaan Pengenalan Karya Tulis Ilmiah sebagai pilihan kedua.<br><br>

                    Setiap orang memiliki ketertarikan pada suatu bidang permasalahan. Pada kegiatan ini kamu akan dikelompokan bersama kawan kawan Pramuda FMIPA 2020 yang memiliki ketertarikan tema pengkajian yang sama yaitu Peran Mahasiswa dalam Optimalisasi Sains dan Teknologi pada masa pandemi covid-19 yang dituangkan dalam bentuk Karya Tulis Ilmiah<br><br>

                    <br><br>

                    <form id="form" action="/user/pemetaan/store/4" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="pilihan21" value="-" />
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="pilihan22" value="--" />
                        </div>
                        <a href="{{url('/user/pemetaan/3')}}" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection