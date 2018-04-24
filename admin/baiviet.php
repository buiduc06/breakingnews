<?php include_once 'teamplate/header.php'; ?>

<?php 
// phần check xóa dữ liệu
if (isset($_GET['notification'])) {
  $check=$_GET['notification'];
  $checkdelete=TinTuc::where(['id',"$check"]);
  if ($checkdelete!=True) {
    echo '<div class="alert alert-success">
  <strong>Success!</strong> Xóa Bài Viết Thành Công
</div>
';
  } else {
    echo "<script>alert('Xóa Không Thành Công Xin !( Vui Lòng Kiểm Tra Lại Cấu Trúc Của bảng dữ liệu ! Có Thể Dữ Liệu Đang Được Liên Kết Với 1 Bảng khác trong database ) ')</script>";
  }
  
}elseif (isset($_GET['success'])) {
  $success=$_GET['success'];
   echo "<div class='alert alert-success'>
  <strong>$success Success!</strong>
</div>
";
}

 else {
    
}

  $Showbaiviet=Tintuc::all();

 ?>


      <!-- phần body -->

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <div class="table-responsive"> 
            <h2>TẤT CẢ BÀI VIẾT</h2>         
  <table class="table" >
    <thead>
      <tr>
        <th>#</th>
        <th>Tiêu Đề</th>
        <th>Hình</th>
        <th>Tóm Tắt</th>
        <th>Loai Tin</th>
        <th>Tác giả</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
     <?php foreach ($Showbaiviet as $Showbaiviet1) {
            ?>
    <tbody>
      <tr>
        <td><?=$Showbaiviet1->id ?></td>
        <td><?=$Showbaiviet1->TieuDe ?></td>
         <td><img src="../image/tintuc/<?=$Showbaiviet1->Hinh ?>" class="img-rounded" alt="Cinque Terre" width="204px" height="136px" ></td>
        <td><?=$Showbaiviet1->TomTat ?></td>
        <td><?=$Showbaiviet1->GetLoaiTin2()->Ten ?></td>
        <td><?=$Showbaiviet1->getTacGia()->name ?></td>
        <td>
        <a href="sua.php?idBV=<?=$Showbaiviet1->id ?>">Sửa</a>
        <a href="xoa.php?idBV=<?=$Showbaiviet1->id ?>" onclick="return confirm_delete()" >Xóa</a>
        </td>
      </tr>
    </tbody>

    <?php } ?>
  </table>
  </div>
            
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      







      <!-- phần footer -->
<?php include_once 'teamplate/footer.php'; ?>