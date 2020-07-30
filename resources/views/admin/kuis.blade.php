@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Kuis
                        <button type="button" class="btn btn-danger btn-lg waves-effect m-r-20 m-l-20" data-toggle="modal" data-target="#kuisModal">+ Tambah Kuis</button>
                    </h2>
                </div>
                <div class="body clearfix">
                    @foreach($kuis as $k)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{$k->judul}}
                                    <small>{{ \Illuminate\Support\Str::limit($k->deskripsi, 20, $end='...') }}</small>
                                </h2>
                            </div>
                            <div class="body" style="padding: 10px;">
                                <br>
                                <a href="kuis/edit/{{$k->id}}" class="btn btn-default">Edit</a>
                                <a href="kuis/lihat/{{$k->id}}" class="btn btn-default">Lihat</a>
                                <a href="kuis/hapus/{{$k->id}}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Kuis Modal -->
    <div class="modal fade" id="kuisModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/admin/kuis/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Tambah Kuis Baru</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
                                <label class="form-label">Judul</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="deskripsi" value="{{ old('deskripsi') }}" class="form-control">
                                <label class="form-label">Deskripsi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="deadline" value="{{ old('deadline') }}" class="form-control">
                                <label class="form-label">Waktu Pengerjaan(menit)</label>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <p>Upload Petunjuk (Opsional)</p>
                            <div class="custom-file">
                                <input type="file" name="file">
                            </div>
                            @if($errors->has('file'))
                            <div class="text-danger">
                                {{ $errors->first('file')}}
                            </div>
                            @endif
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
</section>
@endsection