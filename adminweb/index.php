<?
session_start();
include "../config/timeout.php";

if($_SESSION[login]==1){
	if(!cek_login()){
		$_SESSION[login] = 0;
	}
}

if($_SESSION[login]==0){
  header('location:logout.php');
}
else{
if (empty($_SESSION['user']) AND empty($_SESSION['pass']) AND $_SESSION['login']==0){
 header("location:login.php"); 
}
else{
    include "../config/koneksi.php";
	include "../config/class_paging.php";
	include"data_tabel.php"; 
	include "file.php";
    include "conter.php";
    $aksi=$_GET[aksi];
?>


<!--bagian body desain web admin -->
<!DOCTYPE html>
<html lang="en" class="ie8"> <![endif]-->
<html lang="en" class="ie9"> <![endif]-->

<!-- Bagian HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Selamat Datang Di Halaman Admin | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
     
	<script src="ckeditor/ckeditor.js"></script>
	




    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
     <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->




    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="#" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                                                        

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                          
                            <li><a href="index.php?aksi=admin"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">Admin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="index.php?aksi=home" >
                        <i class="icon-table"></i> Dashboard
	                          
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="index.php?aksi=profil" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Profil    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">7</span>&nbsp;
                    </a>
                    
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Informasi Data
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
		 
                        <li class=""><a href="index.php?aksi=pegawai"><i class="icon-angle-right"></i> Data Guru </a></li>
                        <li class=""><a href="index.php?aksi=siswa"><i class="icon-angle-right"></i> Data Siswa</a></li>
                        <li class=""><a href="index.php?aksi=agenda"><i class="icon-angle-right"></i> Data Agenda </a></li>
                  
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Kategori
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                      
                        <li><a href="index.php?aksi=kategori"><i class="icon-angle-right"></i> Kategori Artikel </a></li>
                       
                    </ul>
                </li>
                <li class="panel">
                    <a href="index.php?aksi=artikel" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Artikel
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger"><?php echo"$b";?></span>&nbsp;
                    </a>
                   
                </li>
		
		<li class='panel'>
                    <a href='#' data-parent='#menu' data-toggle='collapse' class='accordion-toggle' data-target='#blank-nav'>
                        <i class='icon-check-empty'></i> Pengaturan
	   
                        <span class='pull-right'>
                            <i class='icon-angle-left'></i>
                        </span>
                         &nbsp; <span class='label label-success'>2</span>&nbsp;
                    </a>
                    <ul class='collapse' id='blank-nav'>
                       
                        <li><a href='index.php?aksi=buku_tamu'><i class='icon-angle-right'></i> Buku Tamu  </a></li>
			<li><a href='index.php?aksi=link'><i class='icon-angle-right'></i> Link Terkait  </a></li>
			<li><a href='index.php?aksi=galeri'><i class='icon-angle-right'></i> Galeri  </a></li>
                        
                    </ul>
                </li>
		
		
                 
                <li><a href="index.php?aksi=admin"><i class="icon-signin"></i> Data Admin</a></li>
		<li><a href="logout.php"><i class="icon-signin"></i> Keluar</a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Halaman Admin </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                       
	
                            <a class="quick-btn" href="index.php?aksi=pegawai">
                                <i class="icon-group  icon-2x"></i>
                                <span> Data Guru</span>
                                <span class="label label-danger"><?php echo"$p";?></span>
                            </a>
			    
			     <a class="quick-btn" href="index.php?aksi=siswa">
                                <i class="icon-group  icon-2x"></i>
                                <span> Data Siswa</span>
                                <span class="label label-danger"><?php echo"$k2";?></span>
                            </a>
                            <a class="quick-btn" href="index.php?aksi=kat_d">
                                <i class="icon-book  icon-2x"></i>
                                <span> Pelajaran</span>
                                <span class="label label-danger"><?php echo"$p";?></span>
                            </a>
                            <a class="quick-btn" href="index.php?aksi=download">
                                <i class="icon-film  icon-2x"></i>
                                <span> Meteri</span>
                                <span class="label label-danger"><?php echo"$p";?></span>
                            </a>
                            <a class="quick-btn" href="index.php?aksi=soal">
                                <i class="icon-sitemap icon-2x"></i>
                                <span> Soal</span>
                                <span class="label label-danger"><?php echo"$p";?></span>
                            </a>
                            <a class="quick-btn" href="index.php?aksi=kelulusan">
                                <i class="icon-smile icon-2x"></i>
                                <span> kelulusan</span>
                                <span class="label label-danger"><?php echo"$p";?></span>
                            </a>
			     <a class="quick-btn" href="index.php?aksi=bukutamu">
                                <i class="icon-comments  icon-2x"></i>
                                <span>Komentar</span>
                                <span class="label label-success"><?php echo"$bm";?></span>
                            </a>
			    <a class="quick-btn" href="index.php?aksi=artikel">
                                <i class="icon-book  icon-2x"></i>
                                <span>Artikel</span>
                                <span class="label btn-metis-2"><?php echo"$b";?></span>
                            </a>
                            <a class="quick-btn" href="index.php?aksi=galeri">
                                <i class="icon-picture icon-2x"></i>
                                <span>Galeri</span>
                                <span class="label label-warning"><?php echo"$g";?></span>
                            </a>
                                                  
                            
                        </div>

                    </div>

                </div>
		 <hr />
                  <!--END BLOCK SECTION -->
               
	      
	       
	       <?php include"tengah.php";?>
	       

<div id='right'>

            
            <div class='well well-small'>
                <ul class='list-unstyled'>
                   
                    <li> Online &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <span><?php echo"$a7";?></span></li>
		    <li> Total &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <span><?php echo"$b7";?></span></li>
		    <li> Hits &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <span><?php echo"$c7";?></span></li>
		    <li> Total Hits &nbsp; &nbsp;  : <span><?php echo"$d7";?></span></li>
		   
                
                </ul>
            </div>
            

	    
    </div>
	       
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy; Copyright @ 2017  <? echo"$r3[nama] | Website by: TIM IT $r3[nama]"?> &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
<link rel="stylesheet" href="datepicker/themes/base/jquery.ui.all.css">
	<script src="datepicker/js/jquery-1.7.2.js"></script>
	<script src="datepicker/ui/jquery.ui.core.js"></script>
	<script src="datepicker/ui/jquery.ui.widget.js"></script>
	<script src="datepicker/ui/jquery.ui.datepicker.js"></script>
	<script>
	var $a = jQuery.noConflict();
	$a(function() {
		$a( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});

	});
	</script>

<script>
	var $b = jQuery.noConflict();
	$b(function() {
		$a( "#datepicker1" ).datepicker({
			changeMonth: true,
			changeYear: true
		});

	});
	</script>
<script type='text/javascript'>
var myVideo=document.getElementById('test');
function playPause()
{
	if (myVideo.paused)
		myVideo.play();
	else
		myVideo.pause();
}
function makeBig()
{
	myVideo.width=840;
}
function makeNormal()
{
	myVideo.width=540;
}
function makeSmall()
{
	myVideo.width=340;
}
</script>
</body>

    <!-- END BODY -->
</html>

<?
}
}
?>



