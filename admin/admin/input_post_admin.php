<?php
include 'admin/function.php';
if ($_POST)
{
	$error = false;
	if ($_POST['username'] == '')
	{
		$error = true;
		$e_username = 'Username harus diisi.';
	}
	elseif (check_username($_POST['username'], true))
	{
		$error 	= true;
		$e_username	= 'Username sudah terpakai.';
	}
	if ($_POST['nama'] == '')
	{
		$error 	= true;
		$e_nama	= 'Nama harus diisi.';
	}
	if ($_POST['email'] == '')
	{
		$error 	= true;
		$e_email= 'Email harus diisi.';
	}	
	elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$error 		= true;
		$e_email	= 'Format email salah.';
	}
	elseif (check_email($_POST['email'], true))
	{	
		$error 		= true;
		$e_email	= 'Email sudah terpakai.';
	}
	if ($_POST['pass'] == '')
	{
		$error 	= true;
		$e_pass	= 'Password harus diisi.';
	}
	if (!$error)
	{
		$pass 	= md5($_POST['pass']);
		$simpan = mysql_query("INSERT INTO account (USERNAME, NAMA, EMAIL, PASSWORD)
		VALUES ('$_POST[username]', '$_POST[nama]', '$_POST[email]', '$pass')");	

		if($simpan)
		{
		?>
			<script type="text/javascript">
			alert('Data Berhasil Disimpan');
			document.location='?pg=admin/data_admin';
			</script>
		<?php
		}
		else
		{
		?>
			<script type="text/javascript">
			alert('Data Gagal Disimpan');
			document.location='?pg=admin/data_admin';
			</script>
		<?php
		}
	}
}