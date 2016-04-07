@extends('article_detail')
@section('content')
<!-- CONTENT -->
<div class="container">
    <div class="news-list-wrap">
        <h1>{{$ne->ne_title}}</h1>
        <div class="news-content">
            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1020px;height: 456px; background: #191919; overflow: hidden;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1020px; height: 356px; overflow: hidden;">
                @foreach($nef as $nefs)
                    <div>
                        <img u="image" src="<?php echo Config::get('app.url');?>/assets/upload/{{$nefs->nef_file}}" />
                        <img u="thumb" src="<?php echo Config::get('app.url');?>/assets/upload/{{$nefs->nef_file}}" />
                    </div>
                @endforeach
                    <!-- <div>
                        <img u="image" src="assets/main/img/alila/02.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-02.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/03.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-03.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/04.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-04.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/05.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-05.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/06.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-06.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/07.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-07.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/08.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-08.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/09.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-09.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/10.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-10.jpg" />
                    </div>
                    
                    <div>
                        <img u="image" src="assets/main/img/alila/11.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-11.jpg" />
                    </div>
                    <div>
                        <img u="image" src="assets/main/img/alila/12.jpg" />
                        <img u="thumb" src="assets/main/img/alila/thumb-12.jpg" />
                    </div> -->
                </div>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
                </span>
                <!--#endregion Arrow Navigator Skin End -->
        
                <!-- thumbnail navigator container -->
                <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <div u="slides" style="cursor: default;">
                        <div u="prototype" class="p">
                            <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                            <div class=c></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
            </div>
            <div class="clearfix"></div>
            <br /><br />
            {{$ne->ne_content}}
        </div>
    </div>
    <div class="commentator-wrap">
        <h1>Related Events</h1>
        <div class="row">
            <div id="event-list" class="col-md-4">
                <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                <h3><a href="#">Events Title Here</a></h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div id="event-list" class="col-md-4">
                <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                <h3><a href="#">Events Title Here</a></h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div id="event-list" class="col-md-4">
                <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                <h3><a href="#">Events Title Here</a></h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop