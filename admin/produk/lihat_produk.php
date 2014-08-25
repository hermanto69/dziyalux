<?php
$data = mysql_query("SELECT p.*, g.GAMBAR 
	FROM produk AS p 
		INNER JOIN gallery AS g ON p.ID_PRODUK = g.ID_GALLERY
	WHERE p.ID_PRODUK = '$_GET[id]'") or die(mysql_error());
$no = 1;
while($tampil = mysql_fetch_array($data)){
?>
<style>
table {
	border:#666 1px solid;}
</style>
<H2>Lihat Produk</H2>
  <table width="441" border="1" align="center">
    <tr>
      <td width="89">Nama Produk</td>
      <td width="3">:</td>
      <td width="333"><?php echo $tampil['JUDUL'];?></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td><img src="../images/gallery/<?php echo $tampil['GAMBAR'];?>" width="200" height="150"/></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>:</td>
      <td><?php echo $tampil['KETERANGAN'];?></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><?php echo $tampil['HARGA'];?></td>
    </tr>
    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><a href="?pg=produk/data_produk" class="klik">Kembali</a></td>
    </tr>
  </table>
<?php
}
?>