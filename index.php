<?php
include 'setting/koneksi.php';// memanggil koneksi ke database yang berada di dalam folder setting

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>D'ziyalux Kitchen</title>
		<!-- memanggil file index.css didalam folder css yang dimana file tersebut berfungi untuk merubah bentuk tampilan web -->
		<link href="css/index.css" type="text/css" rel="stylesheet" />
		<link href="css/prettyPhoto.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="setting/jquery/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="setting/jquery/jquery-ui-1.10.2.custom.min.js"></script>
		<script type="text/javascript" src="setting/jquery/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="setting/jquery/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="setting/jquery/jquery.validate.js"></script>
		<script type="text/javascript" src="setting/jquery/jquery.prettyPhoto.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('#header').cycle();
			$("form").validate();
			$("area[rel^='prettyPhoto']").prettyPhoto();
			$("#i-gal:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:5000, autoplay_slideshow: true});
			$("#i-gal:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
			$("#c-isi:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:5000, autoplay_slideshow: true});
			$("#c-isi:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
			$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
						custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
						changepicturecallback: function(){ initialize(); }
			});
			$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
				custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
				changepicturecallback: function(){ _bsap.exec(); }
			});
		});
		</script>
	</head>
	<body>
		<div id="head-line"></div>
		<div id="container">
			<div id="head-u"><img src="images/icon/logo3.png"/></div>
			<div id="menu">
				<ul>			 
					<li><a href="?kontak=content">Kontak</a></li>
					<li><a href="?gall=content">Produk</a></li>
				   <?php
					$data = mysql_query("select * from content where IS_AKTIF = '1'");
					//memanggil data yg berada pada tabel content, dimana jika data tersebut bernilai 1 atau aktif
					while($menu = mysql_fetch_array($data)){
					  //me-looping atau mengulangi data tersebut sebanyak yg berada di dalam tabel
					?>
						<li><a href="?pg=content&id=<?php echo $menu['ID_CONTENT'];?>"><?php echo $menu['NAMA_CONTENT'];?></a></li>
					<?php
					}
					?>
					<li><a href="index.php">Beranda</a></li>
				</ul>
			</div>
			<div id="header">
				<!--  <img src="images/20060520174809542_1.jpg" width="1000" height="400" />
				<div id="logo"><img src="images/logo.jpg" width="150" height="150" /></div> -->
				<?php
				  $data = mysql_query("select * from slide_show");
				  while($slide = mysql_fetch_array($data)){
				  ?>
				  <img src="images/slide/<?php echo $slide['GAMBAR'];?>" width="1000" height="400" />
				<?php } ?>		  
			</div>
			<div id="content">
				<?php
					if(isset($_GET['pg']) or (isset($_GET['kontak'])) or (isset($_GET['gall']))){ //jika bernilai pg maka akan memanggil file content.php yang berada pada folder include
						include"include/content.php";
					}else{
						include"home.php"; // jika tidak bernilai pg maka akan menampilkan file home.php
					}
				?>
				<div style="clear:both;"></div>
			</div>		  
			<div id="footer">
				<div id="copy">
					Copyright&copy;D'ziyalux Kitchen | 2013<br />
					Jl.Manis IV no 5 Tangerang-Banten.
					Phone : (021) 5565 1019
					suratmansplash@yahoo.co.id
					http://suratmansplash.blogspot.com/
				</div>
			  
				<div id="icon">
					<a href="https://www.facebook.com/groups/123327424411386/?fref=ts" target="_blank" ><img src="images/icon/facebook.png" width="20" height="20" /></a>
					<a href="#"><img src="images/icon/social_twitter_bird.png" width="20" height="20" /></a> 
					<a href="#"><img src="images/icon/yahoo_2.png" width="20" height="20" /></a> 
					<a href="#"><img src="images/icon/gmail.png" width="25" height="30" /></a>
				</div>
			</div>
		</div>
	</body>
</html>