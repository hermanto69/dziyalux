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
		$file = $_FILES['gambar']['name'];

		if(empty($file))
		{
			$ubah = mysql_query("UPDATE content SET 
			NAMA_CONTENT = '$_POST[nama]',
			TANGGAL = '$_POST[tanggal]',
			ISI_CONTENT = '$_POST[isi]' WHERE ID_CONTENT = '$_POST[id]'
			");
		}else{
			$ubah = mysql_query("UPDATE content SET 
			NAMA_CONTENT = '$_POST[nama]', 
			GAMBAR = '$file', 
			TANGGAL = '$_POST[tanggal]',
			ISI_CONTENT = '$_POST[isi]' WHERE ID_CONTENT = '$_POST[id]'
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
	}
}