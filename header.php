<?php 
	session_start();
    include "util/db.php";
    include "util/user.php";
	//if(isset($_SESSION['role'])&&($_SESSION['role']==0))
	//{
		
	//}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
	<link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap 5.0.2 -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
	

	<!-- dark mode -->
	<link href="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/css/bs-darkmode.min.css" rel="stylesheet">  
	<script src="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/js/bs-darkmode.jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/css/bs-darkmode.min.css" rel="stylesheet">  
	<script src="https://cdn.jsdelivr.net/npm/bs-darkmode@2.0.0/js/bs-darkmode.ecmas.min.js"></script>
	<!-- jQuery 1.8 or later, 33 KB -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Fotorama from CDNJS, 19 KB -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

	<link rel="stylesheet" href="../Data/css/nav.css">
	<link rel="stylesheet" href="../Data/css/carousel.css">
	<link rel="stylesheet" href="../Data/css/util.css">
	<title>Alpha Store - chuỗi cửa hàng bán thiết bị điện tử hàng đầu Đông Lào</title>
	<link rel="shortcut icon" href="logo/alpha.ico" type="image/x-icon">
    
		
</head>
<body class="bg-light">
							
							
							
							
							
							<!--     =============== navigation bar =================          -->
							
							
							
							
<header>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="Alpha_Store.php"><img src="logo/logo1.png" class="logo"></a>
          <form class="d-flex mt-0 mt-lg-0" role="search" action="Alpha_Shop.php?act=search" method="post">
            <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm...">
            <button class="btn btn-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
	<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
	</svg></button>
          </form>
		  <!-- <button class="btn btn-primary" data-plugin="bsdarkmode"></button> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-white bg-dark" tabindex="-1" id="offcanvasNavbarDark">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel" style="color:orange"><img src="logo/logo.png" class="logo">ALPHA STORE</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" href="Alpha_Store.html">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
		<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
		</svg> Trang chủ</a>
            </li>
 			<li class="nav-item dropdown"> <!-- CPU -->
			<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
	<path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
	</svg> CPU - Bộ vi xử lý</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Intel Core i9</a></li>
					<li><a class="dropdown-item" href="#">Intel Core i7</a></li>
					<li><a class="dropdown-item" href="#">Intel Core i5</a></li>
					<li><a class="dropdown-item" href="#">Intel Core i3</a></li>
					<li><a class="dropdown-item" href="#">Intel Celeron - Pentium</a></li>
					<li><a class="dropdown-item" href="#">Intel Xeon</a></li>
					<li><a class="dropdown-item" href="#">AMD Ryzen 9</a></li>
					<li><a class="dropdown-item" href="#">AMD Ryzen 7</a></li>
					<li><a class="dropdown-item" href="#">AMD Ryzen 5</a></li>
					<li><a class="dropdown-item" href="#">AMD Ryzen 3</a></li>
					<li><a class="dropdown-item" href="#">AMD Threadripper</a></li>
				<li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Xem tất cả</a></li>
				</ul>
            </li> 
			<li class="nav-item dropdown"> <!-- Mainboard -->
			<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-motherboard" viewBox="0 0 16 16">
	<path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6Zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6ZM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0V3Zm0 1h3v3H5V4Zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2Z"/>
	<path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2H1Zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v11Z"/>
	</svg> Mainboard - Bo mạch chủ</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Intel Z790</a></li>
					<li><a class="dropdown-item" href="#">Intel Z690</a></li>
					<li><a class="dropdown-item" href="#">Intel B760</a></li>
					<li><a class="dropdown-item" href="#">Intel B660</a></li>
					<li><a class="dropdown-item" href="#">Intel H610</a></li>
					<li><a class="dropdown-item" href="#">Intel H510</a></li>
					<li><a class="dropdown-item" href="#">Intel X299X</a></li>
					<li><a class="dropdown-item" href="#">AMD X670</a></li>
					<li><a class="dropdown-item" href="#">AMD X570</a></li>
					<li><a class="dropdown-item" href="#">AMD B650</a></li>
					<li><a class="dropdown-item" href="#">AMD B550</a></li>
					<li><a class="dropdown-item" href="#">AMD A320</a></li>
					<li><a class="dropdown-item" href="#">AMD TRX40</a></li>
				<li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Xem tất cả</a></li>
				</ul>
            </li>
			<li class="nav-item dropdown"> <!-- VGA -->
			<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gpu-card" viewBox="0 0 16 16">
	<path d="M4 8a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm7.5-1.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"/>
	<path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .5.5V4h13.5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5H2v2.5a.5.5 0 0 1-1 0V2H.5a.5.5 0 0 1-.5-.5Zm5.5 4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM9 8a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/>
	<path d="M3 12.5h3.5v1a.5.5 0 0 1-.5.5H3.5a.5.5 0 0 1-.5-.5v-1Zm4 1v-1h4v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5Z"/>
	</svg> GPU - Card đồ họa</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">RTX 4090</a></li>
					<li><a class="dropdown-item" href="#">RTX 4080</a></li>
					<li><a class="dropdown-item" href="#">RTX 4070ti</a></li>
					<li><a class="dropdown-item" href="#">RTX 3090ti</a></li>
					<li><a class="dropdown-item" href="#">RTX 3090</a></li>
					<li><a class="dropdown-item" href="#">RTX 3080ti</a></li>
					<li><a class="dropdown-item" href="#">RTX 3080</a></li>
					<li><a class="dropdown-item" href="#">RTX 3070ti</a></li>
					<li><a class="dropdown-item" href="#">RTX 3070</a></li>
					<li><a class="dropdown-item" href="#">RTX 3060ti</a></li>
					<li><a class="dropdown-item" href="#">RTX 3060</a></li>
					<li><a class="dropdown-item" href="#">RTX 2060</a></li>
					<li><a class="dropdown-item" href="#">GTX 1660</a></li>
					<li><a class="dropdown-item" href="#">GTX 1650 - 1650 Super 4GB</a></li>
					<li><a class="dropdown-item" href="#">GTX 1050ti</a></li>
					<li><a class="dropdown-item" href="#">GT 730 - GT 1030</a></li>
					<li><a class="dropdown-item" href="#">Nvidia Quadro </a></li>
					<li><a class="dropdown-item" href="#">Intel Arc A380</a></li>
					<li><a class="dropdown-item" href="#">AMD Radeon RX</a></li>
				<li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Xem tất cả</a></li>
				</ul>
            </li>			
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-keyboard" viewBox="0 0 16 16">
	<path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2z"/>
	<path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-.5zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75v-.5zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75v-.5zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75v-.5zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75v-.5zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75v-.5zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25v-.5z"/>
	</svg> Phụ kiện</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Microphone</a></li>
					<li><a class="dropdown-item" href="#">Webcam</a></li>
					<li><a class="dropdown-item" href="#">Led trang trí</a></li>
					<li><a class="dropdown-item" href="#">Balo & túi xách</a></li>
					<li><a class="dropdown-item" href="#">Đế tản nhiệt</a></li>
					<li><a class="dropdown-item" href="#">Tay cầm, vô lăng</a></li>
					<li><a class="dropdown-item" href="#">Cổng chuyển USB</a></li>
					<li><a class="dropdown-item" href="#">Dây cáp HDMI, DP, LAN</a></li>
				<li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Xem tất cả</a></li>
				</ul>
            </li>
          </ul>
		  <?php
			
				if(isset($_SESSION['user']))
				{
					echo '<a href="Alpha_Store.php?act=profile" class="btn btn-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
						  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg> '.$_SESSION['user'].'</a>';
					echo '<a href="Alpha_Store.php?act=logout" class="btn btn-outline-primary" style="margin-left:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
						  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
						</svg> Đăng xuất</a>';
					if(isset($_SESSION['role'])&&$_SESSION['role']==1)
					{
						echo '<a href="Alpha_Store.php?act=gotoindex" class="btn btn-success" style="margin-left:10px">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-gear" viewBox="0 0 16 16">
							<path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
							<path d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
						</svg> Index</a>';
					}
				}
				else{
					echo '
					<button class="btn btn-primary" onclick="log()" type="button">Đăng nhập</button>
					<button class="btn btn-outline-primary" onclick="reg()" type="button">Đăng ký</button>';
				}
			?>
        </div>
      </div>
    </div>
  </nav>
</header>