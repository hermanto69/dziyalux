<?php
include '../setting/koneksi.php';

	$ubah = mysql_query("UPDATE kontak SET 
	NAMA = '$_POST[nama]', 
	EMAIL= '$_POST[email]', 
	TANGGAL = '$_POST[tanggal]',
	NO_HP = '$_POST[no_hp]',
	PESAN = '$_POST[pesan]' WHERE ID_KONTAK = '$_GET[id]'
	");

if($ubah){
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
    document.location='?pg=kontak/data_kontak';
</script>
<?php
}else{
	?>
	<script type="text/javascript">
    alert('Data Gagal Diubah');
    document.location='?pg=kontak/data_kontak';
    </script>
    <?php
}
?>