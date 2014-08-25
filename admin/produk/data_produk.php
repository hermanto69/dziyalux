<h2>Data Produk</h2>
<a href="?pg=produk/input_produk" class="klik">Tambah Produk</a>
<br /><br />
<table width="650" border="1">
	<tr id="jtabel">
		<td width="40">No.</td>
		<td width="52">Judul</td>
		<td width="150">Gambar</td>
		<td width="180">Keterangan</td>
		<td width="206">Aksi</td>
	</tr>
	<?php
	$data 	= mysql_query("SELECT p.ID_PRODUK, p.JUDUL, p.KETERANGAN, p.HARGA, g.GAMBAR 
		FROM produk AS p 
			INNER JOIN gallery AS g ON p.ID_PRODUK = g.ID_PRODUK");
	$no 	= 1;
	while($tampil = mysql_fetch_array($data))
	{
		$view = substr($tampil['KETERANGAN'],0,100);
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $tampil['JUDUL'];?></td>
			<td><img src="../images/gallery/<?php echo $tampil['GAMBAR'];?>" width="150" height="100" /></td>
			<td><?php echo $view;?></td>
			<td><a href="?pg=produk/lihat_produk&id=<?php echo $tampil['ID_PRODUK'];?>" class="klik">Lihat</a> <a href="?pg=produk/ubah_produk&id=<?php echo $tampil['ID_PRODUK'];?>" class="klik">Ubah</a> <a href="?pg=produk/hapus_produk&id=<?php echo $tampil['ID_PRODUK'];?>" class="klik" onclick="return confirm('Data Akan Dihapus?')">Hapus</a></td>
		</tr>
		<?php
	} 
	?>
</table>