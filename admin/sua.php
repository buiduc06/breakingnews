 <?php include_once('teamplate/header.php'); ?>
<?php 

// phần check bảo vệ db
if (isset($_GET['idBV'])==TRUE) {
	require_once '../models/TinTuc.php';
	$id=$_GET['idBV'];
  $showTinTuc11=TinTuc::findOne("$id");


} else if (isset($_GET['idLT'])==TRUE) {
	require_once '../models/LoaiTin.php';
	$id=$_GET['idLT'];

	
} else if (isset($_GET['idTV'])==TRUE) {
	require_once '../models/user.php';
	$id=$_GET['idTV'];
}
 else {
	echo '<div class="alert alert-warning"><strong>Warning!</strong> không không tìm thấy id</div>';
}
 ?>

 <!-- phần check thứ 2 -->


  <!-- phần body -->

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            
			<div class="container">
	<form class="form-horizontal" action="baiviet_submit.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $showTinTuc11->id ?>">
    <h2>UPDATE</h2>
    <!-- phần tiêu đề -->
<div class="form-group">
      <label class="control-label col-sm-5" >Tiêu Đề</label>
      <div class="col-sm-8">
        <input type="input" class="form-control" name="txtieude" value="<?= $showTinTuc11->TieuDe ?>" required>
      </div>
    </div>




	 <div class="form-group">
      <label class="control-label col-sm-12">Tiêu Đề Không Dấu</label>
      <div class="col-sm-8">
        <input type="input" class="form-control"  name="txtieudekhongdau" value="<?= $showTinTuc11->TieuDeKhongDau ?>" required>
      </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-5">Tóm Tắt</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="txtomtat" required><?= $showTinTuc11->TomTat ?></textarea>
      </div>
    </div>



	<div class="form-group">
      <label class="control-label col-sm-5" >Nội Dung</label>
      <div class="col-sm-12">
        <textarea class="form-control" rows="6" name="txnoidung" required><?= $showTinTuc11->NoiDung ?></textarea>
      </div>
    </div>


	  <div class="form-group">
      <label class="control-label col-sm-6" >Hình ảnh</label>
      <div class="col-sm-4">
        <input type="file" class="form-control"  name="txhinhanh" >
      </div>
    </div>

	<div class="form-group">
   <label class="control-label col-sm-6" >Danh Mục</label>
   <div class="col-sm-3">

  <select class="form-control" name="txdanhmuc">
    <option value="<?= $showTinTuc11->GetLoaiTin2()->id ?>"><?= $showTinTuc11->GetLoaiTin2()->Ten ?></option>

    <!-- phần lấy ra tất cả danh mục -->
    <?php $laytatcadanhmuc=LoaiTin::where(['id','!=',"$showTinTuc11->idLoaiTin"]);foreach ($laytatcadanhmuc as $laytatcadanhmuc1) { ?>
    <option value="<?= $laytatcadanhmuc1->id ?>"><?= $laytatcadanhmuc1->Ten ?></option>
    <?php } ?>
    <!-- hết phần lấy danh mục -->

  </select>
  </div>
	</div>


	<div class="form-group">
   <label class="control-label col-sm-12" >Tác giả</label>
   <div class="col-sm-3">
  <select class="form-control" name="txtacgia" >
    <option value="<?= $showTinTuc11->getTacGia()->id ?>"><?= $showTinTuc11->getTacGia()->name ?></option>
    <!-- phần lấy ra tất cả Tác giả  -->
    <?php $laytacgia=user::where(['id','!=',"$showTinTuc11->create_by"]);foreach ($laytacgia as $laytacgia1) { ?>
    <option value="<?= $laytacgia1->id ?>"><?= $laytacgia1->name ?></option>
    <?php } ?>
    <!-- hết phần lấy Tác giả  -->

  </select>
  </div>
  </div>

<button type="submit" class="btn btn-default">Update</button>

	</form>
</div>




</div>
        </div>
      </section>
      <!-- het phan body-->









<?php require_once 'teamplate/header.php'; ?>