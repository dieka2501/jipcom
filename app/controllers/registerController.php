<?php
class registerController Extends BaseController{
	protected $layout = "front";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->member = new member;
		$this->path   = base_path().'/assets/member/';

	}
	function index(){
		$view['notip'] 		   = Session::get('notip');
		$view['url'] 		   = Config::get('app.url').'public/register';
		$this->layout->content = View::make('front.register.page',$view);
	}
	function do_create(){
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
		$insert['member_nopol']			= $member_nopol;
		$insert['member_chasis']		= $member_chasis;
		$insert['member_engine']		= $member_engine;
		$insert['member_car_type']		= $member_car_type;
		$insert['member_color']			= $member_color;
		$insert['member_car_year']		= $member_car_year;
		$insert['member_kta_start']		= $member_kta_start;
		$insert['member_kta_end']		= $member_kta_end;
		$insert['member_platinum']		= $member_platinum;
		$insert['member_size']			= $member_size;
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

		}else{
			Session::flash('notip','<div class="alert alert-danger">Registrasi gagal, silakan ulangi.</div>');			
		}
		return Redirect::to('register');
	}
}