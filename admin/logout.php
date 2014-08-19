<?php
session_start();
	session_unset();
	session_destroy();
include"../setting/koneksi.php";
?>
<script type="text/javascript">
alert('terima kasih');
document.location = '../index.php'
</script>