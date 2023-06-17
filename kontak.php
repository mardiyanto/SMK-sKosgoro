<?php 
    include "config/koneksi.php";
	include "config/class_paging.php";
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
<? include 'menu.php';?>
  </nav>
    <!-- END nav -->
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Informasi Kontak </h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Alamat Kami:</span> <?=$r3[alamat]?></p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920"><?=$r3[no_hp]?></a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">admin@gmail.com</a></p>
          </div>
    
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Isikan Keluhan Anda ?</h4>	
            <form id="contactForm" method='post' class='contact_form' action='prosesbuku.php' onSubmit='return validasi_buku(this)'>
              <div class="form-group">
                <input type="text" class="form-control"  name='nama'  required='required' required data-error="Please enter your name" placeholder='Masukan Nama Anda' >
              </div>
              <div class="form-group">
                <input type='email'name='email'  required='required' required data-error="Please enter your email" placeholder='Masukan Email'  class="form-control" >
              </div>
    
              <div class="form-group">
                <textarea name='isi' cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div> <div class="form-group">Apakah Anda Yakin ?
			  <input type='checkbox' name='cek' value='yes'></div> 
              <div class="form-group">
                <input type="submit" id="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
    
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
    				  <?
				  echo"    <div class='post clearfix' id='post'>
        <h2 class='title'>Buku Tamu</h2>
        <div class='entry clearfix'>";
if($_GET[cek]=='spam'){
$h=$_GET[nama];
			echo"<div class='error_box'>Maaf $h anda diduga sebagai spam...... </div>";
			}
			
			
if($_GET[cek]=='sukses'){
$h=$_GET[nama];
			echo"<div class='valid_box10'>Terimakasih <font style='color:#ff0000'>$h</font> anda telah mengisi Buku Tamu kami..</div><br />
";
			}	
  $p      = new Paging2;
  $batas  = 5;
  $posisi = $p->cariPosisi($batas); 
$buku=mysql_query("SELECT * FROM bukutamu WHERE status='Y' ORDER BY id_bukutm DESC LIMIT $posisi,$batas");
$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM bukutamu WHERE status='Y' "));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
echo"<div class='valid_box10'><strong>$jmldata </strong> Pesan Anda</div>";
while ($bu=mysql_fetch_array($buku)){
$komen=wordwrap($bu['isi_buku'], 85, "<br />\n", 1);

echo"<div class='top' >
            <h4>$bu[nama]</h4>
              <div>
			  <div class='tanggal'>$bu[tanggal] - $bu[jam]</div><br />
			<em><strong>MENGATAKAN :</strong></em><br />
			  $komen";
		if($bu[jawab]!=''){
		echo"
		<div class='balas'>
		<strong>BALASAN : $bu[tgl]</strong>
		<div class='ad'>ADMIN : <span>$bu[admin]</span></div>
		$bu[jawab]
		</div>
		
		";
		}	  
			  echo"</div>
          </div>";
		  }
		 echo" <div align=center >$linkHalaman </div>";			
			
			
?>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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