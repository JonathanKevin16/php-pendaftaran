<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Pendaftaran Mahasiswa Baru | UNIKA </title>
	<!--<body style="background-color: rgb(255, 204, 102)"></body> -->
	<style>
		.yellow-background {background-color: rgb(255, 204, 102);}
		.title {
 			padding-top: 3px;
  			padding-bottom: 3px;
  			width: 800px;
  			margin: auto;
		}
		h2 {text-align: center}
		table {width: 65%;}
		div {text-align: center}
	</style>
</head>

<body>

	<div class="container yellow-background">
      <div class="title">
        <h2 class="container yellow-background">Siswa yang sudah mendaftar</h2>
      </div>
    </div>

	<div class="col-2">
		<a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a>
    </div>

	<br>
	
	<table class="table table-striped table-bordered table-hover align-self-center" style="width: 1500px">
	<thead>
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Sekolah Asal</th>
			<th>Jurusan SMA</th>
			<th>Kode Prodi</th>
			<th>Kode Jalur</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM calon_mahasiswa";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['NIS']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			echo "<td>".$siswa['Jurusan_SMA']."</td>";
			echo "<td>".$siswa['Kode_Prodi']."</td>";
			echo "<td>".$siswa['Kode_Jalur']."</td>";
			
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total Pendaftar: <?php echo mysqli_num_rows($query) ?></p>
	<p><strong>Keterangan Kode Prodi</strong></p>
	<table>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Program Studi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Teknik Informatika</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Teknik Elektro</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Teknik Sipil</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Arsitektur</td>
        </tr>
		<tr>
          <td>5</td>
          <td>Teknik Pangan</td>
        </tr>
      </tbody>
    </table>
	<br>
	<p><strong>Keterangan Jalur Masuk</strong></p>
	<table>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Jalur Prestasi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Jalur Prestasi Akademik</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jalur Prestasi Olahraga</td>
        </tr>
      </tbody>
    </table>
	
	</body>
</html>
