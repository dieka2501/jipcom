<?php
class videoController Extends BaseController{
	protected $layout = 'front';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->video = new video;
		$this->vf 	 = new videoFile;
	}
	function index(){
		$view['video'] 		= $this->video->get_page(6);
		$this->layout->content = View::make('front.gallery.video',$view);
	}
	function detail($id){
		$detail 				= $this->vf->get_idvideo($id);
		$view['detail']     	= $detail;
		$this->layout->content 	=  View::make('front.gallery.video_detail',$view);	
	}
}