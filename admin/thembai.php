<?php include_once('teamplate/header.php'); ?>
<?php 
require_once '../models/TinTuc.php';
$showTinTuc11=LoaiTin::all();

 ?>

  <!-- phần body -->

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            
			<div class="container">
        <div class="col-sm-8">
	<form class="form-horizontal " method="POST" action="baiviet_submit.php" enctype="multipart/form-data">
    <!-- phần tiêu đề -->
<div class="form-group">
      <label class="control-label col-sm-5" >Tiêu Đề</label>
      <div class="col-sm-10">
        <input type="input" class="form-control" name="txtieude"  >
      </div>
    </div>



	 <div class="form-group">
      <label class="control-label col-sm-12">Tiêu Đề Không Dấu</label>
      <div class="col-sm-10">
        <input type="input" class="form-control"  name="txtieudekhongdau">
      </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-5">Tóm Tắt</label>
      <div class="col-sm-12">
        <textarea class="form-control" rows="3" name="txtomtat"></textarea>
      </div>
    </div>



	<div class="form-group">
      <label class="control-label col-sm-5" >Nội Dung</label>
      <div class="col-sm-12">
        <textarea class="form-control" rows="6" name="txnoidung"></textarea>
      </div>
    </div>



	  <div class="form-group">
      <label class="control-label col-sm-12" >Hình ảnh</label>
      <div class="col-sm-10">
        <input type="file" class="form-control"  name="txhinhanh">
      </div>
    </div>
<div class="form-group">
   <label class="control-label col-sm-6" >Danh Mục</label>
   <div class="col-sm-5">

  <select class="form-control" name="txdanhmuc" required>
    <!-- phần lấy ra tất cả danh mục -->
    <?php foreach ($showTinTuc11 as $laytatcadanhmuc1) { ?>
    <option value="<?= $laytatcadanhmuc1->id ?>"><?= $laytatcadanhmuc1->Ten ?></option>
    <?php } ?>
    <!-- hết phần lấy danh mục -->

  </select>
  </div>
  </div>


<button type="submit" class="btn btn-default">Update</button>
	</form>
</div>
</div>



</div>
        </div>
      </section>
      <!-- het phan body-->





 <?php require_once 'teamplate/header.php'; ?>