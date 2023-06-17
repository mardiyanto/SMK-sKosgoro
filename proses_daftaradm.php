<?php
error_reporting(0);
session_start();	
  include "config/koneksi.php";
  include "config/fungsi_thumb.php";

 $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;
  $pass=md5($_POST[pass]);
  
////to KK image
   $lokasi_file1    = $_FILES['kk']['tmp_name'];
  $tipe_file1      = $_FILES['kk']['type'];
  $nama_file1      = $_FILES['kk']['name'];
  $acak1           = rand(1,99);
  $nama_file_unik1 = $acak1.$nama_file1;
  
  ////to ijasah image
   $lokasi_file2    = $_FILES['ijasah']['tmp_name'];
  $tipe_file2      = $_FILES['ijasah']['type'];
  $nama_file2      = $_FILES['ijasah']['name'];
  $acak2           = rand(1,99);
  $nama_file_unik2 = $acak2.$nama_file2;
  
   ////to skhu image
   $lokasi_file3    = $_FILES['skhu']['tmp_name'];
  $tipe_file3      = $_FILES['skhu']['type'];
  $nama_file3      = $_FILES['skhu']['name'];
  $acak3           = rand(1,99);
  $nama_file_unik3 = $acak3.$nama_file3;
  
   ////to akte image
   $lokasi_file4    = $_FILES['akte']['tmp_name'];
  $tipe_file4      = $_FILES['akte']['type'];
  $nama_file4      = $_FILES['akte']['name'];
  $acak4           = rand(1,99);
  $nama_file_unik4 = $acak4.$nama_file4;
  
  
  
  
  
if(!empty($_POST['kode'])){
  if($_POST['kode']==$_SESSION['captcha_session']){
  
  function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
 
$isi=trim(strip_tags($_POST[alamat]));
$tanggal=date("dmYhis");
$waktu=date("dmY");
Uploadsiswa($nama_file_unik);
Uploadkk($nama_file_unik1);
Uploadijasah($nama_file_unik2);
Uploadskhu($nama_file_unik3);
Uploadakte($nama_file_unik4);
 mysql_query("INSERT INTO pendaftaran(	       
	    no_daftar,
	    nisn,
	    pass,
	    nama,
		jurusan,
	    tmpt_l,
	    tgl_l,
	    jk,
	    agama,
	    alamat,
	    rt,
	    rw,
	    desa,
	    kec,
	    kab,
	    kodepos,
	    tlp,
	   sekolah_asl,
	    th_ijasah,
	    gambar,
	    kk,
	    skhu,
	    akte,
	    ijasah,
	    n_us,
	    ayah,
	    payah,
	    ibu,
	    pibu,
		kelas,
	    tgl_daftar	    
) values(
	    '$_POST[no_daftar]',
	    '$_POST[nisn]',
	    '$pass',
	    '$_POST[nama]',
		'$_POST[jurusan]',
	    '$_POST[tmpt_l]',
	    '$_POST[tgl_l]',
	    '$_POST[jk]',
	    '$_POST[agama]',
	    '$isi',
	    '$_POST[rt]',
	    '$_POST[rw]',
	    '$_POST[desa]',
	    '$_POST[kec]',
	    '$_POST[kab]',
	    '$_POST[kodepos]',
	    '$_POST[tlp]',
	    '$_POST[sekolah_asl]',
	    '$_POST[th_ijasah]',
	    '$nama_file_unik',
	    '$nama_file_unik1',
	    '$nama_file_unik3',
	    '$nama_file_unik4',
	    '$nama_file_unik2',	    
	    '$_POST[n_us]',
	    '$_POST[ayah]',
	    '$_POST[payah]',
	    '$_POST[ibu]',
	    '$_POST[pibu]',
		'$_POST[kelas]',
	   	'$tanggal')");
	    $ok=$_POST[no_daftar];
echo "<script>window.alert('Data berhasil disimpan terimakasih');
         window.location=('adminweb/index.php?aksi=siswa')</script>";
		
	}
else{
echo "<script>window.alert('Kode yang Anda masukkan tidak cocok');
        window.location=('javascript:history.go(-1)')</script>";

}
}else{
echo "<script>window.alert('Anda belum memasukkan kode');
        window.location=('javascript:history.go(-1)')</script>";

}

	

?>