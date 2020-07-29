@extends('layouts.admin')
@section('isi')
<section class="content">
    <div class="container-fluid">
        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Buat Tugas
                        </h2>
                    </div>
                    <div class="body">
                        <form action="/admin/tugas/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="form-line">
                                            <input type="text" name="judul" class="form-control" placeholder="Judul Tugas" />
                                        </div>
                                        @if($errors->has('judul'))
                                        <div class="text-danger">
                                            {{ $errors->first('judul')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Deadline</h2>
                                        <div class="form-line">
                                            <input type="date" name="deadline" class="form-control" />
                                        </div>
                                        @if($errors->has('judul'))
                                        <div class="text-danger">
                                            {{ $errors->first('judul')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Isi Materi</h2>
                                        <div class="form-line">
                                            <textarea name="deskripsi" rows="4" class="form-control no-resize" placeholder="Deskripsi..."></textarea>
                                        </div>
                                        @if($errors->has('deskripsi'))
                                        <div class="text-danger">
                                            {{ $errors->first('deskripsi')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Upload Petunjuk (Opsional)</h2>
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
                                <div class="form-group form-group-lg">
                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect ml-5 btn-lg" value="Post">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# CKEditor -->
    </div>
</section>
@endsection