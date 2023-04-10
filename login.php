	<?php	
		session_start();
		//ob_start();
		include "util/db.php";
		include "util/user.php";
		db();
		
		if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			//$kq=getuserinfo($user, $pass);
			//$role=$kq[0]['role'];
			$role=checkuser($user, $pass);
			$_SESSION['role']=$role;
			if($role==1)
			{
				//$_SESSION['role']=$role;
				$username=getusername($user, $pass);
				$_SESSION['user'] = $username;
				header('location: admin/index.php');
			}
			elseif($role==0)
			{
				//$_SESSION['role']=$role;
				//$_SESSION['userid']=$kq[0]['id'];
				$username=getusername($user, $pass);
				$_SESSION['user'] = $username;
				$kq = getuserinfo($user, $pass);
                $_SESSION['name'] = $kq[0]['name'];
                $_SESSION['username'] = $kq[0]['user'];
                $_SESSION['email'] = $kq[0]['email'];
                $_SESSION['diachi'] = $kq[0]['address'];
				
				if($_SESSION['user']==0)
				{
					$txt_err = "Username hoặc password sai";
				}
				else
				{
				//$_SESSION['username']=$kq[0]['user'];
				//$_SESSION['email']=$kq[0]['email'];
				//$_SESSION['diachi']=$kq[0]['address'];
				header('location: Alpha_Store.php');}
			}
			//elseif($role==2)
			//{
			//	header('location: indexnv.php');
			//}
			else 
			{
				$txt_err = "Tên đăng nhập hoặc mật khẩu sai";
				//header('location: Alpha_Store.php');
			}
		}
		
		if(!empty($_POST["remember"])) 
		{
			setcookie ("username",$_POST["user"],time()+ 3600);
			setcookie ("password",$_POST["pass"],time()+ 3600);
			//echo "Cookies Set Successfuly";
		} else {
			setcookie("username","");
			setcookie("password","");
			//echo "Cookies Not Set";
		}
		
	?>

<!doctype html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập - Alpha Store - chuỗi cửa hàng bán thiết bị điện tử hàng đầu Đông Lào</title>
	<link rel="shortcut icon" href="logo/alpha.ico" type="image/x-icon">
	<link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">



    
    <!-- Custom -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">



<main class="form-signin w-100 m-auto">
	<?php
		if(isset($_REQUEST['msg'])){
			echo "<p class='alert alert-warning'>".$_REQUEST['msg']."</p>";
		}
		
	?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <img class="mb-4" src="logo/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal"><b>ĐĂNG NHẬP</b></h1>
	
    <div class="form-floating">
      <input type="text" class="form-control" name="user" placeholder="tên đăng nhập" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>
      <label for="floatingInput">Tên đăng nhập</label>
    </div>	<br>
    <div class="form-floating">
      <input type="text" class="form-control" name="pass" placeholder="Mật khẩu" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
      <label for="floatingPassword">Mật khẩu</label>
    </div> <br>

    <div class="checkbox mb-3">
		<?php
			if(isset($txt_err)&&($txt_err != ""))
			{
				echo "<font color='red'>".$txt_err."</font><br>";
			}
		?>
		<br>
      <label>
        <input type="checkbox" name="remember"> nhớ tôi
      </label>
	  <a href="#" style="padding-left:100px" onclick="forgot()">Quên mật khẩu ?</a>
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="dangnhap" value="ĐĂNG NHẬP">
	<br><br>
	<span>Chưa có tài khoản ? </span><a href="register.php">đăng ký tài khoản</a>
    <p class="mt-5 mb-3 text-muted">ALPHA INDUSTRIES &copy; 2017–<?php echo date("Y");?></p>
  </form>
</main>

<script>

function forgot(){
	var message = new Notification("RandomString");
	message.onclick(alert("Hãy liên lạc với chúng tôi thông qua Email: CSKH@ALPHASTORE.COM để được hỗ trợ"))}

</script>
    
  </body>
</html>
