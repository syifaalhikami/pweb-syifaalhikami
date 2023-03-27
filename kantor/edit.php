<!DOCTYPE html>
<html>
  <head><title>Data Pegawai</title></head>
  <body>
    <h2>EDIT DATA Pegawai</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>EDIT DATA Pegawai</h3>
			<?php
			include 'hubung.php';
			$id = $_GET['nip'];
			$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip='$id'");
			while($d = mysqli_fetch_array($data)){
			?>
	<form method="POST" action="update.php">
		<table>
			<td><input type="hidden" name="nip_get" value="<?php echo $d['nip']; ?>" id=""></td>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip" value="<?php echo $d['nip']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Pegawai</td>
				<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="nohp" value="<?php echo $d['nohp']; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
			</tr>
	
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<?php
	}
	?>
  </body>
</html>
