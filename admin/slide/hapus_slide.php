<?php
include"../setting/koneksi.php";
$gambar	= mysql_query("SELECT * FROM slide_show WHERE ID_SLIDE = '$_GET[id]'");
$file = mysql_fetch_array($gambar);
$hapus = unlink('../images/slide/'.$file['GAMBAR']);
$hapus = mysql_query("DELETE FROM slide_show WHERE ID_SLIDE = '$_GET[id]'")or die(mysql_error());
if($hapus){
?>
	<script type="text/javascript">
    alert('Data Berhasil Dihapus');
    document.location='?pg=slide/data_slide';
    </script>
	<?php
    }else{
    ?>
	<script type="text/javascript">
    alert('Data Gagal Dihapus');
    document.location='?pg=slide/data_slide';
    </script>
<?php
}
?>