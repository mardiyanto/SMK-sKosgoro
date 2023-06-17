<?php 
  session_start();
    include "config/koneksi.php";
	include "config/class_paging.php";
    include "config/fungsi_indotgl.php";
    $aksi=$_GET[aksi];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><? echo"$r3[nama]"?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <? include "menu.php"?>
     </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">MADRASAH ALIYAH  MATHLAUL ANWAR KEDONDONG</h1>
            <p><a href="beranda.php?aksi=psb" class="btn btn-primary px-4 py-3">Daftar</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-search-course">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="courseSearch-wrap d-md-flex flex-column-reverse">
    					<div class="full-wrap d-flex ftco-animate">
						<?php $profil = mysql_query("SELECT * FROM Profil WHERE id_profil='9'");
	$r      = mysql_fetch_array($profil);?>
    						<div class="one-third order-last p-5">
    							<h3><?php echo $r[nama] ?></h3>
    					
		              <p><?php echo $r[isi] ?></p>
    						</div>
    						<div class="one-forth order-first img" style="background-image: url(foto/foto_profil/<?php echo $r[foto] ?>);"></div>
    					</div>
    					<div class="full-wrap ftco-animate">
    						<div class="one-half">
    							<div class="featured-blog d-md-flex">
    								<div class="image d-flex order-last">
    									<a href="index.php" class="img" style="background: url(images/image_2.jpg);"></a>
    								</div>
    								<div class="text order-first">
    									<h3><a href="index.php">Belajar Nyaman</a></h3>
											<p>Kelas yang simple membuat belajar nyaman dan lebih fokus </p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Guru Kami</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">
			<?$g = mysql_query("SELECT * FROM pegawai ORDER BY id_gr ASC LIMIT 3");
			  while ($w = mysql_fetch_array($g)){
			?>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <a href="beranda.php?aksi=pegawai" class="block-20" style="background-image: url('foto/guru/<?=$w[foto]?>');">
              </a>
                  <div class="text">
                     <p class="name"><?=$w[nama]?></p>
                    <span class="position"><?=$w[jabatan]?></span>
                  </div>
                </div>
              </div><? }?>
        
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Informasi</h2>
          </div>
        </div>
        <div class="row d-flex">
	<?php 
	$con=mysql_query("SELECT * FROM berita order by id_berita DESC LIMIT 3");
	while($ar=mysql_fetch_array($con)){
	$isi_berita6 = strip_tags($ar['isi']); 
    $isi6 = substr($isi_berita6,0,500);
    $isi6 = substr($isi_berita6,0,strrpos($isi6," "));  
	?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="beranda.php?aksi=detail&id=<?=$ar[id_berita]?>" class="block-20" style="background-image: url('foto/data/<?=$ar[gambar]?>');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="beranda.php?aksi=detail&id=<?=$ar[id_berita]?>"><?=$ar[tanggal]?></a></div>
                  <div><a href="beranda.php?aksi=detail&id=<?=$ar[id_berita]?>">Admin</a></div>
                  <div><a href="beranda.php?aksi=detail&id=<?=$ar[id_berita]?>" class="meta-chat"><span class="icon-chat"></span><?=$ar[dilihat]?> kali </a></div>
                </div>
                <h3 class="heading mt-3"><a href="beranda.php?aksi=detail&id=<?=$ar[id_berita]?>"><?=$ar[judul]?></a></h3>
                <p><?=$isi6?></p>
              </div>
            </div>
          </div> 
	<?}?>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>