<?php
include 'setting/koneksi.php';
include 'include/general.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>D'ziyalux Kitchen</title>
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
			<div id="head-u">
				<a href="index.php"><img src="images/icon/logo3.png"/></a>
			</div>
			<div id="menu">
				<?php echo render_menu(); ?>
			</div>
			<div id="header">
				<?php echo render_slideshow(); ?>  
			</div>
			<div id="content">
				<?php require_once('include/controller.php'); ?>
				<div style="clear:both;"></div>
			</div>		  
			<div id="footer">
				<?php echo render_footer(); ?>
			</div>
		</div>
	</body>
</html>