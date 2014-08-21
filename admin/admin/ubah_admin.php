<?php include 'admin/ubah_post_admin.php'; ?>
<h2>Ubah Admin</h2>
<form action="" method="post" enctype="multipart/form-data" name="form1">
	<table width="441" border="1" align="center">
	   <?php
	  $data = mysql_query("select * from account where ID_ACCOUNT = '$_GET[id]'");
	  $tampil = mysql_fetch_array($data);
	  ?>
		<tr>
			<td width="314">Nama</td>
			<td width="8">:</td>
			<td width="97">
				<input type="text" name="user" id="user" value="<?php echo $tampil['USERNAME'];?>">
				<input type="hidden" name="id" value="<?php echo $tampil['ID_ACCOUNT'];?>"><br/>
				<?php echo isset($e_username) ? '<span class="error">'.$e_username.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" id="pass" value="<?php echo $tampil['NAMA'];?>" /><br/>
				<?php echo isset($e_nama) ? '<span class="error">'.$e_nama.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="text" name="email" id="pass" value="<?php echo $tampil['EMAIL'];?>" /><br/>
				<?php echo isset($e_email) ? '<span class="error">'.$e_email.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Password <br/>*kosongkan jika password tidak diubah</td>
			<td>:</td>
			<td>
				<input type="password" name="pass_baru" value="" />
				<input type="password" name="pass_baru2" value="" /><br/>
				<?php echo isset($e_pass) ? '<span class="error">'.$e_pass.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
		  <td height="42">&nbsp;</td>
		  <td>&nbsp;</td>
		  <td><input type="submit" name="button" class="klik" value="Simpan"></td>
		</tr>
	</table>
</form>
