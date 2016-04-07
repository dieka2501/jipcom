<?php
class newsevent Extends Eloquent{
	protected $table = 'news_event';
	protected $primaryKey = "id_ne";
	function add($data){
		return newsevent::insertGetId($data);
	}
	function get_page($page){
		return newsevent::orderBy($this->primaryKey,'DESC')->paginate($page);
	}
	function get_cari($cari,$page){
		return newsevent::where('ne_title','like','%'.$cari.'%')->paginate($page);
	}
	function get_id($id){
		return newsevent::where($this->primaryKey,$id)->first();
	}
	function edit($id,$data){
		return newsevent::where($this->primaryKey,$id)->update($data);
	}
	function del_id($id){
		return newsevent::where($this->primaryKey,$id)->delete();
	}
}