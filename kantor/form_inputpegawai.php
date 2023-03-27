<!DOCTYPE html>
<html>
  <head><title>Form Data Pegawai</title></head>
  <body>
    <h2>FORM DATA Pegawai</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<form method="post" action="tambah_pegawai.php">
		<table>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td>Nama Pegawai</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="nohp"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="SIMPAN"></td>
			</tr>
		</table>
	</form>
  </body>
</html>