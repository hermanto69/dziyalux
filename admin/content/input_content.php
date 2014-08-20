<?php include 'content/input_post_content.php'; ?>

<h2>Input Content</h2>
<form action="" method="post" enctype="multipart/form-data" name="form1">
	<table width="441" border="0" align="center">
		<tr>
			<td width="61">Nama</td>
			<td width="3">:</td>
			<td width="363">
				<input type="text" name="nama" id="nama" class="required" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
				<?php echo isset($e_nama) ? '<span class="error">'.$e_nama.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
		  <td>Gambar</td>
		  <td>:</td>
		  <td><input type="file" name="gambar" id="gambar"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>
				<input type="text" name="tanggal" id="tanggal" class="required" value="<?php echo isset($_POST['tanggal']) ? $_POST['tanggal'] : ''; ?>">
				<?php echo isset($e_tanggal) ? '<span class="error">'.$e_tanggal.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td>
				<textarea name="isi" id="isi" cols="50" rows="5" class="required"><?php echo isset($_POST['isi']) ? $_POST['isi'] : ''; ?></textarea>
				<?php echo isset($e_isi) ? '<span class="error">'.$e_isi.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
		  <td height="33">&nbsp;</td>
		  <td>&nbsp;</td>
		  <td><input type="submit" name="button" class="klik" value="Simpan">
		  <a href="?pg=content/data_content" class="klik">Kembali</a></td>
		</tr>
	</table>
</form>