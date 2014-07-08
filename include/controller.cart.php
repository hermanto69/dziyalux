<?php
//var_dump($_SESSION['cart']);
?>
<div id="c-judul">
	<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Keranjang Belanja
</div>
<div id="line"></div>
<div id="c-isi">
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
			$no = 1;
			$grand_total = 0;
			foreach($_SESSION['cart'] as $row)
			{
				$total = $row['jumlah'] * $row['harga'];
				echo '<tr>
				<td width="5%">
                    '.$no.'
				</td>
                <td width="40%">
					'.$row['nama'].'
				</td>
                <td width="10%">
                    '.$row['jumlah'].'
                </td>
                <td width="20%">
                    Rp '.indo_uang($row['harga']).'
                </td>
                <td width="25%">
                    Rp '.indo_uang($total).'
                </td>
				</tr>';
				$no++;
				$grand_total += $total;
			}
			?>
			<tr>
                <td colspan="4">
                    Total
				</td>
                <td width="25%">
                    Rp <?php echo indo_uang($grand_total); ?>
                </td>
            </tr>
		</table>
    </div>
	<div class="cart-footer">
		<a href="index.php?pg=checkout">CHECKOUT</a>
	</div>
</div>
            