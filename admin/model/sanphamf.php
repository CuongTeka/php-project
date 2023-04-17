<?php
	function getall_sp()
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}

	
	function delsp($id)
	{
		$conn = db();
		$sql="DELETE FROM tbl_sanpham WHERE id=".$id;
		$conn->exec($sql);
	}
	
	function getonesp($id)
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}

	function getidsp($id)
	{
		$conn = db();
		$stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		if(count($kq)>0) return $kq[0]['id'];
		else return 0;
	}
	
	function updatesp($id, $dm, $tensp, $dongia, $giakm, $bh, $dvt, $km, $qua, $stock, $stat, $imgnum, $img, $date)
	{
		$conn = db();
		$sql="UPDATE tbl_sanpham SET iddm='".$dm."', tensp='".$tensp."', don_gia='".$dongia."', gia_khuyen_mai='".$giakm."', bao_hanh='".$bh."', dvt='".$dvt."', khuyen_mai='".$km."', qua_tang='".$qua."', kho='".$stock."', tinh_trang='".$stat."', soluong_img='".$imgnum."', img='".$img."', ngay_edit='".$date."' WHERE id=".$id;
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
	
	function themsp($iddm, $tensp, $dongia, $giakm, $bh, $dvt, $km, $qua, $stock, $stat, $imgnum, $img, $date)
	{
		$conn = db();
		$sql = "INSERT INTO tbl_sanpham (iddm, tensp, don_gia, gia_khuyen_mai, bao_hanh, dvt, khuyen_mai, qua_tang, kho, tinh_trang, soluong_img, img, ngay_edit) VALUES (:iddm, :tensp, :dongia, :giakm, :bh, :dvt, :km, :qua, :kho, :stat, :sl, :img, :date)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":iddm", $iddm);
		$stmt->bindValue(":tensp", $tensp);
		$stmt->bindValue(":dongia", $dongia);
		$stmt->bindValue(":giakm", $giakm);
		$stmt->bindValue(":bh", $bh);
		$stmt->bindValue(":dvt", $dvt);
		$stmt->bindValue(":km", $km);
		$stmt->bindValue(":qua", $qua);
		$stmt->bindValue(":kho", $stock);
		$stmt->bindValue(":stat", $stat);
		$stmt->bindValue(":sl", $imgnum);
		$stmt->bindValue(":img", $img);
		$stmt->bindValue(":date", $date);
		$stmt->execute();
	}
	
?>