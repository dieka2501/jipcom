<?php
/**
* Front Controller
*/
class FrontController extends BaseController
{
	
	function __construct()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->newsevent 	= new newsevent;
		$this->galery 		= new image;
		$this->video 		= new video;
	}

	function index()
	{
		$view['newsevent'] = $this->newsevent->get_page(3); 
		$view['galery']    = $this->galery->get_page(3);
		return View::make('front.home.page',$view);
	}

	function contact_us()
	{
		return View::make('front.contact.page');
	}

	function foto_gallery()
	{
		return View::make('front.gallery.foto');
	}

	function foto_detail()
	{
		return View::make('front.gallery.foto_detail');
	}

	function video_gallery()
	{
		// $view['video'] 		= $this->video->get_page(6);
		// return View::make('front.gallery.video',$view);
		return View::make('front.gallery.video');
	}

	function video_detail()
	{
		$view['video'] 		= $this->video->get_page(6);
		return View::make('front.gallery.video_detail',$view);
	}

	function news()
	{
		return View::make('front.news.list');
	}

	function news_detail()
	{
		return View::make('front.news.detail');
	}

	function register()
	{
		return View::make('front.register.page');
	}
}