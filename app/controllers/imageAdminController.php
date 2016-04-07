<?php
class imageAdminController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->image 		= new image;
		$this->imageFile 	= new imageFile;
		$this->path 		= base_path().'/assets/galery/';
	}
	function index(){
		$getgalery 			= $this->image->get_page(20);
		$view['notip'] 		= Session::get('notip');
		$view['getgalery'] 	= $getgalery;
		$this->layout->content =  View::make('admin.image_gallery.list',$view);
	}
	function add(){
		$view['action'] 	   = 'create';
		$view['name'] 		   = Session::get('name');
		$view['tags'] 		   = Session::get('tags');
		$view['description']   = Session::get('description');
		$view['id_image']      = Session::get('id_image');
		$view['notip']     	   = Session::get('notip');
		$view['url'] 		   = Config::get('app.url').'public/admin/image/add';
		$this->layout->content = View::make('admin.image_gallery.form',$view);
	}
	function do_add(){
		$name 					= Input::get('name');
		$description 			= Input::get('description');
		$tags 					= Input::get('tags');
		$insert['image_title']  		= $name;
		$insert['image_description']  	= $description;
		$insert['image_tag']  			= $tags;
		$insert['created_at']  			= date('Y-m-d H:i:s');
		$ids 	= $this->image->add($insert);
		if(Input::hasFile('image')){
			$image 		= Input::file('image');
			$count 		= count($image);
			for($i=0;$count > $i;$i++){
				if(!is_null($image[$i])){
					$filename 	= $image[$i]->getClientOriginalName();
					$image[$i]->move($this->path,$filename);
					$file['image_id'] 			= $ids;
					$file['if_name'] 		 	= $filename;
					$file['created_at'] 		= date('Y-m-d H:i:s');
					$this->imageFile->add($file);
					if($i == 0){
						$neimage['image_cover']	= $filename;
						$this->image->edit($ids,$neimage);
					}
					
				}
				
			}
			// echo "true";
		}
		if($ids > 0){
			Session::flash('notip','<div class="alert alert-success" role="alert">Galery created.</div>');
			return Redirect::to('admin/image');	
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Create galery failed, please recreate.</div>');
			return Redirect::to('admin/image/add');	
		}
		
	}
	function edit($id){
		$getgalery 			   = $this->image->get_id($id);
		$getimage 			   = $this->imageFile->get_idimage($id);
		$view['action'] 	   = 'edit';
		$view['galery'] 	   = $getgalery;
		$view['image']	   	   = $getimage;
		$view['url'] 		   = Config::get('app.url').'public/admin/image/edit';
		$view['name'] 		   = $getgalery->image_title;
		$view['tags'] 		   = $getgalery->image_tag;
		$view['description']   = $getgalery->image_description;
		$view['id_image']      = $getgalery->id_image;
		$view['notip']     	   = Session::get('notip');
		$this->layout->content = View::make('admin.image_gallery.form',$view);
	}
	function delete_file($id){
		$idgalery 	= Input::get('id');
		$this->imageFile->del($id);
		Session::flash('notip','<div class="alert alert-success" role="alert">Galery deleted.</div>');
		return Redirect::to('admin/image/edit/'.$idgalery);	
	}
	function do_edit(){
		$name 					= Input::get('name');
		$description 			= Input::get('description');
		$tags 					= Input::get('tags');
		$ids 					= Input::get('ids');
		$insert['image_title']  		= $name;
		$insert['image_description']  	= $description;
		$insert['image_tag']  			= $tags;
		$insert['updated_at']  			= date('Y-m-d H:i:s');
		$res = $this->image->edit($ids,$insert);
		if(Input::hasFile('image')){
			$image 		= Input::file('image');
			// var_dump($image);die;
			$count 		= count($image);
			for($i=0;$count > $i;$i++){
				if(!is_null($image[$i])){
					$filename 	= $image[$i]->getClientOriginalName();
					$image[$i]->move($this->path,$filename);
					$file['image_id'] 			= $ids;
					$file['if_name'] 		 	= $filename;
					$file['created_at'] 		= date('Y-m-d H:i:s');
					$this->imageFile->add($file);
					if($i == 0){
						$neimage['image_cover']	= $filename;
						$this->image->edit($ids,$neimage);
					}
				}
				
			}
			// echo "true";
		}
		if($res > 0){
			Session::flash('notip','<div class="alert alert-success" role="alert">Galery updated.</div>');
			return Redirect::to('admin/image');	
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Update galery failed, please reupdate.</div>');
			return Redirect::to('admin/image/add');	
		}
		
	}
	function del($id){
		$this->image->del($id);
		$this->imageFile->del_idimage($id);
		Session::flash('notip','<div class="alert alert-danger" role="alert">Galery Deleted.</div>');
		return Redirect::to('admin/image');	
	}


}