@extends('admin\master')
@section('isi')
<section class="content">
    <div class="container-fluid">
        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Materi
                        </h2>
                    </div>
                    <div class="body">
                        <form action="/admin/materi/update/{{$materi->id}}" method="post">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="form-line">
                                            <input type="text" name="judul" class="form-control" placeholder="Judul Materi" value="{{$materi->judul}}" />
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
                                            <textarea name="deskripsi" rows="4" class="form-control no-resize" placeholder="Please type what you want...">{{$materi->deskripsi}}</textarea>
                                        </div>
                                        @if($errors->has('deskripsi'))
                                        <div class=" text-danger">
                                            {{ $errors->first('deskripsi')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Upload dari Youtube</h2>
                                        <div class="form-line">
                                            <input type="text" name="youtube" class="form-control" placeholder="Ex:youtube.com/embed/tgbNymZ7vqY Tulis tgbNymZ7vqY" value="{{$materi->youtube}}" />
                                        </div>
                                        @if($errors->has('youtube'))
                                        <div class="text-danger">
                                            {{ $errors->first('youtube')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class=" form-group form-group-lg">
                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect ml-5 btn-lg" value="Save">
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