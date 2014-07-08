<?php
if (isset($_GET['id'])) :
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
		<?php
	else :
		?>
		<div id="c-judul">
			<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Produk
		</div>
		<div id="line"></div>
		<div id="c-isi">
		<?php
		$data = mysql_query("select * from gallery");
		while($gall = mysql_fetch_array($data))
		{	
		?>
			<div id="gall-utama">
				<div id="gall">
					<a href="index.php?pg=produk&id=<?php echo $gall['ID_GALLERY'];?>" title="<?php echo $gall['KETERANGAN'];?>">
						<img src="images/gallery/<?php echo $gall['GAMBAR'];?>" width="220" height="165"/>
					</a>
					<div id="gall-judul"><?php echo $gall['JUDUL'];?></div>
					<div id="gall-isi"><?php echo $gall['KETERANGAN'];?></div>
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