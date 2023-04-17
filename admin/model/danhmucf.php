<?php
	function getall_dm()
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}
	
	function deldm($id)
	{
		$conn = db();
		$sql="DELETE FROM tbl_danhmuc WHERE id=".$id;
		$conn->exec($sql);
	}
	
	function getonedm($id)
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}
	
	function updatedm($id, $tendm)
	{
		$conn = db();
		$sql="UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
	
	function themdm($tendm)
	{
		$conn = db();
		$sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('".$tendm."')";
		$conn->exec($sql);
	}
	
?>