<?php
class image Extends Eloquent{
	protected $table = "image";
	protected $primaryKey = "id_image";
	function add($data){
		return image::insertGetId($data);
	}
	function edit($id,$data){
		return image::where($this->primaryKey,$id)->update($data);
	}
	function get_page($page){
		return image::orderBy($this->primaryKey,'DESC')->paginate($page);
	}
	function get_id($id){
		return image::find($id);
	}
	function del($id){
		return image::where($this->primaryKey,$id)->delete();
	}
}