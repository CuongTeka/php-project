<?php
  $tab="none";
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5.0.2 -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/css/bs-darkmode.min.css" rel="stylesheet">  
	<script src="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/js/bs-darkmode.jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/css/bs-darkmode.min.css" rel="stylesheet">  
	<script src="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/js/bs-darkmode.ecmas.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/util.css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<SCRIPT language="javascript">
    $(document).ready(function(){
      $("#foot #selectall").click(function(){
        $("#tb input[type='checkbox']").prop('checked',this.checked);
      });
    });
</SCRIPT>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Hide the additional photo uploads
    var $additionals = $("#iddm");
    $additionals.hide();
    // Show more photo uploaders when we click 
    $("#change").on("click", function() {
        $additionals.show();
    });
});
</script>

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
	  <li <?php if($tab =="danhmuc.php") { ?>  class="active"   <?php   }  ?>><a href="index.php?act=danhmuc">Danh mục</a></li>
    <li <?php if($tab =="loaisp.php") { ?>  class="active"   <?php   }  ?>><a href="index.php?act=loaisp">Loại sản phẩm</a></li>
    <li <?php if($tab =="sanpham.php") { ?>  class="active"   <?php   }  ?>><a href="index.php?act=sanpham">Sản phẩm</a></li>
	  <li <?php if($tab =="taikhoan.php") { ?>  class="active"   <?php   }  ?>><a href="index.php?act=taikhoan">Tài khoản</a></li>
	  <li><a href="index.php?act=donhang">Đơn hàng</a></li>
    <li><a href="index.php?act=hoadon">Hóa đơn</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a class="btn btn-primary" data-plugin="bsdarkmode"></a></li> -->
      <li><a href="index.php?act=web"><span class="glyphicon glyphicon-home"></span> Trang chính</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
			<?php 
				if(isset($_SESSION['user']))
				{echo $_SESSION['user'];}
			?>
		</a></li>
      <li><a href="index.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
      <!-- <li><a>?php echo $_SERVER['SCRIPT_NAME']; ?></a></li> -->
    </ul>
  </div>
</nav>
	
