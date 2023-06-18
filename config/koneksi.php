<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_smkkosgoro";

// Koneksi dan memilih database di server
$connect=mysql_pconnect($server,$username,$password) or die("Koneksi gagal");
$pilih_db =mysql_select_db($database) or die("Database tidak bisa dibuka");
include"seo.php";
$profil3 = mysql_query("SELECT * FROM profil WHERE id_profil='2'");
$r3      = mysql_fetch_array($profil3);

?>
