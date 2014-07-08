<?php

function render_menu()
{
	$html = '<ul><li><a href="?pg=kontak">Kontak</a></li><li><a href="?pg=produk">Produk</a></li>';
	$data = mysql_query("select * from content where IS_AKTIF = '1'");
	while($menu = mysql_fetch_array($data))
	{
		$html .= '<li><a href="?pg=info&id='.$menu['ID_CONTENT'].'">'.$menu['NAMA_CONTENT'].'</a></li>';
	}
	$html .= '<li><a href="index.php">Beranda</a></li></ul>';
	return $html;
}

function render_slideshow()
{
	$data = mysql_query("select * from slide_show");
	$html = '';
	while($slide = mysql_fetch_array($data))
	{
		$html .= '<img src="images/slide/'.$slide['GAMBAR'].'" width="1000" height="400" />';
	}
	return $html;
}

function render_footer()
{
	$html = '<div id="copy">
					Copyright&copy;D\'ziyalux Kitchen | '.date('Y').'<br />
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
				</div>';
	return $html;
}