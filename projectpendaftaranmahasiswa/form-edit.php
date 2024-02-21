<?php
require_once("auth.php");
include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa2.php');
}

//ambil id dari query string
$id = $_GET['id'];

//query pengambilan database
$sql = "SELECT * FROM calon_mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<?php $prodi=query("SELECT * FROM prodi");?>
<?php $jalur=query("SELECT * FROM jalur");?>
<?php $jurus=query("SELECT * FROM jurusansma");?>


<!DOCTYPE html>
<html>
<head>
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
    <title>Pendaftaran Siswa Baru | UNIKA </title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <p>
		<a href="list-siswa.php"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
	</p>
    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
			<label for="NIS">NIS: </label>
			<input class="form-control" type="text" name="NIS" placeholder="Nomor Induk Siswa"value="<?php echo $siswa['NIS'] ?>" />
		</p>
        <p>
            <label for="nama">Nama: </label>
            <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input class="form-control" type="text" name="alamat" placeholder="Alamat" value="<?php echo $siswa['alamat'] ?>"/>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input class="form-control" type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
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
            <input type="submit"  class="btn btn-success btn-block" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>