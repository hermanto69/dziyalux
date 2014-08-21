<?php include 'admin/input_post_admin.php'; ?>
<h2>Input Admin</h2>
<form action="" method="post" enctype="multipart/form-data" name="form1">
	<table width="441" border="1" align="center">
		<tr>
			<td width="314">Username</td>
			<td width="8">:</td>
			<td width="97">
				<input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" size="40" class="required"><br/>
				<?php echo isset($e_username) ? '<span class="error">'.$e_username.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" id="pass" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" class="required" /><br/>
				<?php echo isset($e_nama) ? '<span class="error">'.$e_nama.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="text" name="email" id="pass" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" class="required" /><br/>
				<?php echo isset($e_email) ? '<span class="error">'.$e_email.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input name="pass" type="password" id="pass" size="40" class="required" />
				<?php echo isset($e_pass) ? '<span class="error">'.$e_pass.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td height="35">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="button" class="klik" value="Simpan">
			<a href="?pg=admin/data_admin" class="klik">Kembali</a></td>
		</tr>
	</table>
</form>
