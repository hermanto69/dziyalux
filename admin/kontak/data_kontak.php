<h2>Data Kontak</h2>
<table width="650" border="1">
	<tr id="jtabel">
		<td>No.</td>
		<td>Nama</td>
		<td>Email</td>
		<td>No. Hp</td>
		<td>Pesan</td>
		<td>Tanggal</td>
		<td>Aksi</td>
	</tr>
	<?php
	$data 	= mysql_query("select * from kontak");
	$no 	= 1;
	while($tampil = mysql_fetch_array($data))
	{
	  $view = substr($tampil['PESAN'],0,50);
	?>
	<tr>
		<td height="40"><?php echo $no++;?></td>
		<td><?php echo $tampil['NAMA'];?></td>
		<td><?php echo $tampil['EMAIL'];?></td>
		<td><?php echo $tampil['NO_HP'];?></td>
		<td><?php echo $view;?></td>
		<td><?php echo $tampil['TANGGAL'];?></td>
		<td><a href="?pg=kontak/lihat_kontak&id=<?php echo $tampil['ID_KONTAK'];?>" class="klik">Lihat</a> <a href="?pg=kontak/ubah_kontak&id=<?php echo $tampil['ID_KONTAK'];?>" class="klik">Ubah</a> <a href="?pg=kontak/hapus_kontak&id=<?php echo $tampil['ID_KONTAK'];?>" class="klik" onclick="return confirm('Data Akan Dihapus?')">Hapus</a></td>
	</tr>
<?php } ?>
</table>