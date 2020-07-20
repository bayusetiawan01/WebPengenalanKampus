@extends('layouts.admin')
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
                    @if($materi->youtube)
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$materi->youtube}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                    @endif
                    <div class="body">
                        <?php echo nl2br(htmlspecialchars($materi->deskripsi)); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>
</section>
@endsection