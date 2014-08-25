<?php
if ($_POST)
{
	$error = false;
	if ($_POST['judul'] == '')
	{
		$error 		= true;
		$e_judul 	= 'Nama produk harus diisi.';
	}
	if ($_POST['ket'] == '')
	{
		$error 	= true;
		$e_ket 	= 'Keterangan produk harus diisi.';
	}
	if ($_POST['harga'] == '')
	{
		$error 		= true;
		$e_harga 	= 'Harga produk harus diisi.';
	}
	elseif (!is_numeric($_POST['harga']))
	{
		$error 		= true;
		$e_harga 	= 'Format harga dalam angka.';
	}
	if (!$error)
	{
		$file = $_FILES['gambar']['name'];

		$ubah = mysql_query("UPDATE produk
		SET JUDUL = '$_POST[judul]', KETERANGAN = '$_POST[ket]', HARGA = '$_POST[harga]'
		WHERE ID_PRODUK = '$_POST[id]'");
		if(!empty($file))
		{
			$ubah = mysql_query("UPDATE gallery
			SET GAMBAR = '$file'
			WHERE ID_PRODUK = '$_POST[id]'") or die(mysql_error());
			$move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/gallery/'.$file);
		}

		if($ubah)
		{
		?>
		<script type="text/javascript">
			alert('Data Berhasil Diubah');
			document.location='?pg=produk/data_produk';
		</script>
		<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('Data Gagal Diubah');
			document.location='?pg=produk/data_produk';
			</script>
			<?php
		}
	}
}