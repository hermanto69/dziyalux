<?php
if (isset($_GET['id'])) :
	$data = mysql_query("SELECT p.*
		FROM produk AS p
		WHERE p.ID_PRODUK = '$_GET[id]'");
	$Q_gambar = mysql_query("SELECT GAMBAR, KETERANGAN
		FROM gallery
		WHERE ID_PRODUK = '$_GET[id]'") or mysql_error();
	$menu = mysql_fetch_array($data);
	?>
		<div id="c-judul">
			<div id="back">
				<a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a>
			</div>
			<?php echo $menu['JUDUL'];?>
		</div>
		<div id="line"></div>
	<?php
	if (isset($_GET['action']) && $_GET['action'] == 'beli')
	{
		if (!isset($_SESSION['cart']))
			$_SESSION['cart'] = array();
		if (!array_key_exists($menu['ID_PRODUK'], $_SESSION['cart']))
		{
			$_SESSION['cart'][$menu['ID_PRODUK']] = array(
				'nama' => $menu['JUDUL'],
				'harga' => $menu['HARGA'],
				'jumlah' => 1
			);
		}
		else
		{
			$_SESSION['cart'][$menu['ID_PRODUK']]['jumlah'] += 1;
		}
		echo '<script>document.location = "index.php?pg=cart";</script>';
	}	
	?>
		<div id="c-isi">
			<?php 
			if (mysql_num_rows($Q_gambar) > 0) 
			{
				while ($gambar = mysql_fetch_array($Q_gambar))
				{
				?>
					<div id="c-gambar">
						<a href="images/gallery/<?php echo $gambar['GAMBAR'];?>" rel="prettyPhoto[gallery2]" title="<?php echo $gambar['KETERANGAN'];?>">
							<img src="images/gallery/<?php echo $gambar['GAMBAR'];?>" width="450" height="250" alt="<?php echo $gambar['KETERANGAN'];?>" />
						</a>
					</div>
				<?php
				}
			} 
			?>
			<div class="prod-desc">
				<?php echo $menu['KETERANGAN']; ?>
				<div class="prod-footer">
					<span class="harga">
						Harga Rp <?php echo indo_uang($menu['HARGA']); ?>
					</span>
					<span class="beli">
						<a href="index.php?pg=produk&id=<?php echo $menu['ID_PRODUK']; ?>&action=beli" onClick="return confirmBeli('<?php echo $menu['JUDUL'];?>');">BELI</a>
					</span>
				</div>
			</div>
		</div>		
		<?php
	else :
		?>
		<div id="c-judul">
			<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Produk
		</div>
		<div id="line"></div>
		<div id="c-isi">
		<?php
		$data = mysql_query("SELECT p.ID_PRODUK, p.JUDUL, p.KETERANGAN, p.HARGA, g.GAMBAR 
		FROM produk AS p 
			INNER JOIN gallery AS g ON p.ID_PRODUK = g.ID_GALLERY
		WHERE g.DEFAULT = '1'");
		while($gall = mysql_fetch_array($data))
		{	
		?>
			<div id="gall-utama">
				<div id="gall">
					<a href="index.php?pg=produk&id=<?php echo $gall['ID_PRODUK'];?>" title="<?php echo $gall['KETERANGAN'];?>">
						<img src="images/gallery/<?php echo $gall['GAMBAR'];?>" width="220" height="165" title="<?php echo $gall['KETERANGAN'];?>"/>
					</a>
					<div id="gall-judul"><?php echo $gall['JUDUL']; ?></div>
					<div id="gall-isi"><?php echo break_description($gall['KETERANGAN'], 100); ?> ...</div>
					<div id="gall-footer">
						<span class="harga">
							Rp <?php echo indo_uang($gall['HARGA']); ?>
						</span>
						<a href="index.php?pg=produk&id=<?php echo $gall['ID_PRODUK'];?>" title="<?php echo $gall['KETERANGAN'];?>" class="beli">DETAIL</a>
					</div>
				</div>
			</div>
			<!--
			IN CASE WE MESS IT UP, WE STILL HAVE THE BACK-UP, AYEAY!
			<div id="gall-utama">
				<div id="gall">
					<a href="images/gallery/<?php echo $gall['GAMBAR'];?>" rel="prettyPhoto[gallery2]" title="<?php echo $gall['KETERANGAN'];?>">
						<img src="images/gallery/<?php echo $gall['GAMBAR'];?>" width="220" height="165"/>
					</a>
					<div id="gall-judul"><?php echo $gall['JUDUL'];?></div>
					<div id="gall-isi"><?php echo $gall['KETERANGAN'];?></div>
				</div>
			</div>
			-->
		<?php 
		}
		?>
		</div>
		<?php
	endif;
?>
<script>
function confirmBeli(produk) {
	var msg = confirm('Tambahkan '+produk+' ke keranjang belanja?');
	if (msg === false)
		return false;
	return true;
}
</script>