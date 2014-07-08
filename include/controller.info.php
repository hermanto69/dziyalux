<?php
	$data = mysql_query("select * from content where ID_CONTENT = '$_GET[id]'");
	$menu = mysql_fetch_array($data);
	?>
	<div id="c-judul">
		<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>
		<?php echo $menu['NAMA_CONTENT'];?>
	</div>
	<div id="line"></div>
	<div id="c-isi">
		<?php if($menu['GAMBAR']== ''){ echo "";}else{?>
		<div id="c-gambar"><img src="images/content/<?php echo $menu['GAMBAR'];?>" width="450" height="250" /></div>
		<?php } ?>
		<?php echo $menu['ISI_CONTENT'];?>
	</div>