<?php
class neController Extends BaseController{
	protected $layout = 'front';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->ne 	= new newsevent;
		$this->nef 	= new newseventFile;
	}
	function index(){
		$getnew 		= $this->ne->get_page(10);
		$view['list'] 	= $getnew;
		$this->layout->content = View::make('front.news.list',$view);
	}
	function detail($id){
		$getne 			= $this->ne->get_id($id);
		$getnef 		= $this->nef->get_idne($id);
		$view['ne'] 	= $getne;
		$view['nef'] 	= $getnef;
		return View::make('front.news.detail',$view);
	}	
}