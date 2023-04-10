
<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/util.css">


</head>
<body>
	<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ADMIN INDEX</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Trang chủ</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">daadda</a></li>
          <li><a href="#">dadadad</a></li>
          <li><a href="#">dadadada</a></li>
        </ul>
      </li> -->
	  <li <?php if($_SERVER['SCRIPT_NAME']=="danhmuc.php") { ?>  class="active"   <?php   }  ?>><a href="index.php?act=danhmuc">Danh mục</a></li>
    <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
	  <li <?php if($_SERVER['SCRIPT_NAME']=="taikhoan.php") { ?>  class="active"   <?php   }  ?>><a href="index.php?act=taikhoan">Tài khoản</a></li>
	  <li><a href="index.php?act=donhang">Đơn hàng</a></li>
    <li><a href="index.php?act=hoadon">Hóa đơn</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
			<?php 
				if(isset($_SESSION['user']))
				{echo $_SESSION['user'];}
			?>
		</a></li>
      <li><a href="index.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
    </ul>
  </div>
</nav>
	
