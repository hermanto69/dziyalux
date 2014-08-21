<?php
include 'admin/function.php';
if ($_POST)
{
	$error = false;
	if ($_POST['user'] == '')
	{
		$error = true;
		$e_username = 'Username harus diisi.';
	}
	elseif (check_username($_POST['user']))
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
	elseif (check_email($_POST['email']))
	{	
		$error 		= true;
		$e_email	= 'Email sudah terpakai.';
	}
	if ($_POST['pass_baru'] != '' && $_POST['pass_baru2'] == '')
	{
		$error 	= true;
		$e_pass	= 'Masukkan password lagi.';
	}
	elseif ($_POST['pass_baru'] != $_POST['pass_baru2'])
	{
		$error 	= true;
		$e_pass	= 'Password tidak sama.';
	}
	if (!$error)
	{
		$username 	= str_replace(' ', '_', strtolower($_POST['user'])); 
		if ($_POST['pass_baru'] != '')
		{
			$pass = md5($_POST['pass_baru']);
			$ubah = mysql_query("UPDATE account SET 
			USERNAME = '$_POST[user]', 
			NAMA = '$_POST[nama]', 
			EMAIL = '$_POST[email]', 
			PASSWORD= '$pass' WHERE ID_ACCOUNT = '$_POST[id]'
			");
		}
		else
		{
			$ubah = mysql_query("UPDATE account SET 
			USERNAME = '$_POST[user]', 
			NAMA = '$_POST[nama]', 
			EMAIL = '$_POST[email]'
			WHERE ID_ACCOUNT = '$_POST[id]'
			");
		}
		if($ubah)
		{
			$_SESSION['my_user']	= $_POST['user'];
			$_SESSION['my_email'] 	= $_POST['email'];
			$_SESSION['my_nama'] 	= $_POST['nama'];
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
	}
}