<div id="c-judul">
		<div id="back"><a href="index.php"><img src="images/icon-back-home.png" width="32" height="32" /></a></div>Contact
	</div>
	<div id="line"></div>
	<div id="c-isi">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.4058731644573!2d106.5771446!3d-6.210078300000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe63f30b89cd%3A0x888a3e39777948e!2sJalan+Manis+IV!5e0!3m2!1sen!2s!4v1404719885583" width="100%" height="450" frameborder="0" style="border:0"></iframe>
		<form action="include/input_kontak_post.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<table width="492" border="0">
				<tr>
					<td colspan="2">CONTACT FORM</td>
				</tr>
				<tr>
					<td width="240">Nama</td>
					<td width="240">Email</td>
				</tr>
				<tr>
					<td><input name="nama" type="text" id="nama" size="40" class="required" /></td>
					<td><input name="email" type="text" id="email" size="40" class="required email" /></td>
				</tr>
				<tr>
					<td>No. HP</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><input name="no_hp" type="text" id="no_hp" class="required" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">Pesan</td>
				</tr>
				<tr>
					<td colspan="2"><textarea name="pesan" id="pesan" cols="78" rows="5" class="required"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="button" id="button" value="kirim" /></td>
				</tr>
			</table>
		</form>
	</div>
	<?php