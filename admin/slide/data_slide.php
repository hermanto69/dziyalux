<h2>Data Slide</h2>
<a href="?pg=slide/input_slide" class="klik">Tambah Slide</a><br /><br />
<table width="650" border="1">
  <tr id="jtabel">
    <td width="45">No.</td>
    <td width="90">Nama</td>
    <td width="150">Gambar</td>
    <td width="145">Link</td>
    <td width="198">Aksi</td>
  </tr>
  <?php
  $data = mysql_query("select * from slide_show");
  $no = 1;
  while($tampil = mysql_fetch_array($data)){
	  
  ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $tampil['JUDUL'];?></td>
    <td><img src="../images/slide/<?php echo $tampil['GAMBAR'];?>" width="150" height="100" /></td>
    <td><?php echo $tampil['LINK'];?></td>
    <td><a href="?pg=slide/lihat_slide&id=<?php echo $tampil['ID_SLIDE'];?>" class="klik">Lihat</a> <a href="?pg=slide/ubah_slide&id=<?php echo $tampil['ID_SLIDE'];?>" class="klik">Ubah</a> <a href="?pg=slide/hapus_slide&id=<?php echo $tampil['ID_SLIDE'];?>" class="klik" onclick="return confirm('Data Akan Dihapus?')">Hapus</a></td>
  </tr>
<?php } ?>
</table>
