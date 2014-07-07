<div id="s-gal">
	<div id="j-gal">Produk</div>
	<div id="i-gal">		 
		<?php
		$data = mysql_query("select * from gallery limit 0,4");
		while($tampil=mysql_fetch_array($data)){
			?>
		 
		<a href="images/gallery/<?php echo $tampil['GAMBAR'];?>" rel="prettyPhoto[gallery2]" title="<?php echo $tampil['KETERANGAN'];?>">
			<img src="images/gallery/<?php echo $tampil['GAMBAR'];?>" width="150" height="100" />
		</a>
			<div id="t-gal">
				<?php echo $tampil['JUDUL'];?>
			</div>
		<?php } ?>
	</div>
</div>
<div id="c-utama">
	<b>Selamat datang di D'ziyalux Kitchen Set</b><br /><br />
	<p>Kebutuhan akan kitchen set sudah menjadi bagian yang utama di rumah-rumah masa kini. Model yang minimalis, penuh warna dan lain sebagainya akan menjadikan rumah menjadi lebih menarik. Untuk itu perlu adanya pemilihan kitchen set secara tepat untuk tipe rumah Anda, baik dari segi bahan baku, model, finishing dan faktor-faktor pendukung lain.</p>
	<p>Dengan pengalaman di bidang kitchen set lebih dari 15 tahun, menangani export kitchen set terutama untuk negara Jepang, kami pun akhirnya mengawali produksi kitchen set secara home industri untuk memenuhi kebutuhan rumah tangga, perkantoran dan pemerintahan.</p>
	<p>Kami sebagai produsen kitchen set menjual kitchen set murah dengan berbagai jenis spesifikasi bahan baku dan finishing yang dapat disesuaikan dengan kebutuhan Anda dengan harga yang lebih variatif sehingga dapat menjangkau budget Anda.</p>
	<p>Harga Murah&hellip;. Mulai dari Rp. 1.200.000 / meter lari (disesuaikan dengan spesifikasi bahan baku). Harga dijamin bersaing.</p>
	<p>Kami juga dapat memproduksi berbagai mebel lain seperti meja, kursi, lemari, dipan, nakas, meja rias, partisi untuk kantor dan lain sebagainya. Kami juga produksi paket kamar set, wardrobe, office furniture dan custom furniture.</p>
</div>
<!-- <div id="left-utama"><script type="text/javascript" src="http://cdn.widgetserver.com/syndication/subscriber/InsertWidget.js"></script><script type="text/javascript">if (WIDGETBOX) WIDGETBOX.renderWidget('56673ea1-1069-4020-870e-0563a7bc6ddb');</script>
<noscript>Get the <a href="http://www.widgetbox.com/widget/flash-date-calendar-">Flash Date Calendar</a> widget and many other <a href="http://www.widgetbox.com/">great free widgets</a> at <a href="http://www.widgetbox.com">Widgetbox</a>! Not seeing a widget? (<a href="http://support.widgetbox.com/">More info</a>)</noscript></div>
<div id="right-utama"></div>
-->