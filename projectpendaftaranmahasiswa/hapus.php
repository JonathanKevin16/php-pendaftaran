<?php

include("config.php");

if( isset($_GET['id']) ){
	
	// pengambilan id dari query string
	$id = $_GET['id'];
	
	// buat query penghapusan
	$sql = "DELETE FROM calon_mahasiswa WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// konfirmasi apakah hapus gagal/berhasil
	if( $query ){
		header('Location: list-siswa.php');
	} else {
		die("Proses Hapus Gagal");
	}
	
} else {
	die("akses dilarang...");
}

?>
