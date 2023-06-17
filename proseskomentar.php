<?
  include "config/koneksi.php";
$tgl=date ('d/m/Y');
$dt=date ('h:i A');



if (empty($_POST[nama]) || empty($_POST[komentar])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }

 elseif (!ereg("[a-z|A-Z]","$_POST[nama]")){
  echo "<script>window.alert('Nama tidak boleh diisi dengan angka atau simbol...!!');
        window.location=('javascript:history.go(-1)')</script>";
   }else{  
 
$isi=trim(strip_tags($_POST['komentar']));
 mysql_query("INSERT INTO komentar(id_berita,id_kat,nama,komentar,tgl,jam)
		   		VALUES('$_POST[id_berita]',
				      '$_POST[id_kat]',
				         '$_POST[nama]',
					'$_POST[komentar]',
					 '$tgl',
					'$dt')");
 echo "<script>window.alert('Komentar Berhasil Dikirim');
        window.location=('beranda.php?aksi=detail&id=$_POST[id_berita]&id_k=$_POST[id_kat]')</script>";		 
}
?>