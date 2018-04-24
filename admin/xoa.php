<?php 
if (isset($_GET['idBV'])==TRUE) {
	require_once '../models/TinTuc.php';
	$id=$_GET['idBV'];
	$xoatintuc=new Tintuc();
	$xoatintuc->id="$id";
	$xoatintuc->delete();
	header("location: baiviet.php?notification=$id");

} else if (isset($_GET['idLT'])==TRUE) {
	require_once '../models/LoaiTin.php';
	$id=$_GET['idLT'];
	$xoatintuc=new LoaiTin();
	$xoatintuc->id="$id";
	$xoatintuc->delete();
	header("location: danhmuc.php?notification=$id");
	
} else if (isset($_GET['idTV'])==TRUE) {
	require_once '../models/user.php';
	$id=$_GET['idTV'];
	$xoatintuc=new User();
	$xoatintuc->id="$id";
	$xoatintuc->delete();
	header("location: thanhvien.php?notification=$id");
}
 else {
	echo "xóa không thành công do không tìm thấy id";
}





 ?>