<?php
class newseventFile Extends Eloquent{
	protected $table = "news_event_file";
	protected $primaryKey = 'id_nef';
	function add($data){
		return newseventFile::insertGetId($data);
	}
	function get_idne($id_ne){
		return newseventFile::where('ne_id',$id_ne)->get();
	}
	function del_id($id){
		return newseventFile::where($this->primaryKey,$id)->delete();
	}
	function del_idne($idne){
		return newseventFile::where('ne_id',$idne)->delete();
	}
}