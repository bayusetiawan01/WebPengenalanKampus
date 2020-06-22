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
                            {{$materi->judul}}
                        </h2>
                    </div>
                    @if($materi->video)
                    <video width="100%" height="auto" controls>
                        <source src="{{ url('/video/' . $materi->video) }}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                    @endif
                    <div class="body">
                        {{$materi->deskripsi}}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>
</section>
@endsection