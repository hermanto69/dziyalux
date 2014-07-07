<?php
include '../setting/koneksi.php';

$pass = md5($_POST['pass']);
$simpan = mysql_query("INSERT INTO account (
USERNAME,
PASSWORD
)
VALUES (
'$_POST[username]',  '$pass'
)");	

if($simpan){
?>
	<script type="text/javascript">
    alert('Data Berhasil Disimpan');
    document.location='?pg=admin/data_admin';
    </script>
<?php
}else{
?>
	<script type="text/javascript">
    alert('Data Gagal Disimpan');
    document.location='?pg=admin/data_admin';
    </script>
<?php
}
?>