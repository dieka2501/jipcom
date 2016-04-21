@extends('front')
@section('content')
<div class="container">
    <div class="news-list-wrap">
        <h1>Video Gallery</h1>
        <div id="event-list">
        <div class="row">
        <div id="video-gallery">
            @foreach($detail as $videos)
            <a href="{{$videos->vf_file}}" class="col-md-4" style="margin-bottom: 30px;" data-poster="<?php echo Config::get('app.url');?>assets/main/img/video.png" >
                <img src="<?php echo Config::get('app.url');?>assets/main/img/video.png" class="img-responsive" />
            </a>
            @endforeach
            <!-- <div class="col-md-4" style="margin-bottom: 30px;">
                <a class="fancybox-media" href="{{$videos->vf_file}}">

                    <img src="<?php echo Config::get('app.url');?>assets/main/img/video.png" class="img-responsive" alt="">
                </a>
                <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($videos->created_at))}}</small>
            </div> -->
        </div>
        </div>
        </div>
    </div>
</div>
@stop