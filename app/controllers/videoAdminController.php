<?php
class videoAdminController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->video 		= new video;
		$this->videoFile 	= new videoFile;
		$this->path 		= base_path().'/assets/galery/';
	}
	function index(){
		$getgalery 			= $this->video->get_page(20);
		$view['notip'] 		= Session::get('notip');
		$view['getgalery'] 	= $getgalery;
		$this->layout->content =  View::make('admin.video_gallery.list',$view);
	}
	function add(){
		$view['action'] 	   = 'create';
		$view['name'] 		   = Session::get('name');
		$view['tags'] 		   = Session::get('tags');
		$view['description']   = Session::get('description');
		$view['id_video']      = Session::get('id_video');
		$view['notip']     	   = Session::get('notip');
		$view['url_video'] 	   = Session::get('url_video');
		$view['url'] 		   = Config::get('app.url').'public/admin/video/add';
		$this->layout->content = View::make('admin.video_gallery.form',$view);
	}
	function do_add(){
		$name 							= Input::get('name');
		$description 					= Input::get('description');
		$tags 							= Input::get('tags');
		// $url 							= Input::get('url_video');
		$insert['video_title']  		= $name;
		$insert['video_description']  	= $description;
		$insert['video_tag']  			= $tags;
		// $insert['video_url']  			= $url;
		$insert['created_at']  			= date('Y-m-d H:i:s');
		if(Input::hasFile('thumb')){
			$thumb 		= Input::file('thumb');
			$filename 	= $thumb->getClientOriginalName();
			$thumb->move($this->path,$filename);
			$insert['video_thumbnail']  			= $filename;
		}
		$ids 	= $this->video->add($insert);
		if(Input::has('url_video')){
			$video 		= Input::get('url_video');
			$title 		= Input::get('title_video');
			$count 		= count($video);
			for($i=0;$count > $i;$i++){
				if(!is_null($video[$i]) && $video[$i] != "" ){
					$file['video_id'] 			= $ids;
					$file['vf_file'] 		 	= $video[$i];
					$file['vf_title'] 		 	= $title[$i];
					$file['created_at'] 		= date('Y-m-d H:i:s');
					$this->videoFile->add($file);
				}
			}
			// echo "true";
		}
		if($ids > 0){
			Session::flash('notip','<div class="alert alert-success" role="alert">Galery created.</div>');
			return Redirect::to('admin/video');	
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Create galery failed, please recreate.</div>');
			return Redirect::to('admin/video/add');	
		}
		
	}
	function edit($id){
		$getgalery 			   = $this->video->get_id($id);
		$getvideo 			   = $this->videoFile->get_idvideo($id);
		$view['action'] 	   = 'edit';
		$view['galery'] 	   = $getgalery;
		$view['video']	   	   = $getvideo;
		$view['url'] 		   = Config::get('app.url').'public/admin/video/edit';
		$view['name'] 		   = $getgalery->video_title;
		$view['tags'] 		   = $getgalery->video_tag;
		$view['description']   = $getgalery->video_description;
		// $view['url_video']     = $getgalery->video_url;
		$view['id_video']      = $getgalery->id_video;
		$view['notip']     	   = Session::get('notip');
		$this->layout->content = View::make('admin.video_gallery.form',$view);
	}
	function delete_file($id){
		$idgalery 	= Input::get('id');
		$this->videoFile->del($id);
		Session::flash('notip','<div class="alert alert-success" role="alert">Galery deleted.</div>');
		return Redirect::to('admin/video/edit/'.$idgalery);	
	}
	function do_edit(){
		$name 					= Input::get('name');
		$description 			= Input::get('description');
		$tags 					= Input::get('tags');
		$ids 					= Input::get('ids');
		$insert['video_title']  		= $name;
		$insert['video_description']  	= $description;
		$insert['video_tag']  			= $tags;
		$insert['updated_at']  			= date('Y-m-d H:i:s');
		if(Input::hasFile('thumb')){
			$thumb 		= Input::file('thumb');
			$filename 	= $thumb->getClientOriginalName();
			$thumb->move($this->path,$filename);
			$insert['video_thumbnail']  			= $filename;
			
			// echo "true";
		}
		$res = $this->video->edit($ids,$insert);
		if(Input::has('url_video')){
			$video 		= Input::get('url_video');
			$titlevideo	= Input::get('title_video');
			$count 		= count($video);
			for($i=0;$count > $i;$i++){
				if(!is_null($video[$i]) && $video[$i] != ""){
					$file['video_id'] 			= $ids;
					$file['vf_file'] 		 	= $video[$i];
					$file['created_at'] 		= date('Y-m-d H:i:s');
					$this->videoFile->add($file);
					
				}
				
			}
			// echo "true";
		}
		if($res > 0){
			Session::flash('notip','<div class="alert alert-success" role="alert">Galery updated.</div>');
			return Redirect::to('admin/video');	
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Update galery failed, please reupdate.</div>');
			return Redirect::to('admin/video/add');	
		}
		
	}
	function del($id){
		$this->video->del($id);
		$this->videoFile->del_idvideo($id);
		Session::flash('notip','<div class="alert alert-danger" role="alert">Galery Deleted.</div>');
		return Redirect::to('admin/video');	
	}


}