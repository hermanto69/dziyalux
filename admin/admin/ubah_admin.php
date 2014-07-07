<form action="?pg=admin/ubah_post_admin&id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data" name="form1">
  <table width="441" border="1" align="center">
   <?php
  include '../setting/koneksi.php';
  $data = mysql_query("select * from account where ID_ACCOUNT = '$_GET[id]'");
  $tampil = mysql_fetch_array($data);
  ?>
    <tr>
      <td colspan="3">Ubah Admin</td>
    </tr>
    <tr>
      <td width="314">Nama</td>
      <td width="8">:</td>
      <td width="97"><input type="text" name="user" id="user" value="<?php echo $tampil['USERNAME'];?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="text" name="pass" id="pass" value="<?php echo $tampil['PASSWORD'];?>" /></td>
    </tr>
    <tr>
      <td height="42">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" class="klik" value="Simpan"></td>
    </tr>
  </table>
</form>
