<?php
include '../setting/koneksi.php';
$file = $_FILES['gambar']['name'];

if(empty($file)){
	$ubah = mysql_query("UPDATE slide_show SET 
	JUDUL = '$_POST[judul]', 
	LINK = '$_POST[link]' WHERE ID_SLIDE = '$_GET[id]'
	");
}else{
	$ubah = mysql_query("UPDATE slide_show SET 
	JUDUL = '$_POST[judul]', 
	GAMBAR = '$file', 
	LINK = '$_POST[link]' WHERE ID_SLIDE = '$_GET[id]'
	");
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/slide/'.$file);
}

if($ubah){
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
    document.location='?pg=slide/data_slide';
</script>
<?php
}else{
	?>
	<script type="text/javascript">
    alert('Data Gagal Diubah');
    document.location='?pg=slide/data_slide';
    </script>
    <?php
}
?>