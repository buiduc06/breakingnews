<?php include_once 'teamplate/header.php'; ?>

<?php 
// phần check xóa dữ liệu
if (isset($_GET['notification'])) {
  $check=$_GET['notification'];
  $checkdelete=LoaiTin::where(['id',"$check"]);
  if ($checkdelete!=True) {
   echo '<div class="alert alert-success">
  <strong>Success!</strong> Xóa Loại Tin Thành Công
</div>
';
  } else {
     echo "<script>alert('Xóa Không Thành Công Xin !( Vui Lòng Kiểm Tra Lại Cấu Trúc Của bảng dữ liệu ! Có Thể Dữ Liệu Đang Được Liên Kết Với 1 Bảng khác trong database ) ')</script>";
  }
  
} else {
    
}

  $showdanhmuc=LoaiTin::all();

 ?>


      <!-- phần body -->

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            

                 <div class="table-responsive"> 
            <h2>BẢNG DANH MỤC LOẠI TIN</h2>         
  <table class="table table-striped" >
    <thead>
      <tr>
        <th>#</th>
        <th>Tên LoaiTin</th>
        <th>Thể Loại</th>
        <th>Số Bài Viêt</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($showdanhmuc as $show2) {
        $getSobaiviet=TinTuc::sqlbullder(["SELECT COUNT(*) AS sobai FROM tintuc WHERE idLoaiTin=$show2->id"]);
            ?>
      <tr>
        <td><?=$show2->id ?></td>
        <td><?=$show2->Ten ?></td>
        <td><?=$show2->getTheLoai()->Ten ?></td>
        <td><?php foreach ($getSobaiviet as $getSobaiviet) {echo $getSobaiviet->sobai; } ?></td>
        <td>
        <a  href="sua.php?idLT=<?=$show2->id ?>">Sửa</a>
        <a href="xoa.php?idLT=<?=$show2->id ?>" onclick="return confirm_delete()" >Xóa</a>
        </td>
      </tr>
          <?php } ?>
    </tbody>

  </table>
  </div>
            
          </div>
        </div>
      </section>
      <!-- het phan body-->
      







      <!-- phần footer -->
<?php include_once 'teamplate/footer.php'; ?>