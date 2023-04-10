<?php

	session_start();
	ob_start();
	include "../util/db.php";
	include "../admin/danhmucf.php";
	include "../admin/taikhoanf.php";
	include "../admin/sanphamf.php";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if(isset($_SESSION['role'])&&($_SESSION['role']==1))
	{

		include "header.php";
		
		if(isset($_GET['act']))
		{
			switch ($_GET['act'])
			{
				case 'danhmuc':
					
					$kq = getall_dm();
					include "danhmuc.php";
					break;
				//-----------------------------------THEM DANH MUC
				case 'adddm':
					
					if(isset($_POST['themmoi'])&&($_POST['themmoi']))
					{
						$tendm=$_POST['tendm'];
						themdm($tendm);
					}
					//-----
					$kq = getall_dm();
					include "danhmuc.php";
					break;
				//-----------------------------------XOA DANH MUC
				case 'deldm':
					
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						deldm($id);
					}
					$kq = getall_dm();
					include "danhmuc.php";
					break;	
				//-----------------------------------UPDATE DANH MUC
				case 'updatedm':
					
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						$singlekq = getonedm($id);
						//-----
						$kq = getall_dm();
						include "updatedm.php";
					}
					if(isset($_POST['id'])){
						$id=$_POST['id'];
						$tendm=$_POST['tendm'];
						updatedm($id, $tendm);
						//-----
						$kq = getall_dm();
						include "danhmuc.php";
					}
					break;	
				//------------------------------------SẢN PHẨM-----------------
				case 'sanpham':
					$dm = getall_dm();
					$kq = getall_sp();
					include "sanpham.php";
					break;
				//------------------------------------THÊM SẢN PHẨM
				case 'addsp':
					if(isset($_POST['themmoi'])&&($_POST['themmoi']))
					{
						
						$iddm=$_POST['iddm'];
						$tensp=$_POST['tensp'];
						$dongia=$_POST['dongia'];
						$giakm=$_POST['giakm'];
						$bh=$_POST['bh'];
						$dvt=$_POST['dvt'];
						$km=$_POST['km'];
						$qua=$_POST['qua'];
						$stock=$_POST['stock'];
						$stat=$_POST['stat'];
						$imgnum=$_POST['imgnum'];
						//$img=$_POST['img']; hình ảnh lấy bằng lệnh ở line 95
						$dateedit = new DateTime();
						$dateedit = $dateedit->format('Y-m-d H:i:s');

						$target_dir = "../hinhanh/uploads/";
						$target_file = $target_dir . basename($_FILES["img"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
						$img = pathinfo($_FILES['img']['name'], PATHINFO_FILENAME);
						move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

						themsp($iddm, $tensp, $dongia, $giakm, $bh, $dvt, $km, $qua, $stock, $stat, $imgnum, $img, $dateedit);
					}
					//-----
					
					$kq = getall_sp();
					include "sanpham.php";
					break;
				//------------------------------------XÓA SẢN PHẨM
				case 'sanpham':
					include "sanpham.php";
					break;
				//------------------------------------UPDATE SẢN PHẨM
				case 'sanpham':
					include "sanpham.php";
					break;
				//------------------------------------TÀI KHOẢN---------------
				case 'taikhoan':
					$kq = getall_tk();
					include "taikhoan.php";
					break;
				//------------------------------------XÓA TÀI KHOẢN
				case 'deltk':
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						deltk($id);
					}
					$kq = getall_tk();
					include "taikhoan.php";
					break;
				//------------------------------------UPDATE TÀI KHOẢN
				case 'updatetk':
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						$singlekq = getonetk($id);
						//------------------------------------------------dùng để sửa database
						
						
						//------------------------------------------------
						$kq = getall_tk();
						include "updatetk.php";
					}
					if(isset($_POST['id'])){
						$id=$_POST['id'];
						$tentk=$_POST['tentk'];
						$address=$_POST['address'];
						$email=$_POST['email'];
						$user=$_POST['user'];
						$pass=$_POST['pass'];
						$role=$_POST['role'];
						$dateedit = new DateTime();
						$dateedit = $dateedit->format('Y-m-d H:i:s');
						updatetk($id, $tentk, $address, $email, $user, $pass, $role, $dateedit);
						//updatetkdate($id, $tentk, $address, $email, $user, $pass, $role, $dateedit, $ngaytao);
						//-----
						$kq = getall_tk();
						include "taikhoan.php";
					}
					break;
				//------------------------------------THÊM TÀI KHOẢN
				case 'addtk':
					if(isset($_POST['themmoi'])&&($_POST['themmoi']))
					{
						$tentk=$_POST['tentk'];
						$address=$_POST['address'];
						$email=$_POST['email'];
						$user=$_POST['user'];
						$pass=$_POST['pass'];
						$role=$_POST['role'];
						$date = new DateTime();
						$date = $date->format('Y-m-d H:i:s');
						$dateedit = new DateTime();
						$dateedit = $dateedit->format('Y-m-d H:i:s');
						themtk($tentk, $address, $email, $user, $pass, $role, $date, $dateedit);
					}
					//-----
					$kq = getall_tk();
					include "taikhoan.php";
					break;
				case 'donhang':
					include "donhang.php";
					break;
				case 'logout':
					if(isset($_SESSION['role']))
						{
							unset($_SESSION['role']);
							unset($_SESSION['user']);
						}
					header('location: ../login.php');

				default:
					include "home.php";
					break;
			}
		}
		else
		{
			include "home.php";
		}
		
		include "footer.php";
	}else{
		header('location: ../login.php');
	}
?>

	
