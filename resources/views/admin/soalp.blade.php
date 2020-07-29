@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Form Pemetaan
                        <button type="button" class="btn btn-danger btn-lg waves-effect m-r-20 m-l-20" data-toggle="modal" data-target="#soalModal">+ Tambah Pertanyaan</button>
                        <button type="button" class="btn btn-danger btn-lg waves-effect" data-toggle="modal" data-target="#pemetaanModal">Detail Pemetaan</button>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Soal</th>
                                    <th>Pilihan</th>
                                    <th>Tipe Soal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($soal as $s)
                                <tr>
                                    <td>{{$s->soal}}</td>
                                    <td>{{$s->pilihan}}</td>
                                    <td>{{$s->tipe_soal}}</td>
                                    <td>
                                        <a href="../../soalp/hapus/{{$s->id}}" type="button" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Soal Modal -->
    <div class="modal fade" id="soalModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/admin/soalp/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Tambah Pertanyaan Baru</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pemetaan_id" class="form-control" value="{{$id}}" readonly>
                                <label class="form-label">Pemetaan id</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="soal" class="form-control" value="{{ old('soal') }}" required>
                                <label class="form-label">Soal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipe_soal">Tipe Soal</label>
                            <select id="tipe_soal" name="tipe_soal">
                                <option value="pilihan ganda">Pilihan Ganda</option>
                                <option value="essai">Essai</option>
                                <option value="bergambar">Bergambar</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pilihan" value="{{ old('pilihan') }}" class="form-control">
                                <label class="form-label">Pilihan (jika pg) pisahkan dengan koma</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Tambah</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Pemetaan Modal -->
    <div class="modal fade" id="pemetaanModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/admin/pemetaan/update/{{$pemetaan->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Edit Pemetaan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="judul" class="form-control" value="{{ $pemetaan->judul }}" required>
                                <label class="form-label">Judul</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="deskripsi" value="{{ $pemetaan->deskripsi }}" class="form-control">
                                <label class="form-label">Deskripsi</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Update</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection