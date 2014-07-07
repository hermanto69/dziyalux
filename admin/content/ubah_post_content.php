<?php
include '../setting/koneksi.php';

$file = $_FILES['gambar']['name'];

if(empty($file)){
	$ubah = mysql_query("UPDATE content SET 
	NAMA_CONTENT = '$_POST[nama]',
	TANGGAL = '$_POST[tanggal]',
	ISI_CONTENT = '$_POST[isi]' WHERE ID_CONTENT = '$_GET[id]'
	");
}else{
	$ubah = mysql_query("UPDATE content SET 
	NAMA_CONTENT = '$_POST[nama]', 
	GAMBAR = '$file', 
	TANGGAL = '$_POST[tanggal]',
	ISI_CONTENT = '$_POST[isi]' WHERE ID_CONTENT = '$_GET[id]'
	");
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/content/'.$file);
}
if($ubah){
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
    document.location='?pg=content/data_content';
</script>
<?php
}else{
	?>
	<script type="text/javascript">
    alert('Data Gagal Diubah');
    document.location='?pg=content/data_content';
    </script>
    <?php
}
?>