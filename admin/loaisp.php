<?php

?>

<div class="title" align="center">
<h2>Sản phẩm</h2>
<form action="index.php?act=addloaisp" method="post">
<div class="table-responsive">
	<table class="mx-auto w-auto" width="500" border="0">
		<tr class="text">
			<td>Danh mục: </td>
			<td><select name="iddm" style="width:60%">
				<?php
					if(isset($dm)&&(count($dm)>0))
					{
						foreach($dm as $d)
						{
							echo '<option value="'.$d['id'].'">'.$d['id'].' - '.$d['tendm'].'</option>';
						}
					}
				?></select>
			</td>
		</tr>
		<tr>
			<td>Tên loại sản phẩm: </td>
			<td><input type="text" name="loaisp" ></td>
		</tr>
		<tr>
			<td>Hiển thị: </td>
			<td><input type="number" name="hienthi" value="1"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center; padding:10px"><input type="submit" name="themmoi" value="Thêm mới"></td>	
		</tr>
	</table>
</div>
</form>
</div>
<br>
<p>Hiển thị 0: không hiển thị | Hiển thị 1: Có hiển thị</p>
<table id="tb">
	<tr>
		<th>STT</th>
		<th>ID</th>
		<th>ID danh mục</th>
		<th>Tên loại sản phẩm</th>
        <th>Hiển thị</th>
		<!-- <th>Ngày chỉnh sửa</th> -->
		<th>Hành động</th>
	</tr>
	<?php 
		//var_dump($kq);
		
		if(isset($kq)&&(count($kq)>0))
		{
			$i =1;
			foreach($kq as $lsp)
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$lsp['id'].'</td>
						<td>'.$lsp['iddm'].'</td>
						<td>'.$lsp['loai_sp'].'</td>
						<td>'.$lsp['hienthi'].'</td>
						
						<td>
							<a class="btn btn-info" href="index.php?act=updatelsp&id='.$lsp['id'].'">Sửa</a>  
							<a class="btn btn-danger" href="index.php?act=dellsp&id='.$lsp['id'].'">Xóa</a> 
						</td>
					 </tr>';
					 $i++;
			}
		}
	?>
	
</table>