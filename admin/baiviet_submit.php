<?php 
require_once '../models/TinTuc.php';
require_once '../models/BaseModel.php';

$id = isset($_POST['id'])==true ? $_POST['id'] : null;
$TieuDe = isset($_POST['txtieude'])==true ? $_POST['txtieude'] : null;
$TieuDeKhongDau = isset($_POST['txtieudekhongdau'])==true ? $_POST['txtieudekhongdau'] : null;
$tomtat = isset($_POST['txtomtat'])==true ? $_POST['txtomtat'] : null;
$NoiDung = isset($_POST['txnoidung'])==true ? $_POST['txnoidung'] : null;
$DanhMuc = isset($_POST['txdanhmuc'])==true ? $_POST['txdanhmuc'] : null;
$Tacgia = isset($_POST['txtacgia'])==true ? $_POST['txtacgia'] : null;



    
if ($id != null) {
	$model=Tintuc::findOne($id);
require_once 'teamplate/validt_update.php';


}else{
	$model = new Tintuc();

// phần validate dành cho insert
	require_once 'teamplate/validt_insert.php';

}



$model->TieuDe = $TieuDe;
$model->TieuDeKhongDau = $TieuDeKhongDau;
$model->TomTat = $tomtat;
$model->NoiDung = $NoiDung;
$model->idLoaiTin = $DanhMuc;
$model->create_by = $Tacgia;
$model->Hinh = $imaup['ok'];


if(isset($model->id)){
	$model->update();


header('location: baiviet.php?success=update');
}else{
	$model->insert();

header('location: baiviet.php?success=insert');
}


?>