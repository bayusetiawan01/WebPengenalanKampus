@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Hasil Formulir Jurusan {{$jur}}
                        @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>Pilihan 1</th>
                                    <th>Pilihan 1.1</th>
                                    <th>Pilihan 1.2</th>
                                    <th>Pilihan 2</th>
                                    <th>Pilihan 2.1</th>
                                    <th>Pilihan 2.2</th>
                                    <th>Nomor HP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach($tabel as $l)
                                <tr>
                                    <?php $i = $i + 1; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{$l->nama}}</td>
                                    <td>{{$l->npm}}</td>
                                    <td>{{$l->pilihan1}}</td>
                                    <td>{{$l->pilihan11}}</td>
                                    <td>{{$l->pilihan12}}</td>
                                    <td>{{$l->pilihan2}}</td>
                                    <td>{{$l->pilihan21}}</td>
                                    <td>{{$l->pilihan22}}</td>
                                    <td>{{$l->nohp}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</section>
@endsection