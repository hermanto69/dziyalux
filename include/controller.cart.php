<div id="c-judul">
	<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Keranjang Belanja
</div>
<div id="line"></div>
<div id="c-isi">
<?php if (isset($_SESSION['cart'])) : ?>
	<div class="cart" >
        <table >
            <tr>
                <td width="5%">
                    No.
				</td>
                <td width="40%">
					Nama
				</td>
                <td width="10%">
                    Jumlah
                </td>
                <td width="20%">
                    Harga
                </td>
                <td width="25%">
                    Total
                </td>
            </tr>
			<?php
			$no 			= 1;
			$grand_total 	= 0;
			foreach($_SESSION['cart'] as $id => $row)
			{
				$total = $row['jumlah'] * $row['harga'];
				echo '<tr>
				<td width="5%" style="text-align:center;">
                    '.$no.'
				</td>
                <td width="40%">
					<a href="index.php?pg=produk&id='.$id.'">'.$row['nama'].'</a>
				</td>
                <td width="10%" style="text-align:center;">
                    '.$row['jumlah'].'
                </td>
                <td width="20%" style="text-align:right;">
                    <span style="float:left;">Rp</span>'.indo_uang($row['harga']).'
                </td>
                <td width="25%" style="text-align:right;">
                    <span style="float:left;">Rp</span>'.indo_uang($total).'
                </td>
				</tr>';
				$no++;
				$grand_total += $total;
			}
			?>
			<tr>
                <td colspan="4" style="text-align:center; font-weight:bold;">
                    Total
				</td>
                <td width="25%" style="text-align:right;">
                    <span style="float:left;">Rp</span><?php echo indo_uang($grand_total); ?>
                </td>
            </tr>
		</table>
    </div>
	<div class="cart-footer">
		<a href="index.php?pg=checkout">CHECKOUT</a>
	</div>
<?php else : ?>
	<h1>Maaf, keranjang belanja Anda masih kosong.</h1>
<?php endif; ?>
</div>
            