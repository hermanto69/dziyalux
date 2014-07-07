<form action="?pg=content/ubah_post_content&id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data" name="form1">
  <table width="441" border="1" align="center">
   <?php
  include '../setting/koneksi.php';
  $data = mysql_query("select * from content where ID_CONTENT = '$_GET[id]'");
  $tampil = mysql_fetch_array($data);
  ?>
    <tr>
      <td colspan="3">Ubah Content</td>
    </tr>
    <tr>
      <td width="314">Nama</td>
      <td width="8">:</td>
      <td width="97"><input type="text" name="nama" id="nama" value="<?php echo $tampil['NAMA_CONTENT'];?>"></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td>
      <img src="../images/content/<?php echo $tampil['GAMBAR'];?>" width="100" height="100" /><br>
      <input type="file" name="gambar" id="gambar"></td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td>:</td>
      <td><input type="text" name="tanggal" id="tanggal" value="<?php echo $tampil['TANGGAL'];?>"></td>
    </tr>
    <tr>
      <td>Isi</td>
      <td>:</td>
      <td><textarea name="isi" id="isi" cols="45" rows="5"><?php echo $tampil['ISI_CONTENT'];?></textarea></td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" class="klik" value="Simpan"></td>
    </tr>
  </table>
</form>
