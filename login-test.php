<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập - Alpha Store - chuỗi cửa hàng bán thiết bị điện tử hàng đầu Đông Lào</title>
	<link rel="shortcut icon" href="logo/alpha.ico" type="image/x-icon">

<link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<!--    
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['name']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['name'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Sai tên đăng nhập hoặc mật khẩu.</h3><br/>
                  <p class='link'>Bấm vào đây để <a href='login.php'>đăng nhập</a> lại.</p>
                  </div>";
        }
    } else {
-->

	<?php
		
		session_start();
		include "db.php";
		include "user.php";
		db();
		
		if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			$role=checkuser($user, $pass);
			$_SESSION['role']=$role;
			if($role==1)
			{
				header('location: index.php');
			}
			else 
			{
				header('location: Alpha_Store.php');
			}
		}
		
	?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    
      <input type="text" class="form-control" name="user" placeholder="tên đăng nhập">
      <label for="floatingInput">Tên đăng nhập</label>
    
    
      <input type="text" class="form-control" name="pass" placeholder="Mật khẩu">
      <label for="floatingPassword">Mật khẩu</label>
    

    
    <button type="submit" name="dangnhap">ĐĂNG NHẬP</button>
	<br><br>
	
    <p class="mt-5 mb-3 text-muted">ALPHA INDUSTRIES &copy; 2017–<?php echo date("Y");?></p>
  </form>



    
  </body>
</html>
