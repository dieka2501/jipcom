<?php
class video Extends Eloquent{
	protected $table = "video";
	protected $primaryKey = "id_video";
	function add($data){
		return video::insertGetId($data);
	}
	function edit($id,$data){
		return video::where($this->primaryKey,$id)->update($data);
	}
	function get_page($page){
		return video::orderBy($this->primaryKey,'DESC')->paginate($page);
	}
	function get_id($id){
		return video::find($id);
	}
	function del($id){
		return video::where($this->primaryKey,$id)->delete();
	}
}