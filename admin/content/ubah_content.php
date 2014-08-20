<?php include 'content/ubah_post_content.php'; ?>
<h2>Ubah Content</h2>
<form action="" method="post" enctype="multipart/form-data" name="form1">
	<table width="441" border="1" align="center">
		<?php
		$data = mysql_query("select * from content where ID_CONTENT = '$_GET[id]'");
		$tampil = mysql_fetch_array($data);
		?>
		<tr>
			<td width="314">Nama</td>
			<td width="8">:</td>
			<td width="97">
				<input type="text" name="nama" id="nama" value="<?php echo $tampil['NAMA_CONTENT'];?>" class="required">
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<?php echo isset($e_nama) ? '<span class="error">'.$e_nama.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td>
			<?php if ($tampil['GAMBAR']!=='') : ?>
			<img src="../images/content/<?php echo $tampil['GAMBAR'];?>" width="100" height="100" /><br>
			<?php endif; ?>
			<input type="file" name="gambar" id="gambar"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>
				<input type="text" name="tanggal" id="tanggal" value="<?php echo $tampil['TANGGAL'];?>" class="required">
				<?php echo isset($e_tanggal) ? '<span class="error">'.$e_tanggal.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td>
				<textarea name="isi" id="isi" cols="45" rows="5" class="required"><?php echo $tampil['ISI_CONTENT'];?></textarea>
				<?php echo isset($e_isi) ? '<span class="error">'.$e_isi.'</span>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td height="34">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="button" class="klik" value="Simpan"></td>
		</tr>
	</table>
</form>