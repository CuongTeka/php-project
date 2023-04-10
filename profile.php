<div align="center">
    <h1 style="text-align:center; padding:10px;">TÀI KHOẢN CỦA BẠN</h1>
    <table id="info" width="400">
		<tr>
			<td>Tên người dùng: </td>
			<td><?php echo $_SESSION['name']; ?></td>
		</tr>
		<tr>
			<td>Tên đăng nhập: </td>
			<td><?php echo $_SESSION['user']; ?></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><?php echo $_SESSION['email']; ?></td>
		</tr>
		<tr>
			<td>Địa chỉ: </td>
			<td><?php echo $_SESSION['diachi']; ?></td>
		</tr>
        <tr>
            <td colspan="2" style="text-align:center; padding-top:30px;">
				<a class="btn btn-success" href="profile.php?act=edit">Sửa thông tin</a>
				<a class="btn btn-danger" href="profile.php?act=changepass">Đổi mật khẩu</a>
			</td>
        </tr>
	</table>


	<h2 style="text-align:center; padding-top:150px;">SẢN PHẨM ĐÃ MUA</h2>
	<p>muda muda muda</p><p>muda muda muda</p><p>muda muda muda</p><p>muda muda muda</p><p>muda muda muda</p>
</div>