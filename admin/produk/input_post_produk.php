<?php
if ($_POST)
{
	$error = false;
	if ($_POST['judul'] == '')
	{
		$error = true;
		$e_judul = 'Nama produk harus diisi.';
	}
	if ($_FILES['gambar']['name'] == '')
	{
		$error = true;
		$e_gambar = 'Gambar produk harus diisi.';
	}
	if ($_POST['ket'] == '')
	{
		$error = true;
		$e_ket = 'Keterangan produk harus diisi.';
	}
	if ($_POST['harga'] == '')
	{
		$error = true;
		$e_harga = 'Harga produk harus diisi.';
	}
	elseif (!is_int($_POST['harga']))
	{
		$error 		= true;
		$e_harga 	= 'Format harga dalam angka.';
	}
	if (!$error)
	{
		$file 		= $_FILES['gambar']['name'];
		$simpan 	= mysql_query("INSERT INTO produk (JUDUL, KETERANGAN, HARGA )
		VALUES ('$_POST[judul]', '$_POST[ket]', '$_POST[harga]')") or die(mysql_error());	
		$id_produk 	= mysql_insert_id();
		$simpan 	= mysql_query("INSERT INTO gallery (ID_PRODUK, GAMBAR) VALUES ('$id_produk', '$file')") or die(mysql_error());	
		$move		= move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/gallery/'.$file);
		if($simpan)
		{
		?>
			<script type="text/javascript">
			alert('Data Berhasil Disimpan');
			document.location='?pg=produk/data_produk';
			</script>
		<?php
		}else{
		?>
			<script type="text/javascript">
			alert('Data Gagal Disimpan');
			document.location='?pg=produk/data_produk';
			</script>
		<?php
		}
	}
}