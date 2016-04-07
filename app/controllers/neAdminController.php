<?php
class neAdminController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->ne 		= new newsevent;
		$this->nef 		= new newseventFile;
	}
	function index(){
		$getdata 		= $this->ne->get_page(20);
		$view['data'] 	= $getdata;
		$view['notip'] 	= Session::get('notip');
		$this->layout->content = View::make('admin.news_events.list',$view);
	}
	function add(){
		$view['action'] 		= 'create';
		$view['id_ne']	 		= Session::get('id_ne');
		$view['ne_title'] 		= Session::get('ne_title');
		$view['ne_type'] 		= Session::get('ne_type');
		$view['ne_tag'] 		= Session::get('ne_tag');
		$view['ne_content']		= Session::get('ne_content');
		$view['notip']			= Session::get('notip');
		$view['url'] 			= Config::get('app.url')."public/admin/newsevents/add";
		$this->layout->content = View::make('admin.news_events.form',$view);
	}
	function do_add(){
		$path 			= base_path().'/assets/upload/';
		if(Input::has('ne_title') && Input::has('ne_content')){
			$ne_title 		= Input::get('ne_title');
			$ne_type 		= Input::get('ne_type');
			$ne_tag 		= Input::get('ne_tag');
			$ne_content 	= Input::get('ne_content');
			$insert['ne_title'] 	= $ne_title;
			$insert['ne_type'] 		= $ne_type;
			$insert['ne_tag'] 		= $ne_tag;
			$insert['ne_content']	= $ne_content;
			$insert['created_at']	= date('Y-m-d H:i:s');
			$idne 	= $this->ne->add($insert);
			if($idne > 0){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$count 		= count($image);
					for($i=0;$count > $i;$i++){
						if(!is_null($image[$i])){
							$filename 	= $image[$i]->getClientOriginalName();
							$image[$i]->move($path,$filename);
							$file['ne_id'] 			= $idne;
							$file['nef_file'] 	 	= $filename;
							$file['created_at'] 	= date('Y-m-d H:i:s');
							$this->nef->add($file);
							if($i == 0){
								$neimage['ne_image']	= $filename;
								$this->ne->edit($idne,$neimage);
							}
							
						}
						
					}
					// echo "true";
				}
				Session::flash('notip','<div class="alert alert-success" role="alert">Insert Sukses</div>');
				return Redirect::to('admin/newsevents');	
			}else{
				Session::flash('ne_title',$ne_title);
				Session::flash('ne_content',$ne_content);
				Session::flash('ne_type',$ne_type);
				Session::flash('ne_tag',$ne_tag);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Insert news & event gagal.</div>');
				return Redirect::to('admin/newsevents/add');		
			}
		}else{
			Session::flash('ne_title',$ne_title);
			Session::flash('ne_content',$ne_content);
			Session::flash('ne_type',$ne_type);
			Session::flash('ne_tag',$ne_tag);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Title dan Content harus diisi.</div>');
			return Redirect::to('admin/newsevents/add');	

		}
		
	}
	function edit($id){
		$getdata 				= $this->ne->get_id($id);
		$getfile 				= $this->nef->get_idne($id);
		$view['action'] 		= 'edit';
		$view['id_ne']	 		= $getdata->id_ne;
		$view['ne_title'] 		= $getdata->ne_title;
		$view['ne_type'] 		= $getdata->ne_type;
		$view['ne_tag'] 		= $getdata->ne_tag;
		$view['ne_content']		= $getdata->ne_content;
		$view['file']			= $getfile;
		$view['notip']			= Session::get('notip');
		$view['url'] 			= Config::get('app.url')."public/admin/newsevents/edit";
		$this->layout->content = View::make('admin.news_events.form',$view);	
	}
	function delete_file($id){
		$idne = Input::get('idne');
		$this->nef->del_id($id);
		Session::flash('notip','<div class="alert alert-danger" role="alert">Gambar telah terhapus.</div>');
		return Redirect::to('/admin/newsevents/edit/'.$idne);
	}
	function do_edit(){
		$path 			= base_path().'/assets/upload/';
		if(Input::has('ne_title') && Input::has('ne_content')){
			$ids 			= Input::get('id_ne');
			$ne_title 		= Input::get('ne_title');
			$ne_type 		= Input::get('ne_type');
			$ne_tag 		= Input::get('ne_tag');
			$ne_content 	= Input::get('ne_content');
			$insert['ne_title'] 	= $ne_title;
			$insert['ne_type'] 		= $ne_type;
			$insert['ne_tag'] 		= $ne_tag;
			$insert['ne_content']	= $ne_content;
			$insert['created_at']	= date('Y-m-d H:i:s');
			$this->ne->edit($ids,$insert);
			if(true){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$count 		= count($image);
					for($i=0;$count > $i;$i++){
						if(!is_null($image[$i])){
							$filename 	= $image[$i]->getClientOriginalName();
							$image[$i]->move($path,$filename);
							$file['ne_id'] 			= $ids;
							$file['nef_file'] 	 	= $filename;
							$file['created_at'] 	= date('Y-m-d H:i:s');
							$this->nef->add($file);
							if($i == 0){
								$neimage['ne_image']	= $filename;
								$this->ne->edit($ids,$neimage);
							}		
						}
						
					}
					// echo "true";
				}
				Session::flash('notip','<div class="alert alert-success" role="alert">Update Data News & Event Sukses</div>');
				return Redirect::to('admin/newsevents');	
			}else{
				Session::flash('ne_title',$ne_title);
				Session::flash('ne_content',$ne_content);
				Session::flash('ne_type',$ne_type);
				Session::flash('ne_tag',$ne_tag);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Update news & event gagal.</div>');
				return Redirect::to('admin/newsevents/edit/'.$ids);		
			}
		}else{
			Session::flash('ne_title',$ne_title);
			Session::flash('ne_content',$ne_content);
			Session::flash('ne_type',$ne_type);
			Session::flash('ne_tag',$ne_tag);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Title dan Content harus diisi.</div>');
			return Redirect::to('admin/newsevents/edit/'.$ids);	

		}
	}
	function del($id){
		$this->ne->del_id($id);
		$this->nef->del_idne($id);
		Session::flash('notip','<div class="alert alert-danger" role="alert">News & event telah terhapus.</div>');
		return Redirect::to('/admin/newsevents');
	}
}