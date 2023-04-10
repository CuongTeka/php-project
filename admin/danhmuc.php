

<div class="title">
<h2>Danh mục</h2>
<form action="index.php?act=adddm" method="post">
	<input type="text" name="tendm" id="">
	<input type="submit" name="themmoi" value="Thêm mới">
</form>
</div>
<br>
<table id="tb">
	<tr>
		<th>STT</th>
		<th>Tên danh mục</th>
		<th>Ưu tiên</th>
		<th>Hiển thị</th>
		<th>Hành động</th>
	</tr>
	<?php 
		//var_dump($kq);
		
		if(isset($kq)&&(count($kq)>0))
		{
			$i =1;
			foreach($kq as $dm)
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$dm['tendm'].'</td>
						<td>'.$dm['uutien'].'</td>
						<td>'.$dm['hienthi'].'</td>
						<td><a class="btn btn-info" href="index.php?act=updatedm&id='.$dm['id'].'">Sửa</a>  <a class="btn btn-danger" href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a></td>
					 </tr>';
					 $i++;
			}
		}
	?>
	
</table>