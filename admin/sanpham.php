<?php
		$_SERVER['SCRIPT_NAME']="sanpham.php";
		
?>

<div class="title" align="center">
<h2>Sản phẩm</h2>
<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
<div class="table-responsive">
	<table class="mx-auto w-auto" width="500" border="0">
		<tr class="text">
			<td>Danh mục: </td>
			<td><select name="iddm" style="width:53%">
				<?php
					if(isset($dm)&&(count($dm)>0))
					{
						foreach($dm as $d)
						{
							echo '<option value="'.$d['id'].'">'.$d['tendm'].'</option>';
						}
					}
				?></select>
			</td>
		</tr>
		<tr>
			<td>Tên sản phẩm: </td>
			<td><input type="text" name="tensp" ></td>
		</tr>
		<tr>
			<td>Đơn giá: </td>
			<td><input type="number" name="dongia" ></td>
		</tr>
		<tr>
			<td>Giá khuyến mãi: </td>
			<td><input type="number" name="giakm" ></td>
		</tr>
		<tr>
			<td>Bảo hành: </td>
			<td><input type="text" name="bh" ></td>
		</tr>
		<tr>
			<td>Đơn vị tính: </td>
			<td><input type="text" name="dvt" ></td>
		</tr>
		<tr>
			<td>Khuyến mãi: </td>
			<td><input type="text" name="km" ></td>
		</tr>
		<tr>
			<td>Quà tặng: </td>
			<td><input type="text" name="qua" ></td>
		</tr>
		<tr>
			<td>Sẵn hàng: </td>
			<td><input type="number" name="stock" ></td>
		</tr>
		<tr>
			<td>Tình trạng: </td>
			<td><input type="text" name="stat" ></td>
		</tr>
		<tr>
			<td>Số lượng hình ảnh: </td>
			<td><input type="number" name="imgnum" ></td>
		</tr>
		<tr>
			<td>Hình ảnh: </td>
			<td><input type="file" name="img" ></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center; padding:10px"><input type="submit" name="themmoi" value="Thêm mới"></td>	
		</tr>
	</table>
</div>
</form>
</div>
<br>
<!-- <p>Vai trò 0: Khách hàng | Vai trò 1: Admin</p> -->
<table id="tb">
	<tr>
		<th>STT</th>
		<th>ID</th>
		<th>ID danh mục</th>
		<th>Tên sản phẩm</th>
		<th>Đơn giá</th>
		<th>Giá khuyến mãi</th>
		<th>Bảo hành</th>
		<th>Đơn vị tính</th>
		<th>Khuyến mãi</th>
		<th>Quà tặng</th>
		<th>Sẵn hàng</th>
		<th>Tình trạng</th>
		<th>SL ảnh</th>
		<th>Hình ảnh</th>
		<th>Ngày chỉnh sửa</th>
		<th>Hành động</th>
	</tr>
	<?php 
		//var_dump($kq);
		
		if(isset($kq)&&(count($kq)>0))
		{
			$i =1;
			foreach($kq as $sp)
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$sp['id'].'</td>
						<td>'.$sp['iddm'].'</td>
						<td>'.$sp['tensp'].'</td>
						<td>'.$sp['don_gia'].'</td>
						<td>'.$sp['gia_khuyen_mai'].'</td>
						<td>'.$sp['bao_hanh'].'</td>
						<td>'.$sp['dvt'].'</td>
						<td>'.$sp['khuyen_mai'].'</td>
						<td>'.$sp['qua_tang'].'</td>
						<td>'.$sp['kho'].'</td>
						<td>'.$sp['tinh_trang'].'</td>
						<td>'.$sp['soluong_img'].'</td>
						<td>'.$sp['img'].'</td>
						<td>'.$sp['ngay_edit'].'</td>
						<td>
							<a class="btn btn-info" href="index.php?act=updatesp&id='.$sp['id'].'">Sửa</a>  
							<a class="btn btn-danger" href="index.php?act=delsp&id='.$sp['id'].'">Xóa</a> 
							<a class="btn btn-success" href="index.php?act=addttsp&id='.$sp['id'].'">Thêm thông tin</a>
						</td>
					 </tr>';
					 $i++;
			}
		}
	?>
	
</table>