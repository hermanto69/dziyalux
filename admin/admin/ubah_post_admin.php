<?php
include '../setting/koneksi.php';
$pass = md5($_POST['pass']);
	$ubah = mysql_query("UPDATE account SET 
	USERNAME = '$_POST[user]', 
	PASSWORD= '$pass' WHERE ID_ACCOUNT = '$_GET[id]'
	");

if($ubah){
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
    document.location='?pg=admin/data_admin';
</script>
<?php
}else{
	?>
	<script type="text/javascript">
    alert('Data Gagal Diubah');
    document.location='?pg=admin/data_admin';
    </script>
    <?php
}
?>