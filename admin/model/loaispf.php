<?php

function getall_lsp()
{
    $conn = db();
    $stmt = $conn->prepare("SELECT * FROM tbl_loaisp");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}


function dellsp($id)
{
    $conn = db();
    $sql="DELETE FROM tbl_loaisp WHERE id=".$id;
    $conn->exec($sql);
}

function getonelsp($id)
{
    $conn = db();
    $stmt = $conn->prepare("SELECT * FROM tbl_loaisp WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getiddm($id)
{
    $conn = db();
    $stmt = $conn->prepare("SELECT * FROM tbl_loaisp WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['iddm'];
    else return 0;
}
function gettendm($id)
{
    $conn = db();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['tendm'];
    else return 0;
}
function updatelsp($id, $dm, $loaisp, $hienthi)
	{
		$conn = db();
		$sql="UPDATE tbl_loaisp SET iddm='".$dm."', loai_sp='".$loaisp."', hienthi='".$hienthi."' WHERE id=".$id;
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
	
	function themlsp($iddm, $loaisp, $hienthi)
	{
		$conn = db();
		$sql = "INSERT INTO tbl_loaisp (iddm, loai_sp, hienthi) VALUES (:iddm, :loaisp, :hienthi)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":iddm", $iddm);
		$stmt->bindValue(":loaisp", $loaisp);
		$stmt->bindValue(":hienthi", $hienthi);
		$stmt->execute();
	}

?>