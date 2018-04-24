<?php 

require_once 'BaseModel.php';
require_once 'TheLoai.php';
/**
* 
*/
class Comment extends BaseModel
{
	public $tableName= 'comment';
	
	function getTheLoaicomment(){
		$TheLoaicomment = TinTuc::findOne($this->idTinTuc);
		return $TheLoaicomment;
}
	function getNguoicommnet(){
		$Nguoicommnet = User::findOne($this->idUser);
		return $Nguoicommnet;
	}
}

 ?>