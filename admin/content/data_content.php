 <a href="?pg=content/input_content" class="klik">Tambah Content</a><br /><br />
<table width="688" border="1">
 
  <tr id="jtabel">
    <td width="35">No.</td>
    <td width="54">Nama</td>
    <td width="182">Gambar</td>
    <td width="100">Tanggal</td>
    <td width="67">Isi</td>
    <td width="80">Status</td>
    <td width="140">Aksi</td>
  </tr>
  
  
  <?php
  include '../setting/koneksi.php';
  $data = mysql_query("select * from content");
  $no = 1;
  while($tampil = mysql_fetch_array($data)){
	  $view = substr($tampil['ISI_CONTENT'],0,55);
  ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $tampil['NAMA_CONTENT'];?></td>
    <td>
    <?php if($tampil['GAMBAR']==''){echo "";}else{
		?>
    <img src="../images/content/<?php echo $tampil['GAMBAR'];?>" width="150" height="100" />
    <?php } ?>
    </td>
    <td><?php echo $tampil['TANGGAL'];?></td>
    <td><?php echo $view;?></td>
    <td><?php echo $tampil['IS_AKTIF'];?></td>
    <td><a href="?pg=content/lihat_content&id=<?php echo $tampil['ID_CONTENT'];?>" class="klik">Lihat</a>
    <?php if($tampil['IS_AKTIF']== 1){
		echo 
    	"<a href=?pg=content/non_aktif&id=$tampil[ID_CONTENT] class=klik onclick=return confirm(Data Akan Di Nonaktifkan??)>Nonaktif</a>";
	}else{
		echo
		"<a href=?pg=content/aktif&id=$tampil[ID_CONTENT] class=klik onclick=return confirm(Data Akan Di Aktifkan??)>Aktif</a>";
	}
	?>
    <br />
    <a href="?pg=content/hapus_content&id=<?php echo $tampil['ID_CONTENT'];?>" class="klik" onclick="return confirm('Data Akan Dihapus??')">Hapus</a><a href="?pg=content/ubah_content&id=<?php echo $tampil['ID_CONTENT'];?>" class="klik">Ubah</a></td>
  </tr>
<?php } ?>
</table>
