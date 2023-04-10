<?php
	
	function check($email, $user)
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT user,email FROM tbl_user WHERE email= :email AND user= :user");
		$stmt->execute([':email' => $email, ':user' => $user]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if(isset($result)) return $result;
		else return 0;
	}
	
	function ins($email, $user, $pass, $date)
	{
		$conn = db();
		$stmt = $conn->prepare("INSERT INTO tbl_user (email, user, pass, ngay_tao) VALUES (:email, :user, :pass, :date)");
		
		if(
			$stmt->execute(
					[
						':email' => $email,
						':user' => $user,
						':pass' => $pass,
						':date' => $date
					]	
				)
		)
		{
			header('location: login.php?msg='.urlencode('Đăng nhập để tiếp tục !'));
		}
	}

?>