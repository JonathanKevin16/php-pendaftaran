
<?php
include("config.php");?>
<?php $prodi=query("SELECT * FROM prodi");?>
<?php $jalur=query("SELECT * FROM jalur");?>
<?php $jurus=query("SELECT * FROM jurusansma");?>


<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Pendaftaran Siswa Baru | UNIKA </title>
	<style>
		p {padding: 2px;
  			margin: 40px;}
		h3 {text-align: center}
	</style>
</head>


<body>
	<header>
		<h3>Formulir Pendaftaran Mahasiswa Baru</h3>
	</header>
	<p>
		<a href="index.php"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
	</p>
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="NIS">NIS:</label>
			<input class="form-control" type="text" name="NIS" placeholder="Nomor Induk Siswa" required/>
		</p>
		<p>
			<label for="nama">Nama:</label>
			<input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required/>
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<input class="form-control" type="text" name="alamat" placeholder="Alamat" required/>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Katolik</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input class="form-control" type="text" name="sekolah_asal" placeholder="Nama sekolah" />
		</p>

		<p>
            <label for="Jurusan_SMA">Jurusan SMA: </label>
            <select name="Jurusan_SMA" id="Jurusan_SMA">
            <?php foreach ($jurus as $row) : ?>
                    <option value="<?= $row['Jurusan_SMA'] ?>" selected><?= $row['JurusanSekolahMenengah'] ?></option>
            <?php endforeach; ?>
            </select>
        </p>

		<p>
			<label for="Kode_Prodi">Kode Prodi: </label>
            <select name="Kode_Prodi" id="Kode_Prodi">
            <?php foreach ($prodi as $row) : ?>
                    <option value="<?= $row['Kode_Prodi'] ?>" selected><?= $row['ProdiPilihan'] ?></option>
            <?php endforeach; ?>
            </select>
		</p>
		<p>
            <label for="Kode_Jalur">Kode Jalur: </label>
            <select name="Kode_Jalur" id="Kode_Jalur">
            <?php foreach ($jalur as $row) : ?>
                    <option value="<?= $row['Kode_Jalur'] ?>" selected><?= $row['JalurPrestasi'] ?></option>
            <?php endforeach; ?>
            </select>
        </p>
		<p>
			Pastikan Data yang diisi sudah sesuai 
		</p>

		<p>
			<input type="submit" class="btn btn-success btn-block" value="Daftar" name="daftar"  />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
