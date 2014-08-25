<?php include 'produk/ubah_post_produk.php'; ?>
<h2>Ubah Produk</h2>
<form action="" method="post" enctype="multipart/form-data" name="form1">
	<table width="441" border="1" align="center">
		<?php
		$data = mysql_query("SELECT p.JUDUL, p.KETERANGAN, p.HARGA, g.GAMBAR 
			FROM produk AS p 
				INNER JOIN gallery AS g ON p.ID_PRODUK = g.ID_PRODUK
			WHERE p.ID_PRODUK = '$_GET[id]'");
		$tampil = mysql_fetch_array($data);
		?>
		<tr>
			<td width="314" valign="top">Judul</td>
			<td width="8">:</td>
			<td width="97">
				<input type="text" name="judul" id="judul" value="<?php echo $tampil['JUDUL'];?>">
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<?php echo isset($e_judul) ? '<p class="error">'.$e_judul.'</p>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td valign="top">Gambar</td>
			<td>:</td>
			<td>
				<img src="../images/gallery/<?php echo $tampil['GAMBAR'];?>" width="150" height="100" /><br />
				<input type="file" name="gambar" id="gambar" />
				<?php echo isset($e_gambar) ? '<p class="error">'.$e_gambar.'</p>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td valign="top">Keterangan</td>
			<td>:</td>
			<td>
				<textarea name="ket" id="ket" cols="45" rows="5"><?php echo $tampil['KETERANGAN'];?></textarea>
				<?php echo isset($e_ket) ? '<p class="error">'.$e_ket.'</p>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>
				<input name="harga" type="text" class="required" id="judul" size="40" value="<?php echo $tampil['HARGA']; ?>"><span>Masukkan hanya angka, misal 10000</span>
				<?php echo isset($e_harga) ? '<p class="error">'.$e_harga.'</p>' : ''; ?>
			</td>
		</tr>
		<tr>
			<td height="41">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="button" class="klik" value="Simpan"></td>
		</tr>
	</table>
</form>