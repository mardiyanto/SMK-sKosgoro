
<?php
include "../../config/koneksi.php";
$act=$_GET[act];

if($act=='hapus'){
mysql_query("DELETE FROM pendaftaran WHERE no_daftar='$_GET[id]'"); 
echo "<script>window.location=('../index.php?aksi=siswa')</script>";
}

elseif($act=='editwae'){

mysql_query("UPDATE pendaftaran SET 				
								nisn='$_POST[nisn]',
								nama='$_POST[nama]',
								tmpt_l='$_POST[tmpt_l]',
								tgl_l='$_POST[tgl_l]',
								jk='$_POST[jk]',
								agama='$_POST[agama]',
								alamat='$_POST[alamat]',
								rt='$_POST[rt]',
								rw='$_POST[rw]',
								desa='$_POST[desa]',
								kec='$_POST[kec]',
								kab='$_POST[kab]',
								kodepos='$_POST[kodepos]',
								tlp='$_POST[tlp]',
								sekolah_asl='$_POST[sekolah_asl]',
								th_ijasah='$_POST[th_ijasah]',
								n_us='$_POST[n_us]',
								ayah='$_POST[ayah]',
								payah='$_POST[payah]',
								ibu='$_POST[ibu]',
								pibu='$_POST[pibu]'
								WHERE nisn='$_GET[nisn]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";

} 

elseif($act=='editwae1'){

	$pass = md5($_POST[pw]);
if (empty($_POST[nama]) ){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file)){
mysql_query("UPDATE pendaftaran SET 				
								nisn='$_POST[nisn]',
								password = '$pass',
								nama='$_POST[nama]',
								tmpt_l='$_POST[tmpt_l]',
								tgl_l='$_POST[tgl_l]',
								jk='$_POST[jk]',
								agama='$_POST[agama]',
								alamat='$_POST[alamat]',
								rt='$_POST[rt]',
								rw='$_POST[rw]',
								desa='$_POST[desa]',
								kec='$_POST[kec]',
								kab='$_POST[kab]',
								kodepos='$_POST[kodepos]',
								tlp='$_POST[tlp]',
								sekolah_asl='$_POST[sekolah_asl]',
								th_ijasah='$_POST[th_ijasah]',
								n_us='$_POST[n_us]',
								ayah='$_POST[ayah]',
								payah='$_POST[payah]',
								ibu='$_POST[ibu]',
								pibu='$_POST[pibu]'
								WHERE nisn='$_GET[nisn]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";

}else{

if($_GET[gb]==''){
$tanggal=date("dmYhis");
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/pendaftar/".$tanggal.".jpg");
mysql_query("UPDATE pendaftaran SET 							
								nisn='$_POST[nisn]',
								password = '$pass',
								nama='$_POST[nama]',
								tmpt_l='$_POST[tmpt_l]',
								tgl_l='$_POST[tgl_l]',
								jk='$_POST[jk]',
								agama='$_POST[agama]',
								alamat='$_POST[alamat]',
								rt='$_POST[rt]',
								rw='$_POST[rw]',
								desa='$_POST[desa]',
								kec='$_POST[kec]',
								kab='$_POST[kab]',
								kodepos='$_POST[kodepos]',
								tlp='$_POST[tlp]',
								sekolah_asl='$_POST[sekolah_asl]',
								th_ijasah='$_POST[th_ijasah]',
								n_us='$_POST[n_us]',
								ayah='$_POST[ayah]',
								payah='$_POST[payah]',
								ibu='$_POST[ibu]',
								pibu='$_POST[pibu]',
						
								gambar='$tanggal.jpg'
								WHERE nisn='$_GET[nisn]'");

echo "<script>window.location=('../index.php?aksi=siswa')</script>";
}else{


$a=$_GET['gb'];
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/pendaftar/".$a);
mysql_query("UPDATE pendaftaran SET 
								nisn='$_POST[nisn]',
								password = '$pass',
								nama='$_POST[nama]',
								tmpt_l='$_POST[tmpt_l]',
								tgl_l='$_POST[tgl_l]',
								jk='$_POST[jk]',
								agama='$_POST[agama]',
								alamat='$_POST[alamat]',
								rt='$_POST[rt]',
								rw='$_POST[rw]',
								desa='$_POST[desa]',
								kec='$_POST[kec]',
								kab='$_POST[kab]',
								kodepos='$_POST[kodepos]',
								tlp='$_POST[tlp]',
								sekolah_asl='$_POST[sekolah_asl]',
								th_ijasah='$_POST[th_ijasah]',
								n_us='$_POST[n_us]',
								ayah='$_POST[ayah]',
								payah='$_POST[payah]',
								ibu='$_POST[ibu]',
								pibu='$_POST[pibu]'
								WHERE nisn='$_GET[nisn]'");
echo "<script>window.location=('../index.php?aksi=siswa')</script>";
    }
   }
  } 
}
?>
