<?php
	function getall_tk()
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_user");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}
	
	function deltk($id)
	{
		$conn = db();
		$sql="DELETE FROM tbl_user WHERE id=".$id;
		$conn->exec($sql);
	}
	
	function getonetk($id)
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id=".$id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}
	
	function getcreated($id)
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT ngay_tao FROM tbl_user WHERE id=".$id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}
	
	function updatetk($id, $name, $address, $email, $user, $pass, $role, $edit)
	{
		$conn = db();
		$sql="UPDATE tbl_user SET name='".$name."', address='".$address."', email='".$email."', user='".$user."', pass='".$pass."', role='".$role."', ngay_chinh_sua='".$edit."' WHERE id=".$id;
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
	//---------------------------------fix database, delete later (seem like failed)
	// function updatetkdate($id, $name, $address, $email, $user, $pass, $role, $edit, $date)
	// {
	// 	$conn = db();
	// 	$sql="UPDATE tbl_user SET name='".$name."', address='".$address."', email='".$email."', user='".$user."', pass='".$pass."', role='".$role."', ngay_chinh_sua='".$edit."', ngay_tao='".$date."' WHERE id=".$id;
	// 	$stmt = $conn->prepare($sql);
	// 	$stmt->execute();
	// }
	
	function themtk($name, $address, $email, $user, $pass, $role, $date, $edit)
	{
		$conn = db();
		$sql = "INSERT INTO tbl_user (name, address, email, user, pass, role, ngay_tao, ngay_chinh_sua) VALUES (:name, :address, :email, :user, :pass, :role, :date, :edit)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":name", $name);
		$stmt->bindValue(":address", $address);
		$stmt->bindValue(":email", $email);
		$stmt->bindValue(":user", $user);
		$stmt->bindValue(":pass", $pass);
		$stmt->bindValue(":role", $role);
		$stmt->bindValue(":date", $date);
		$stmt->bindValue(":edit", $edit);
		$stmt->execute();
	}
?>