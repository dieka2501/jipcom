<?php
class videoFile Extends Eloquent{
	protected $table 		= 'video_file';
	protected $primaryKey 	= "id_vf";
	function add($data){
		return videoFile::insertGetId($data);
	}
	function get_idvideo($idvideo){
		return videoFile::where('video_id',$idvideo)->get();
	}
	function del($id){
		return videoFile::where($this->primaryKey,$id)->delete();
	}
	function del_idvideo($idvideo){
		return videoFile::where("video_id",$idvideo)->delete();
	}
	function get_page($page){
		return videoFile::orderBy('id_if','DESC')->paginate($page);
	}
	function get_page_idvideo($idvideo,$page){
		return videoFile::orderBy('id_if','DESC')->where('video_id',$idvideo)->paginate($page);
	}
}