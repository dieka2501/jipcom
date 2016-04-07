<?php
class imageFile Extends Eloquent{
	protected $table 		= 'image_file';
	protected $primaryKey 	= "id_if";
	function add($data){
		return imageFile::insertGetId($data);
	}
	function get_idimage($idimage){
		return imageFile::where('image_id',$idimage)->get();
	}
	function del($id){
		return imageFile::where($this->primaryKey,$id)->delete();
	}
	function del_idimage($idimage){
		return imageFile::where("image_id",$idimage)->delete();
	}
	function get_page($page){
		return imageFile::orderBy('id_if','DESC')->paginate($page);
	}
	function get_page_idimage($idimage,$page){
		return imageFile::orderBy('id_if','DESC')->where('image_id',$idimage)->paginate($page);
	}
}