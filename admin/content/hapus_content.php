<?php
include"../setting/koneksi.php";
$gambar	= mysql_query("SELECT * FROM content WHERE ID_CONTENT = '$_GET[id]'");
$file = mysql_fetch_array($gambar);
$hapus = unlink('../images/content/'.$file['GAMBAR']);
$hapus = mysql_query("DELETE FROM content WHERE ID_CONTENT = '$_GET[id]'")or die(mysql_error());
if($hapus){
?>
	<script type="text/javascript">
    alert('Data Berhasil Dihapus');
    document.location='?pg=content/data_content';
    </script>
	<?php
    }else{
    ?>
	<script type="text/javascript">
    alert('Data Gagal Dihapus');
    document.location='?pg=content/data_content';
    </script>
<?php
}
?>