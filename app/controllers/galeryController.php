<?php
class galeryController Extends BaseController{
	protected $layout = 'front';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->galery 	= new image;
		$this->image 	= new imageFile;

	}
	function index(){
		$getgalery 				= $this->galery->get_page(6);
		$view['galery'] 		= $getgalery;
		$this->layout->content  = View::make('front.gallery.foto',$view);
	}
	function detail($id){
		$getimage 		= $this->image->get_page_idimage($id,6);	  
		$view['image'] 	= $getimage;
		$this->layout->content = View::make('front.gallery.foto_detail',$view);
	}
}