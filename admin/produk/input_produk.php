<?php include 'produk/input_post_produk.php'; ?>
<h2>Input Produk</h2>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="441" border="1" align="center">
    <tr>
		<td width="314">Judul</td>
		<td width="8">:</td>
		<td width="97">
			<input name="judul" type="text" class="required" id="judul" size="40">
			<?php echo isset($e_judul) ? '<p class="error">'.$e_judul.'</p>' : ''; ?>
		</td>
    </tr>
    <tr>
		<td>Keterangan</td>
		<td>:</td>
		<td>
			<textarea name="ket" id="ket" cols="45" rows="5"></textarea>
			<?php echo isset($e_ket) ? '<p class="error">'.$e_ket.'</p>' : ''; ?>
		</td>
    </tr>
    <tr>
		<td>Harga</td>
		<td>:</td>
		<td>
			<input name="harga" type="text" class="required" id="judul" size="40"><span>Masukkan hanya angka, misal 10000</span>
			<?php echo isset($e_harga) ? '<p class="error">'.$e_harga.'</p>' : ''; ?>
		</td>
    </tr>
	<tr>
		<td>Gambar</td>
		<td>:</td>
		<td>
			<input type="file" name="gambar" id="gambar" class="required" />
			<?php echo isset($e_gambar) ? '<p class="error">'.$e_gambar.'</p>' : ''; ?>
		</td>
    </tr>
    <tr>
		<td height="39">&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="button" class="klik" value="Simpan">
		<a href="?pg=produk/data_produk" class="klik">Kembali</a></td>
    </tr>
  </table>
</form>