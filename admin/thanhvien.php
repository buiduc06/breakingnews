<?php include_once 'teamplate/header.php'; ?>

<?php 
// phần check xóa dữ liệu
if (isset($_GET['notification'])) {
  $check=$_GET['notification'];
  $checkdelete=User::where(['id',"$check"]);
  if ($checkdelete!=True) {
    echo '<div class="alert alert-success">
  <strong>Success!</strong> Xóa Thành Viên Thành Công
</div>
';
  } else {
    echo "<script>alert('Xóa Không Thành Công Xin !( Vui Lòng Kiểm Tra Lại Cấu Trúc Của bảng dữ liệu ! Có Thể Dữ Liệu Đang Được Liên Kết Với 1 Bảng khác trong database ) ')</script>";
  }
  
} else {
    
}


  $ShowThanhVien=User::all();

 ?>


      <!-- phần body -->

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            

                 <div class="table-responsive"> 
            <h2>THÀNH VIÊN</h2>         
<table class="table table-striped" >
    <thead>
      <tr>
        <th>#</th>
        <th>avatar</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Số sản phẩm</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($ShowThanhVien as $show2) {

      $getsoSp=TinTuc::sqlbullder(["SELECT COUNT(*) AS sobai FROM tintuc WHERE create_by=$show2->id"]);//lay ra so sp
            ?>
      <tr>
        <td><?=$show2->id ?></td>
        <td><img src="../image/user/<?=$show2->avatar ?>" style="width:80px;height: 70px "></td>
        <td><?=$show2->name ?></td>
        <td><?=$show2->email ?></td>
        <td><?= 
        $gender = ($show2->gender==1) ? $show2->gender="nam" : $show2->gender="Nữ" ; ?></td>
        <td><?php foreach ($getsoSp as $getsoSp) { echo $getsoSp->sobai;  } ?></td>
        <td>
        <a href="xoa.php?idTV=<?=$show2->id ?>" onclick="return confirm_delete()" >Xóa</a>
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