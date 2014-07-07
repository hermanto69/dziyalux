<?php
	if(isset($_GET['pg'])){
		  include 'setting/koneksi.php';
		  $data = mysql_query("select * from content where ID_CONTENT = '$_GET[id]'");
		  $menu = mysql_fetch_array($data);
?>
<div id="c-judul">
<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>
<?php echo $menu['NAMA_CONTENT'];?>
</div>
<div id="line"></div>
<div id="c-isi">
<?php if($menu['GAMBAR']== ''){ echo "";}else{?>
<div id="c-gambar"><img src="images/content/<?php echo $menu['GAMBAR'];?>" width="450" height="250" /></div>
<?php } ?>
<?php echo $menu['ISI_CONTENT'];?>
</div>


<?php
	}elseif(isset($_GET['kontak'])){
?>
<div id="c-judul">
<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Contact
</div>
<div id="line"></div>
<div id="c-isi">
<iframe width="990" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jl.+Manis+IV,+Tangerang,+Banten,+Indonesia&hl=en&sll=37.0625,-95.677068&sspn=41.95363,86.572266&oq=jl.manis+iv+&hnear=Jalan+Manis+IV,+Jatiuwung,+Kota+Tangerang,+Banten+15136,+Republic+of+Indonesia&t=m&z=17"></iframe>


  <form action="include/input_kontak_post.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="492" border="0">
    <tr>
      <td colspan="2">CONTACT FORM</td>
    </tr>
    <tr>
      <td width="240">Nama</td>
      <td width="240">Email</td>
    </tr>
    <tr>
      <td><input name="nama" type="text" id="nama" size="40" class="required" /></td>
      <td><input name="email" type="text" id="email" size="40" class="required email" /></td>
    </tr>
    <tr>
      <td>No. HP</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="no_hp" type="text" id="no_hp" class="required" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Pesan</td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="pesan" id="pesan" cols="78" rows="5" class="required"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="kirim" /></td>
    </tr>
  </table>
  </form>
</div>
<?php }elseif(isset($_GET['gall'])){
?>

<div id="c-judul">
<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Gallery
</div>
<div id="line"></div>
<div id="c-isi">

<?php
	$data = mysql_query("select * from gallery");
	while($gall = mysql_fetch_array($data)){	
?>

<div id="gall-utama">

    <div id="gall"><a href="images/gallery/<?php echo $gall['GAMBAR'];?>" rel="prettyPhoto[gallery2]" title="<?php echo $gall['KETERANGAN'];?>">
    	<img src="images/gallery/<?php echo $gall['GAMBAR'];?>" width="220" height="165"/></a>
        <div id="gall-judul"><?php echo $gall['JUDUL'];?></div>
        <div id="gall-isi"><?php echo $gall['KETERANGAN'];?></div>
    </div>
</div>
  <?php } ?>

</div>

<?php
}
?>