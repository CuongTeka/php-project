


<?php
		$_SERVER['SCRIPT_NAME']="sanpham.php";
		
?>

<div class="title" align="center">
<h2>Cập nhật sản phẩm</h2>
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
<div class="table-responsive">

	<table class="mx-auto w-auto" width="500" border="0">
		<tr class="text">
			<td>Danh mục: </td>
			<td>
				
			<!-- <select name="iddm" style="width:53%"> -->
				<?php
					if(isset($dm)&&(count($dm)>0))
					{  
						echo '<input type="text" name="iddm" value="'.$idddm.' - '.$ten.'">';
						echo '<a class="btn btn-info" id="change" style="margin-left:10px">đổi danh mục</a>';
						echo '<select name="iddm" id="iddm" style="width:47%">'; ?>
							<?php
							foreach($dm as $d)
							{
								echo '<option value="'.$d['id'].'">'.$d['id'].' - '.$d['tendm'].'</option>';
							}
						}?>
					<?php echo '</select>'; //problem laying here and solved
				?>
				<!-- </select> Chọn lại danh mục -->
				
			</td>
		</tr>
		<tr>
			<td>Tên sản phẩm: </td>
			<td><input type="text" name="tensp" value="<?=$singlekq[0]['tensp'] ?>"></td>
		</tr>
		<tr>
			<td>Đơn giá: </td>
			<td><input type="number" name="dongia" value="<?=$singlekq[0]['don_gia'] ?>"></td>
		</tr>
		<tr>
			<td>Giá khuyến mãi: </td>
			<td><input type="number" name="giakm" value="<?=$singlekq[0]['gia_khuyen_mai'] ?>"></td>
		</tr>
		<tr>
			<td>Bảo hành: </td>
			<td><input type="text" name="bh" value="<?=$singlekq[0]['bao_hanh'] ?>"></td>
		</tr>
		<tr>
			<td>Đơn vị tính: </td>
			<td><input type="text" name="dvt" value="<?=$singlekq[0]['dvt'] ?>"></td>
		</tr>
		<tr>
			<td>Khuyến mãi: </td>
			<td><input type="text" name="km" value="<?=$singlekq[0]['khuyen_mai'] ?>"></td>
		</tr>
		<tr>
			<td>Quà tặng: </td>
			<td><input type="text" name="qua" value="<?=$singlekq[0]['qua_tang'] ?>"></td>
		</tr>
		<tr>
			<td>Sẵn hàng: </td>
			<td><input type="number" name="stock" value="<?=$singlekq[0]['kho'] ?>"></td>
		</tr>
		<tr>
			<td>Tình trạng: </td>
			<td><input type="text" name="stat" value="<?=$singlekq[0]['tinh_trang'] ?>"></td>
		</tr>
		<tr>
			<td>Số lượng hình ảnh: </td>
			<td><input type="number" name="imgnum" value="<?=$singlekq[0]['soluong_img'] ?>"></td>
		</tr>
		<tr>
			<td>Hình ảnh: </td>
			<td><input type="file" name="img" value="<?=$singlekq[0]['img'] ?>"></td>
		</tr>
        <input type="hidden" name="id" value="<?=$singlekq[0]['id']?>">
		<tr>
            <td colspan="2" style="text-align:center; padding:10px"><input type="submit" name="capnhat" value="Cập nhật"></td>
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
							<a class="btn btn-success" style="margin-top:5px" href="index.php?act=addttsp&id='.$sp['id'].'">Thêm</a>
						</td>
					 </tr>';
					 $i++;
			}
		}
	?>
	
</table>