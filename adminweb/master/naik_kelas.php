
<?php
include "../../config/koneksi.php";
$act=$_GET[act];

if($act=='X'){

mysql_query("UPDATE pendaftaran SET kelas='$_POST[kelas]' WHERE no_daftar='$_GET[no_daftar]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";

}
elseif($act=='XI'){

mysql_query("UPDATE pendaftaran SET kelas='$_POST[kelas]' WHERE no_daftar='$_GET[no_daftar]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";

}
elseif($act=='XII'){
mysql_query("UPDATE pendaftaran SET kelas='$_POST[kelas]' WHERE no_daftar='$_GET[no_daftar]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";
}

elseif($act=='Alumni'){
mysql_query("UPDATE pendaftaran SET kelas='$_POST[kelas]' WHERE no_daftar='$_GET[no_daftar]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";
 
}
?>
