<?php
include '../setting/koneksi.php';
$file = $_FILES['gambar']['name'];
$simpan = mysql_query("INSERT INTO slide_show (
JUDUL,
GAMBAR,
LINK
)
VALUES (
'$_POST[judul]',  '$file',  '$_POST[link]'
)");	
$move=move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/slide/'.$file);
if($simpan){
?>
	<script type="text/javascript">
    alert('Data Berhasil Disimpan');
    document.location='?pg=slide/data_slide';
    </script>
<?php
}else{
?>
	<script type="text/javascript">
    alert('Data Gagal Disimpan');
    document.location='?pg=slide/data_slide';
    </script>
<?php
}
?>