<?php
session_start();

function render_menu()
{
	$html = '<ul><li><a href="index.php">Beranda</a></li>';
	$data = mysql_query("select * from content where IS_AKTIF = '1'");
	while($menu = mysql_fetch_array($data))
	{
		$html .= '<li><a href="?pg=info&id='.$menu['ID_CONTENT'].'">'.$menu['NAMA_CONTENT'].'</a></li>';
	}
	$html .= '<li><a href="?pg=kontak">Kontak</a></li><li><a href="?pg=produk">Produk</a></li><li class="my-account"><a href="?pg=member">Akun Saya</a></li><li class="view-cart"><a href="?pg=cart">Keranjang Belanja</a></li></ul>';
	return $html;
}

function render_slideshow()
{
	$data = mysql_query("select * from slide_show");
	$html = '';
	while($slide = mysql_fetch_array($data))
	{
		$html .= '<a href="'.$slide['LINK'].'"><img src="images/slide/'.$slide['GAMBAR'].'" alt="'.$slide['JUDUL'].'" width="1000" height="400" /></a>';
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

// HELPER FUNCTION
function indo_tanggal($tanggal)
{
	$tanggal = explode('-',$tanggal);
	return $tanggal[2].'-'.$tanggal[1].'-'.$tanggal[0];
}

function indo_uang($angka)
{
	return number_format($angka, 2, ',', '.');
}

function break_description($html, $length)
{
	
	$isi_berita = htmlentities(strip_tags($html)); // membuat paragraf pada isi berita dan mengabaikan tag html

    $isi = substr($isi_berita, 0, $length); // ambil sebanyak $length karakter	
	//echo $isi;
    $isi = substr($isi_berita, 0, strrpos($isi, " ")); // potong per spasi kalimat
	//echo $isi;
	return $isi;
}