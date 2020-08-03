@extends('layouts.user')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="container-fluid">
        <!-- Body Copy -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Surat Pernyataan
                        </h2>
                    </div>
                    <div class="body">
                        Download terlebih dahulu surat pernyataan kemudian upload surat izin yang sudah diisi. <br><br><br>
                        <a href="{{ asset('tugas/suratpernyataan.pdf') }}" class="btn btn-danger waves-effect" role="button">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Upload Surat Pernyataan
                        </h2>
                    </div>
                    <div class="body">
                        <form action="/user/pernyataan/store/" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="custom-file">
                                            <input type="file" name="file">
                                        </div>
                                        @if($errors->has('file'))
                                        <div class="text-danger">
                                            {{ $errors->first('file')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect ml-5" value="Upload">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>
</section>
@endsection