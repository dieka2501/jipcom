<?php
class member Extends Eloquent{
	protected $table 		= "member";
	protected $primaryKey 	= "id_member";
	function add($data){
		return member::insertGetId($data);
	}
	function edit($id,$data){
		return member::where($this->primaryKey,$id)->update($data);
	}
	function get_page(){
		return member::orderBy('id_member','DESC')->paginate(20);
	}
	function get_id($id){
		return member::find($id);
	}
}