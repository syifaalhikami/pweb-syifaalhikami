<?php
		//koneksi database
		include 'hubung.php';
		
		//menangkap data yang dikirim dari form
		$nip_get = $_POST['nip_get'];
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$nohp = $_POST['nohp'];
		$email = $_POST['email'];
		
		//menginput data ke database
		mysqli_query($koneksi,"UPDATE `pegawai` SET `nip` = '$nip', `nama` = '$nama', `nohp` = '$nohp', `email` = '$email' WHERE `pegawai`.`nip` = '$nip_get';");
		
		//mengalihkan halaman kembali ke index.php
		header("location:index.php");
	?>
