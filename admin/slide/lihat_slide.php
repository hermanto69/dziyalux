  <?php
  include '../setting/koneksi.php';
  $data = mysql_query("select * from slide_show where ID_SLIDE = '$_GET[id]';");
  $no = 1;
  while($tampil = mysql_fetch_array($data)){
  ?>
  
<style>
table {
	border:#666 1px solid;}
</style>
  <table width="441" border="1" align="center">
    <tr>
      <td width="89">Nama</td>
      <td width="3">:</td>
      <td width="333"><?php echo $tampil['JUDUL'];?></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td><img src="../images/slide/<?php echo $tampil['GAMBAR'];?>" width="400" height="150"/></td>
    </tr>
    <tr>
      <td>Link</td>
      <td>:</td>
      <td><?php echo $tampil['LINK'];?></td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><a href="?pg=slide/data_slide" class="klik">Kembali</a></td>
    </tr>
    <? } ?>
  </table>
