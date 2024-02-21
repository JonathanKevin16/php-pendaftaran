<?php require_once("auth.php");?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Pendaftaran Mahasiswa Baru</title>
<!--
Comila Template
http://www.templatemo.com/tm-490-comila
-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">

  	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp" data-wow-delay="0.4s">Selamat Datang Halaman di Admin</h1>
          			<h3 class="wow fadeInUp" data-wow-delay="0.6s">Menu Pendaftaran Mahasiswa Baru UNIKA</strong> </h3>
          			<a href="form-daftar.php" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">Daftar Baru</a>
        			<a href="list-siswa.php"  class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">List Pendaftar</a>
              <a href="logout.php" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">Logout</a>
				</div>
			</div>

		</div>
    <?php if(isset($_GET['status'])): ?>
	  <p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	  </p>
	  <?php endif; ?>
	</div>		
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">

      <div class="col-md-6 col-sm-12">
        <img src="images/about-img.jpg" class="img-responsive wow fadeInUp" alt="About">
      </div>

			<div class="col-md-6 col-sm-12">
				<div class="about-thumb">
					<div class="section-title">
						<h1 class="wow fadeIn" data-wow-delay="0.2s">UNIKA Soegijapranata</h1>
						<h3 class="wow fadeInUp" data-wow-delay="0.4s">Sejarah UNIKA Soegijapranata</h3>
					</div>
					<div class="wow fadeInUp" data-wow-delay="0.6s">
						<p>Unika SOEGIJAPRANATA berdiri tanggal 5 Agustus 1982. Sebelumnya universitas ini bernama Universitas Katolik Atma Jaya Semarang dan Institut Teknologi Katolik Semarang (ITKS).
              Sebagai lembaga pendidikan tinggi, Unika SOEGIJAPRANATA mengabdikan nama Mgr. Alb. Soegijapranata, SJ sebagai pelindung. Mgr. Soegijapranata adalah seorang imam, Uskup Agung pribumi pertama, tokoh dan pahlawan nasional. Soegijapranata lahir di Surakarta, 25 November 1896. Masuk sebagai novis Serikat Yesus di Mariendaal, Grave, Belanda pada tanggal 27 September 1920, beliau ditahbiskan sebagai Imam pada tanggal 15 Agustus 1931 dan pada tanggal 20 September 1940 sebagai Uskup Agung Semarang. </p>
						<p>Perjuangan dan perhatian beliau dalam dunia pendidikan merupakan kelanjutan dari sikap gurunya, Rm. Frans Van Lith, SJ. Salah satu perjuangannya adalah mengangkat dua perguruan tinggi Katolik tertua di Bandung dan Yogyakarta hingga memperoleh status disamakan dengan perguruan tinggi negeri.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- feature section -->
<section id="feature">
  <div class="container">
    <div class="row">
      
      <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.4s">
          <div class="media-object media-left">
            <i class="icon icon-laptop"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Visi</h2>
            <p>Menjadi komunitas akademik yang unggul dalam pendidikan, penelitian dan pengabdian dengan dilandasi nilai-nilai Kristiani: cinta kasih, keadilan dan kejujuran.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.8s">
          <div class="media-object media-left">
            <i class="icon icon-refresh"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Misi</h2>
            <p>Menyelenggarakan pendidikan yang berkualitas secara akademik dengan didukung pengembangan kepribadian yang utuh dan potensi kepemimpinan</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-8">
        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object media-left">
            <i class="icon icon-chat"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Pengembangan</h2>
            <p>SENAT MAHASISWA UNIVERSITAS (SMU), BADAN EKSEKUTIF MAHASISWA UNIVERSITAS (BEMU)</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="section-title">
					<h1 class="wow fadeInUp" data-wow-delay="0.3s">Kontak Kami</h1>
					<p class="wow fadeInUp" data-wow-delay="0.6s">024-8505003, 024-8500223, unika@unika.ac.id</p>
				</div>
				
			</div>
	
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">

      <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <h2>UNIKA</h2>
          <div class="wow fadeInUp" data-wow-delay="0.3s">
             <p>Talenta pro patria et humanitate</p>
             <p class="copyright-text">Copyright &copy; 2021 UNIKA Soegijapranata <br>
             Designed by <a rel="nofollow" href="http://www.google.com/+templatemo" target="_parent">Templatemo</a></p>
          </div>
      </div>

      <div class="col-md-1 col-sm-1"></div>

      <div class="col-md-4 col-sm-5">
        <h2>Kampus Kami</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          Jl. Pawiyatan Luhur IV/1,<br>
          Bendan Dhuwur,<br>
          Semarang, Jawa Tengah, 50234
        </p>
        <ul class="social-icon">
          <li><a href="https://www.facebook.com/profile.php?id=100009002735234" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://twitter.com/unikasoegija" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
          <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="1.4s"></a></li>
          <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="1.6s"></a></li>
        </ul>
      </div>

		</div>
	</div>
</footer>




<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>