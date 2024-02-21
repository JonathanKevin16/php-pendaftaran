<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$NIS = $_POST['NIS'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	$jurus = $_POST['Jurusan_SMA'];
	$prodi = $_POST['Kode_Prodi'];
	$jalur = $_POST['Kode_Jalur'];
	
	// buat query
	$sql = "INSERT INTO calon_mahasiswa (NIS, nama, alamat, jenis_kelamin, agama, sekolah_asal, Jurusan_SMA ,Kode_Prodi, Kode_Jalur) VALUE ('$NIS','$nama', '$alamat', '$jk', '$agama', '$sekolah','$jurus','$prodi','$jalur')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index2.php dengan status=sukses
		header('Location: index2.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek2.php dengan status=gagal
		header('Location: index2.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
