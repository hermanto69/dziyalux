<?php
if ($_POST)
{
	$error = false;
	if ($_POST['nama'] == '')
	{
		$error 	= true;
		$e_nama	= 'Nama harus diisi.';
	}
	if ($_POST['isi'] == '')
	{
		$error 	= true;
		$e_isi	= 'Isi harus diisi.';
	}
	if ($_POST['tanggal'] == '')
	{
		$error 	= true;
		$e_tanggal	= 'Tanggal harus diisi.';
	}
	
	if (!$error)
	{

		$gambar = $_FILES['gambar']['name'];
		$aktif 	= '1';
		$simpan = mysql_query("INSERT INTO content(
		NAMA_CONTENT, ISI_CONTENT, GAMBAR, IS_AKTIF, TANGGAL
		)
		VALUES (
		'$_POST[nama]','$_POST[isi]','$gambar','$aktif','$_POST[tanggal]')")or die (mysql_error());
		$move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/content/'.$gambar);	

		if($simpan){
		?>
			<script type="text/javascript">
			alert('Data Berhasil Disimpan');
			document.location='?pg=content/data_content';
			</script>
		<?php
		}else{
		?>
			<script type="text/javascript">
			alert('Data Gagal Disimpan');
			document.location='?pg=content/data_content';
			</script>
		<?php
		}
	}
}