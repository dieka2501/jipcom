@extends('front')
@section('content')
<!-- CONTENT -->
<div class="container">
    <div class="social-media-counter">
        <div class="row">
            <div class="col-md-4">
                <div class="fb bar-socmed">29,163,276</div>
                <div class="text-center">
                    <p>Penggemar JSI di Facebook</p>
                    <div class="fb-like" data-href="https://deasnet.com" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="twitter bar-socmed">29,163,276</div>
                <div class="text-center">
                    <p>Penggemar JSI di Twitter</p>
                    <a href="https://twitter.com/JeepStationIndonesia" class="twitter-follow-button" data-show-count="false">Follow @JeepStationIndonesia</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>            
            </div>
            <div class="col-md-4">
                <a href="{{Config::get('app.url')}}public/register" class="btn-jsi-register"></a>
                <div class="text-center">
                    <p>Jadilah member JSI untuk<br />mengetahui informasi terbaru.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="commentator-wrap">
        <div class="row">
            <div id="news-list" class="col-md-12">
                <h1>News & Event Update</h1>
                <div class="row">
                    @foreach($newsevent as $newsevents)
                    <div class="col-md-4">
                        <img src="<?php echo Config::get('app.url');?>/assets/upload/{{$newsevents->ne_image}}" class="img-responsive" alt="">
                        <h3><a href="{{Config::get('app.url')}}public/news/detail/{{$newsevents->id_ne}}">[{{strtoupper($newsevents->ne_type)}}] {{$newsevents->ne_title}}</a></h3>
                        <p><?php str_limit(strip_tags($newsevents->ne_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$newsevents->id_ne.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?></p>
                        <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($newsevents->created_at))}}</small>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-4">
                        <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big2.jpg" class="img-responsive" alt="">
                        <h3><a href="news-detail.php">News Title Here</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                    </div> -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- <div id="event-list" class="col-md-4">
                <h1><i class="fa fa-television"></i> Latest Events</h1>
                <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                <h3><a href="#">Events Title Here</a></h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div class="clearfix"></div>
        </div> -->
    </div>
    
    <div id="news-list" class="galleries">
        <h1>Gallery</h1>
        <div class="row clearfix">
            @foreach($galery as $galeries)
            <div class="col-md-4 news-item">
                <img src="<?php echo Config::get('app.url');?>/assets/galery/{{$galeries->image_cover}}" class="img-responsive" alt="">
                <h3><a href="<?php echo Config::get('app.url');?>public/galery/detail/{{$galeries->id_image}}">{{$galeries->image_title}}</a></h3>
                <p><?php str_limit(strip_tags($galeries->image_description),200,'.... <br><a href="'.Config::get('app.url').'public/galery/detail/'.$galeries->id_image.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?></p>
                <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($galeries->created_at))}}</small>
            </div>
            @endforeach
            <!-- <div class="col-md-4 news-item">
                <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big2.jpg" class="img-responsive" alt="">
                <h3><a href="news-detail.php">Gallery Title Here</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div class="col-md-4 news-item">
                <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big2.jpg" class="img-responsive" alt="">
                <h3><a href="news-detail.php">Gallery Title Here</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div> -->
        </div>
    </div>

    <div id="news-list" class="galleries">
        <h1>Video Gallery</h1>
        <div class="row clearfix">
            @foreach($video as $videos)
            <div class="col-md-4" style="margin-bottom: 30px;">
                
                <a href="<?php echo Config::get('app.url');?>public/video/detail/{{$videos->id_video}}">
                    <img src="<?php echo Config::get('app.url');?>assets/galery/{{$videos->video_thumbnail}}" class="img-responsive" alt="">
                </a>
                <h3><a href="<?php echo Config::get('app.url');?>public/video/detail/{{$videos->id_video}}">{{$videos->video_description}}</a></h3>
                <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($videos->created_at))}}</small>
            </div>
        @endforeach

            <!-- <div class="col-md-4 news-item">
                <img src="assets/main/img/video.png" class="img-responsive" alt="">
                <h3><a href="public/video_detail">Gallery Title Here</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div class="col-md-4 news-item">
                <img src="assets/main/img/video.png" class="img-responsive" alt="">
                <h3><a href="public/video_detail">Gallery Title Here</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>
            <div class="col-md-4 news-item">
                <img src="assets/main/img/video.png" class="img-responsive" alt="">
                <h3><a href="public/video_detail">Gallery Title Here</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div> -->
        </div>
    </div>
    <div class="pre-footer">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="heading-title"><img src="<?php echo Config::get('app.url');?>assets/main/img/star.png" alt="" /> &nbsp;Join Member</h1>
                <h2>Connect with us and Get More</h2>
                <p>Stay in the know with special offers, latest news, feature stories and even new apps tailored to you.</p>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <!-- <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">                        
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" />
                        </div>                        
                        <div class="form-group">
                            <label>Konfirmasi Email</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div> -->
        </div>
    </div>
</div>
@stop