<?php
include "config/koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$nisn = anti_injection($_POST['nisn']);
$pass     = anti_injection(md5($_POST['pass']));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($nisn) OR !ctype_alnum($pass)){
echo "<script>window.location=('javascript:history.go(-1)')</script>";
}
else{
$login=mysql_query("SELECT * FROM   pendaftaran WHERE BINARY nisn='$nisn' AND pass='$pass' ");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();

  $_SESSION[nisn]     = $r[nisn];
  $_SESSION[nama]  = $r[nama];
  $_SESSION[pass]     = $r[password];

	$sid_lama = session_id();
	
	session_regenerate_id();

	$sid_baru = session_id();
 $tgl=date ('d/m/Y');
 $dt=date ('h:i A');
  mysql_query("UPDATE  pendaftaran SET id_session='$sid_baru',tgl_log='$tgl',jam_log='$dt' WHERE nisn='$nisn'");
  echo "<script>window.location=('beranda.php?aksi=peraturan')</script>";
}
else{
echo "<script>window.alert('Email atau Password Anda tidak benar');
        window.location=('javascript:history.go(-1)')</script>";
}
}
?>

