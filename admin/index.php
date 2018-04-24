<?php include_once 'teamplate/header.php'; ?>

<?php 
$baiviet =TinTuc::CountRow('*');
$soTheLoai=TheLoai::CountRow('*');
$soLoaiTin=LoaiTin::CountRow('*');
$soUser=User::CountRow('*');
$soComment=Comment::CountRow('*');
$soLuotXem=TinTuc::sqlbullder(["SELECT SUM(SoLuotXem) AS soluotxem FROM tintuc"]);

 ?>


  
      <!-- Counts Section(phần hiển thị tổng số bài thông tin về trang) -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">

            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <?php foreach ($baiviet as $baiviet1 ) {} ?>
                <div class="name"><strong class="text-uppercase">Số Bài Viết</strong><span>All</span>
                  <div class="count-number"><?= $baiviet1->sobai?></div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <?php foreach ($soTheLoai as $soTheLoai1 ) {} ?>
                <div class="name"><strong class="text-uppercase">THỂ LOẠI </strong><span>All</span>
                  <div class="count-number"><?= $soTheLoai1->sobai?></div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <?php foreach ($soLoaiTin as $soLoaiTin1 ) {} ?>
                <div class="name"><strong class="text-uppercase">LOẠI TIN</strong><span>All</span>
                  <div class="count-number"><?= $soLoaiTin1->sobai?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <?php foreach ($soLuotXem as $soLuotXem1 ) {} ?>
                <div class="name"><strong class="text-uppercase">LƯỢT XEM</strong><span>All</span>
                  <div class="count-number"><?= $soLuotXem1->soluotxem?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <?php foreach ($soComment as $soComment1 ) {} ?>
                <div class="name"><strong class="text-uppercase">COMMENT</strong><span>All</span>
                  <div class="count-number"><?= $soComment1->sobai?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list-1"></i></div>
                <?php foreach ($soUser as $soUser1 ) {} ?>
                <div class="name"><strong class="text-uppercase">THÀNH VIÊN</strong><span>All</span>
                  <div class="count-number"><?= $soUser1->sobai?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Header Section-->




      <!-- phần body -->

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      







      <!-- phần footer -->
<?php include_once 'teamplate/footer.php'; ?>