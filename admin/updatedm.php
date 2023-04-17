
<div class="title">
<h2>Cập nhật danh mục</h2>
<?php 
	//var_dump($singlekq);
?>
<form action="index.php?act=updatedm" method="post">
	<input type="text" name="tendm" id="" value="<?=$singlekq[0]['tendm'] ?>">
	<input type="hidden" name="id" value="<?=$singlekq[0]['id']?>">
	<input type="submit" name="capnhat" value="Cập nhật">
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