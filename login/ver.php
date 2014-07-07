<?php

include"../setting/koneksi.php";

$uname 	= mysql_real_escape_string(trim($_POST['username']));
$pass 	= md5(mysql_real_escape_string(trim($_POST['password'])));


if($uname == ""){
?>
	<script type="text/javascript">
		alert('maaf username masih kosong, Harap diisi');
		document.location = '../login/index.php';
    </script>
		<?php
        }else if($pass == ""){
        ?>
			<script type="text/javascript">
				alert('maaf password minimal 3 digit, Harap diisi');
				document.location = '../login/index.php';
            </script>
				<?php
                }else{
					
						$sql 	= mysql_query("select * from account where USERNAME = '$uname' and PASSWORD = '$pass'");
						$cek 	= mysql_num_rows($sql);
						$dsql	= mysql_fetch_array($sql);
						
						if($cek == 1){
							session_start();
							$_SESSION['id']				= session_id();
							$_SESSION['my_user']		= $dsql['USERNAME'];
							                    ?>
						<script type="text/javascript">
							alert('selamat datang <?php echo $_SESSION['my_user'];?>');
							document.location = '../admin/index.php';
                        </script>
<?php 
}else{
?>
<script type="text/javascript">
							alert('maaf username dan password anda salah');
							document.location = '../login/index.php';
                        </script>
         <?php }
				}?>