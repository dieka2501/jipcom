<?php
class neController Extends BaseController{
	protected $layout = 'front';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->ne 	= new newsevent;
		$this->nef 	= new newseventFile;
		$this->video= new video;
	}
	function index(){
		$getnew 		= $this->ne->get_page(10);
		$view['list'] 	= $getnew;
		$this->layout->content = View::make('front.news.list',$view);
	}
	function detail($id){
		$getne 			= $this->ne->get_id($id);
		$getnef 		= $this->nef->get_idne($id);
		$gettag 		= $getne->ne_tag;
		$exptag 		= explode(',', $getne->ne_tag);
		$counttag 		= count($exptag) -1;
		$randtag 		= rand(0,$counttag);
		$tagv 			= $this->video->rand_tag($exptag[$randtag]);
		// var_dump($tagv);var_dump($exptag[$randtag]); 	
		$view['ne'] 	= $getne;
		$view['nef'] 	= $getnef;
		$view['related']= $tagv;
		return View::make('front.news.detail',$view);
	}	
}