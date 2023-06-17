<?
  include "config/koneksi.php";
$tgl=date ('d/m/Y');
$dt=date ('h:i A');
if($_POST[cek]!='yes'){
   echo "<script>window.alert('Data yang ada masukan spam ');
        window.location=('kontak.php')</script>";	
}else{ 

$kar1=strstr($_POST[email], "@");
$kar2=strstr($_POST[email], ".");
if (empty($_POST[nama]) || empty($_POST[email]) || empty($_POST[isi])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }

 elseif (!ereg("[a-z|A-Z]","$_POST[nama]")){
  echo "<script>window.alert('Nama tidak boleh diisi dengan angka atau simbol...!!');
        window.location=('javascript:history.go(-1)')</script>";
   }
 elseif (strlen($kar1)==0 OR strlen($kar2)==0){
  echo "<script>window.alert('Format email salah...!!');
        window.location=('javascript:history.go(-1)')</script>";
}else{  
 
$isi=trim(strip_tags($_POST['isi']));
 mysql_query("INSERT INTO bukutamu(nama,email,http,isi_buku,status,tanggal,jam)
		   								VALUES('$_POST[nama]',
											   '$_POST[email]',
											   '$_POST[http]',
											   '$isi',
											   'N',
											   '$tgl',
											   '$dt')");
  echo "<script>window.alert('terimakasi $_POST[nama] atas informasi masukan dari anda ?');
        window.location=('kontak.php')</script>";											   
}
}
?>