<?php
class memberAdminController Extends BaseController{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->member = new member;
		$this->path   = base_path().'/assets/member/';
	}
	function index(){
		$getpage 		= $this->member->get_page();
		$view['page'] 	= $getpage;
		return View::make('admin.master_member.list',$view);
	}
	function add(){
		$view['url'] 					= Config::get('app.url').'public/admin/member/add';
		$view['member_type'] 			= $type;
		$view['member_name'] 			= $member_name;
		$view['member_nickname'] 		= $member_nickname;
		$view['member_birth'] 			= $member_birth;
		$view['member_religion'] 		= $member_religion;
		$view['member_sex']	 			= $member_sex;
		$view['member_blood_type']		= $member_blood_type;
		$view['member_address']			= $member_address;
		$view['member_phone']			= $member_phone;
		$view['member_email']			= $member_email;
		$view['member_office']			= $member_office;
		$view['member_office_address']	= $member_office_address;
		$view['member_office_number']	= $member_office_number;
		$view['member_business']		= $member_business;
		$view['member_position']		= $member_position;
		$view['member_license']			= $member_license;
		return View::make('admin.master_member.form',$view);
	}

	function do_add(){
		$type 					= Input::get('type');	
		$member_name 			= Input::get('member_name');
		$member_nickname 		= Input::get('member_nickname');
		$member_birth 			= Input::get('member_birth');
		$member_religion		= Input::get('member_religion');
		$member_sex				= Input::get('member_sex');
		$member_blood_type		= Input::get('member_blood_type');
		$member_address			= Input::get('member_address');
		$member_phone			= Input::get('member_phone');
		$member_email			= Input::get('member_email');
		$member_office			= Input::get('member_office');
		$member_business		= Input::get('member_business');
		$member_position		= Input::get('member_position');
		$member_office_address	= Input::get('member_office_address');
		$member_office_number	= Input::get('member_office_number');
		$member_license			= Input::get('member_license');
		$member_nopol			= Input::get('member_nopol');
		$member_chasis			= Input::get('member_chasis');
		$member_engine			= Input::get('member_engine');
		$member_car_type		= Input::get('member_car_type');
		$member_color			= Input::get('member_color');
		$member_car_year		= Input::get('member_car_year');
		$member_kta_start		= Input::get('member_kta_start');
		$member_kta_end			= Input::get('member_kta_end');
		$member_platinum		= Input::get('member_platinum');
		$member_size			= Input::get('member_size');
		$insert['member_type'] 			= $type;
		$insert['member_name'] 			= $member_name;
		$insert['member_nickname'] 		= $member_nickname;
		$insert['member_birth'] 		= $member_birth;
		$insert['member_religion'] 		= $member_religion;
		$insert['member_sex']	 		= $member_sex;
		$insert['member_blood_type']	= $member_blood_type;
		$insert['member_address']		= $member_address;
		$insert['member_phone']			= $member_phone;
		$insert['member_email']			= $member_email;
		$insert['member_office']		= $member_office;
		$insert['member_office_address']= $member_office_address;
		$insert['member_office_number']	= $member_office_number;
		$insert['member_business']		= $member_business;
		$insert['member_position']		= $member_position;
		$insert['member_license']		= $member_license;
		$insert['member_nopol']			= "";
		$insert['member_chasis']		= "";
		$insert['member_engine']		= "";
		$insert['member_car_type']		= "";
		$insert['member_color']			= "";
		$insert['member_car_year']		= "";
		$insert['member_kta_start']		= "";
		$insert['member_kta_end']		= "";
		$insert['member_platinum']		= "";
		$insert['member_size']			= "";
		$insert['created_at']			= date('Y-m-d H:i:s');
		if(Input::hasFile('member_image')){
			$member_image 			= Input::file('member_image');	
			$filename 				= $member_image->getClientOriginalName();
			$member_image->move($this->path,$filename);
			$insert['member_image'] 	= $filename;
		}
		$ids = $this->member->add($insert);
		if($ids > 0){
			// Mail::send();
			Session::flash('notip','<div class="alert alert-success">Registrasi berhasil.</div>');
			return Redirect::to('admin/member');
		}else{
			Session::flash('notip','<div class="alert alert-danger">Registrasi gagal, silakan ulangi.</div>');			
			return Redirect::to('admin/member/add');
		}

	}

	function edit(){
		if(Input::has('id')){
			$id 							= Input::get('id');
			$getdata 						= $this->member->get_id($id);
			$view['member_id']	 			= $id;
			$view['url'] 					= Config::get('app.url').'public/admin/member/edit';
			$view['member_type'] 			= $getdata->member_type;
			$view['member_name'] 			= $getdata->member_name;
			$view['member_nickname'] 		= $getdata->member_nickname;
			$view['member_birth'] 			= $getdata->member_birth;
			$view['member_religion'] 		= $getdata->member_religion;
			$view['member_sex']	 			= $getdata->member_sex;
			$view['member_blood_type']		= $getdata->member_blood_type;
			$view['member_address']			= $getdata->member_address;
			$view['member_phone']			= $getdata->member_phone;
			$view['member_email']			= $getdata->member_email;
			$view['member_office']			= $getdata->member_office;
			$view['member_office_address']	= $getdata->member_office_address;
			$view['member_office_number']	= $getdata->member_office_number;
			$view['member_business']		= $getdata->member_business;
			$view['member_position']		= $getdata->member_position;
			$view['member_license']			= $getdata->member_license;
			return View::make('admin.master_member.form',$view);
		}else{
			Session::flash('notip','<div class="alert alert-danger">Parameter ID tidak diketemukan.</div>');
			return Redirect::to('admin/member');
		}
	}
	function do_edit(){
		$type 					= Input::get('type');	
		$member_id 				= Input::get('member_id');
		$member_name 			= Input::get('member_name');
		$member_nickname 		= Input::get('member_nickname');
		$member_birth 			= Input::get('member_birth');
		$member_religion		= Input::get('member_religion');
		$member_sex				= Input::get('member_sex');
		$member_blood_type		= Input::get('member_blood_type');
		$member_address			= Input::get('member_address');
		$member_phone			= Input::get('member_phone');
		$member_email			= Input::get('member_email');
		$member_office			= Input::get('member_office');
		$member_business		= Input::get('member_business');
		$member_position		= Input::get('member_position');
		$member_office_address	= Input::get('member_office_address');
		$member_office_number	= Input::get('member_office_number');
		$member_license			= Input::get('member_license');
		$member_nopol			= Input::get('member_nopol');
		$member_chasis			= Input::get('member_chasis');
		$member_engine			= Input::get('member_engine');
		$member_car_type		= Input::get('member_car_type');
		$member_color			= Input::get('member_color');
		$member_car_year		= Input::get('member_car_year');
		$member_kta_start		= Input::get('member_kta_start');
		$member_kta_end			= Input::get('member_kta_end');
		$member_platinum		= Input::get('member_platinum');
		$member_size			= Input::get('member_size');	
		$insert['member_type'] 			= $type;
		$insert['member_name'] 			= $member_name;
		$insert['member_nickname'] 		= $member_nickname;
		$insert['member_birth'] 		= $member_birth;
		$insert['member_religion'] 		= $member_religion;
		$insert['member_sex']	 		= $member_sex;
		$insert['member_blood_type']	= $member_blood_type;
		$insert['member_address']		= $member_address;
		$insert['member_phone']			= $member_phone;
		$insert['member_email']			= $member_email;
		$insert['member_office']		= $member_office;
		$insert['member_office_address']= $member_office_address;
		$insert['member_office_number']	= $member_office_number;
		$insert['member_business']		= $member_business;
		$insert['member_position']		= $member_position;
		$insert['member_license']		= $member_license;
		if(Input::hasFile('member_image')){
			$member_image 			= Input::file('member_image');	
			$filename 				= $member_image->getClientOriginalName();
			$member_image->move($this->path,$filename);
			$insert['member_image'] 	= $filename;
		}
		if($this->member->edit($member_id,$insert)){
			Session::flash('notip','<div class="alert alert-success">Update Member Berhasil.</div>');
			return Redirect::to('admin/member');
		}else{
			Session::flash('notip','<div class="alert alert-danger">Registrasi gagal, silakan ulangi.</div>');			
			return Redirect::to('admin/member/edit?id='.$member_id);
		}

	}
	


}