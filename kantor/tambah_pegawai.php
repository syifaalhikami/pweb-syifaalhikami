<?php
		//koneksi database
		include 'hubung.php';
		
		//menangkap data yang dikirim dari form
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$nohp = $_POST['nohp'];
		$email = $_POST['email'];
		
		//menginput data ke database
		mysqli_query($koneksi,"insert into pegawai values('$nip','$nama','$nohp','$email')");
		
		//mengalihkan halaman kembali ke index.php
		header("location:form_inputpegawai.php");
	?>