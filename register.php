<?php
	
	session_start();
	include "util/db.php";
	include "util/registerf.php";
	//db();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
	if((isset($_POST['dangky']))&&($_POST['dangky'])){
		
		//echo '<pre>';
		//	print_r($_REQUEST);
		//echo '</pre>';
		
		
		$user=filter_var($_REQUEST['name'],FILTER_SANITIZE_STRING);
		$email=filter_var($_REQUEST['email'],FILTER_SANITIZE_EMAIL);
		$pass=strip_tags($_REQUEST['pass']);
		$repass=strip_tags($_REQUEST['repass']);
		
		if(empty($user)){
			$err[0][]='Vui lòng nhập tên đăng nhập !';
		}
		if(empty($email)){
			$err[1][]='Vui lòng nhập email !';
		}
		if(empty($pass)){
			$err[2][]='Vui lòng nhập mật khẩu !';
		}
		if(empty($repass)){
			$err[3][]='Vui lòng nhập lại mật khẩu !';
		}
		if(strlen($pass)<6){
			$err[2][]='Mật khẩu phải có ít nhất 6 ký tự !';
		}
		if($repass != $pass){
			$err[3][]='Mật khẩu vừa nhập không khớp !';
		}
		
		if(empty($err))
		{
			try
			{
				//$conn = db();
				//$stmt = $conn->prepare("SELECT user,email FROM tbl_user WHERE email= :email AND user= :user");
				//$stmt->execute([':email' => $email]);
				//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				$kq = check($email, $user);
				
				if(isset($kq['user'])==$user || isset($kq['email'])==$email)
				{
					$err[0][]="Tên/Email đã tồn tại, vui lòng chọn tên/email khác !";
				}
				//else if(isset($kq['email'])==$email)
				//{
				//	$err[1][]="Email đã tồn tại, vui lòng chọn email khác !";
				//}
				else{
					//$hashed_password = password_hash($pass, PASSWORD_DEFAULT);	//bảo mật
					$date = new DateTime();
					$date = $date->format('Y-m-d H:i:s');
					
					$ins = ins($email, $user, $pass, $date);
					
				}
			}
			catch(PDOException $e){
				$pdoErr = $e->getMessage();
			}
		}
		
		
	}
	
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký - Alpha Store - chuỗi cửa hàng bán thiết bị điện tử hàng đầu Đông Lào</title>
	<link rel="shortcut icon" href="logo/alpha.ico" type="image/x-icon">

    

    

<link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">

 

    
    <!-- Custom -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    

	
<main class="form-signin w-100 m-auto">
  <form name="register" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <img class="mb-4" src="logo/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal"><b>ĐĂNG KÝ</b></h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="name" placeholder="tên đăng nhập">
      <label for="floatingInput">Tên đăng nhập</label>
		<?php
			if(isset($err[0])){
				foreach($err[0] as $errname){
					echo "<p class='small text-danger'>".$errname."</p>";
				}
			}
		?>
    </div><br>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" placeholder="tên@gmail.com">
      <label for="floatingInput">Email</label>
		<?php
			if(isset($err[1])){
				foreach($err[1] as $erremail){
					echo "<p class='small text-danger'>".$erremail."</p>";
				}
			}
		?>
    </div><br>
    <div class="form-floating">
      <input type="text" class="form-control" name="pass" placeholder="Mật khẩu">
      <label for="floatingPassword">Mật khẩu</label>
	  <?php
			if(isset($err[2])){
				foreach($err[2] as $errpass){
					echo "<p class='small text-danger'>".$errpass."</p>";
				}
			}
		?>
    </div><br>
	<div class="form-floating">
      <input type="text" class="form-control" name="repass" placeholder="Nhập lại mật khẩu">
      <label for="floatingPassword">Nhập lại mật khẩu</label>
	  <?php
			if(isset($err[3])){
				foreach($err[3] as $errrepass){
					echo "<p class='small text-danger'>".$errrepass."</p>";
				}
			}
		?>
    </div><br>
	
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="dangky" value="ĐĂNG KÝ">
	<p><br><span>Đã có tài khoản ? </span><a href="login.php">đăng nhập</a></p>
    <p class="mt-5 mb-3 text-muted">ALPHA INDUSTRIES &copy; 2017–<?php echo date("Y");?></p>
  </form>
</main>


    
  </body>
</html>
