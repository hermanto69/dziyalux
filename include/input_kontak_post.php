<?php
include '../setting/koneksi.php';

$simpan = mysql_query("INSERT INTO kontak (
NAMA,
EMAIL,
NO_HP,
PESAN,
TANGGAL
)
VALUES (
'$_POST[nama]',  '$_POST[email]',  '$_POST[no_hp]',  '$_POST[pesan]',  now())");	

if($simpan){
?>
	<script type="text/javascript">
    alert('Data Berhasil Disimpan');
    document.location='../index.php';
    </script>
<?php
}else{
?>
	<script type="text/javascript">
    alert('Data Gagal Disimpan');
    document.location='../index.php';
    </script>
<?php
}
?>