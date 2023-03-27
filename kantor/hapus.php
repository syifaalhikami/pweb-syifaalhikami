<?php
		//koneksi database
		include 'hubung.php';
		
		//menangkap data yang dikirim dari form
		$nip = $_GET['nip'];
		
		//menghapus data dari database
		mysqli_query($koneksi,"delete from pegawai where nip='$nip'");
		
		//mengalihkan halaman kembali ke index.php
		header("location:index.php");
	?>