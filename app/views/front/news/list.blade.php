@extends('front')
@section('content')
<div class="container">
    <div class="news-list-wrap news-content">
        <h1>News Update</h1>
        <div id="news-list">
        <div class="row">
                    <div class="clearfix"></div>
                    @foreach($list as $lists)
                    <div class="col-md-4 news-item">
                        <img src="<?php echo Config::get('app.url');?>/assets/upload/{{$lists->ne_image}}" class="img-responsive" alt="">
                        <h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$lists->id_ne}}">{{$lists->ne_title}}</a></h3>
                        <p><?php str_limit(strip_tags($lists->ne_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$lists->id_ne.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?></p>
                        <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($lists->created_at))}}</small>
                    </div>
                    @endforeach
                    {{$list->links()}}
                    <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop