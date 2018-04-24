<?php 
include_once('../Models/TheLoai.php');
include_once('../Models/LoaiTin.php');
include_once('../Models/TinTuc.php');
include_once('../Models/Slide.php');
include_once('../Models/User.php');
include_once('../Models/comment.php');
include_once('../Models/Video.php');
include_once('../Models/QuangCao.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="css/googlefont.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
    <script src="css/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="css/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
       <script type="text/javascript">
  //doan script yeu cau xac minh khi delete - ducdeveloper
    function confirm_delete() {
    if (confirm("bạn có chắc chắn muốn xóa?")) {
        return true;
    } else {
        return false;
    }
}
  </script>
<!-- script menu show -->
          <script>
$(document).ready(function(){
    $(".btn2").click(function(){
        $("#sgh").slideToggle();
    });
     $(".btn1").click(function(){
        $("#thanhvien").slideToggle();
    });
      $(".btn3").click(function(){
        $("#baiviet").slideToggle();
    });
});
</script>

  </head>


  <body>
    <!-- Side Navbar phần menu bên trái-->
     <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">ducdevloper</h2><span class="text-uppercase">Web Developer</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle"></strong></a></div>
        </div>


        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i><span>Home</span></a></li>
             <li> <a class="btn3" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>BÀI VIẾT</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="baiviet" class="collapse list-unstyled">
                <li> <a href="baiviet.php">Tất Cả</a></li>
                <li> <a href="thembai.php">Thêm</a></li>
              </ul>
            </li>

            <li> <a class="btn2"  data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>DANH MỤC</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="sgh" class="collapse list-unstyled">
                <li> <a href="danhmuc.php">Tất Cả</a></li>
                <li> <a href="thembai.php">Thêm</a></li>
              </ul>
            </li>


<li> <a class="btn1" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Thành Viên</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="thanhvien" class="collapse list-unstyled">
                <li> <a href="thanhvien.php">Tất Cả</a></li>
                <li> <a href="thembai.php">Thêm</a></li>
              </ul>
            </li>

            
          </ul>
        </div>
      </div>
    </nav>


    <div class="page home-page">

      <!-- navbar (menu trên cùng)--> 
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><!-- <span>Bootstrap </span> --><strong class="text-primary">BẢNG ĐIỀU KHIỂN</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i>

                  <span class="badge badge-warning">1</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>

                  </ul>
                </li>
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">1</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">

                    
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>

                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>


                  </ul>
                </li>

                <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>

              </ul>

            </div>
          </div>
        </nav>
      </header>