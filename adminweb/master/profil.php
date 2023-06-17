
<?php
include "../../config/koneksi.php";
$act=$_GET[act];

if($act=='editpro'){
if (empty($_POST[jd])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
	 
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file)){
mysql_query("UPDATE profil SET aktif='$_POST[pi]',nama='$_POST[jd]',isi='$_POST[isi]' WHERE id_profil='$_GET[id_p]'"); 
echo "<script>window.location=('../index.php?aksi=profil')</script>";
}else{

if($_GET[gb]==''){
$tanggal=date("dmYhis");
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/foto_profil/".$tanggal.".jpg");
mysql_query("UPDATE profil SET             
                           foto='$tanggal.jpg',
						   aktif='$_POST[pi]',
						   nama='$_POST[jd]',
						   isi='$_POST[isi]'
						   WHERE id_profil='$_GET[id_p]'"); 
echo "<script>window.location=('../index.php?aksi=profil')</script>";
}else{

$a=$_GET['gb'];
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/foto_profil/".$a);
mysql_query("UPDATE profil SET aktif='$_POST[pi]', nama='$_POST[jd]',isi='$_POST[isi]' WHERE id_profil='$_GET[id_p]'"); 
echo "<script>window.location=('../index.php?aksi=profil')</script>";

    }
}
  } 
}

?>