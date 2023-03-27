<!DOCTYPE html>
<html>
  <head><title>DATA Pegawai</title></head>
  <body>
    <h2>CRUD DATA Pegawai</h2>
	<br/>
	<a href="form_inputpegawai.php">Tambah Pegawai</a>
	<br/>
	<br/>
		<table border="1">>
			<tr>
				<th>NIP</th>
				<th>Nama</th>
				<th>NoHP</th>
				<th>Email</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'hubung.php';
			$data = mysqli_query($koneksi,"select * from pegawai");
			while($d = mysqli_fetch_array($data)){
			?>
			 <tr>
				<td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nohp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td>
					<a href="edit.php?nip=<?php echo $d['nip']; ?>">EDIT</a>
					<a href="hapus.php?nip=<?php echo $d['nip']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>
  </body>
</html>