<h2>Ubah Slide</h2>
<form action="?pg=slide/ubah_post_slide&id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data" name="form1">
  <table width="441" border="1" align="center">
   <?php
  $data = mysql_query("select * from slide_show where ID_SLIDE = '$_GET[id]'");
  $tampil = mysql_fetch_array($data);
  ?>
    <tr>
      <td colspan="3">Ubah Kontak</td>
    </tr>
    <tr>
      <td width="314">Judul</td>
      <td width="8">:</td>
      <td width="97"><input type="text" name="judul" id="judul" value="<?php echo $tampil['JUDUL'];?>"></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td>
      <img src="../images/slide/<?php echo $tampil['GAMBAR'];?>" width="150" height="100" /><br />
      <input type="file" name="gambar" id="gambar" /></td>
    </tr>
    <tr>
      <td>Link</td>
      <td>:</td>
      <td><input type="text" name="link" id="link" value="<?php echo $tampil['LINK'];?>"></td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" class="klik" value="Simpan"></td>
    </tr>
  </table>
</form>
