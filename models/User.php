<?php require_once 'BaseModel.php'; 
require_once 'Slide.php';
require_once 'TinTuc.php';
/**
* 
*/
class User extends BaseModel
{
	
	public $tableName='users';
}
function getsosp(){
		$getsoSp=TinTuc::sqlbullder(["SELECT COUNT(*) AS sobai FROM tintuc WHERE create_by=$this->id"]);
	return $getsoSp;
}


?>