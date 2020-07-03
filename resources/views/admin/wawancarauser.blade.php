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
                                    <th>Action</th>
                                </tr>
                                <?php $i = 0; ?>
                                @foreach($list as $l)
                                <tr>
                                    <?php $i = $i + 1; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{$l->nama}}</td>
                                    <td>{{$l->npm}}</td>
                                    <td>
                                        <a href="../admin/wawancarau/{{$l->npm}}" type="button" class="btn btn-danger btn-sm">Lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</section>
@endsection