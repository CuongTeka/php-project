
<div class="title" align="center">
<h2>Cập nhật tài khoản</h2>
<?php 
	//var_dump($singlekq);
?>
<form action="index.php?act=updatetk" method="post">
	<div class="table-responsive">
		<table class="mx-auto w-auto" width="300" border="0" >
			<tr>
				<td>Tên người dùng: </td>
				<td><input type="text" name="tentk" value="<?=$singlekq[0]['name'] ?>"></td>
			</tr>
			<tr>
				<td>Địa chỉ: </td>
				<td><input type="text" name="address" value="<?=$singlekq[0]['address'] ?>"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email" value="<?=$singlekq[0]['email'] ?>"></td>
			</tr>
			<tr>
				<td>Tên đăng nhập: </td>
				<td><input type="text" name="user" value="<?=$singlekq[0]['user'] ?>"></td>
			</tr>
			<tr>
				<td>Mật khẩu: </td>
				<td><input type="text" name="pass" value="<?=$singlekq[0]['pass'] ?>"></td>
			</tr>
			<tr>
				<td>Chức vụ: </td>
				<td><input type="text" name="role" value="<?=$singlekq[0]['role'] ?>"></td>
			</tr>
		<!--Ngày tạo: <input type="text" name="date" value=""><br>-->
		<!--Ngày chỉnh sửa: <input type="text" name="dateedit" value=""><br>-->
			<input type="hidden" name="id" value="<?=$singlekq[0]['id']?>">
			<tr>
				<td colspan="2" style="text-align:center; padding:10px"><input type="submit" name="capnhat" value="Cập nhật"></td>
			</tr>
		</table>
	</div>
</form>

</div>
<br>
<table id="tb">
	<tr>
		<th>STT</th>
		<th>ID</th>
		<th>Tên tài khoản</th>
		<th>Địa chỉ</th>
		<th>Email</th>
		<th>Tên đăng nhập</th>
		<th>Mật khẩu</th>
		<th>Chức vụ</th>
		<th>Ngày tạo</th>
		<th>Ngày chỉnh sửa</th>
		<th>Hành động</th>
	</tr>
	<?php 
		//var_dump($kq);
		
		if(isset($kq)&&(count($kq)>0))
		{
			$i =1;
			foreach($kq as $tk)
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$tk['id'].'</td>
						<td>'.$tk['name'].'</td>
						<td>'.$tk['address'].'</td>
						<td>'.$tk['email'].'</td>
						<td>'.$tk['user'].'</td>
						<td>'.$tk['pass'].'</td>
						<td>'.$tk['role'].'</td>
						<td>'.$tk['ngay_tao'].'</td>
						<td>'.$tk['ngay_chinh_sua'].'</td>
						<td><a class="btn btn-info" href="index.php?act=updatetk&id='.$tk['id'].'">Sửa</a>  <a class="btn btn-danger" href="index.php?act=deltk&id='.$tk['id'].'">Xóa</a></td>
					 </tr>';
					 $i++;
			}
		}
	?>
	
</table>