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
$isi=trim(strip_tags($_POST[alamat]));
$tanggal=date("d-m-Y");
$waktu=date("dmY");
Uploadsiswa($nama_file_unik);
 mysql_query("INSERT INTO pendaftaran(	       
	    no_daftar,
	    nisn,
	    nama,
		jurusan,
	    alamat, 
	    kodepos,
	    tlp,
		gambar,
	    tgl_daftar	    
) values(
	    '$_POST[no_daftar]',
	    '$_POST[nisn]',
	    '$_POST[nama]',
		'$_POST[jurusan]',
	    '$_POST[alamat]',
	    '$_POST[kodepos]',
	    '$_POST[tlp]',
	    '$nama_file_unik',
	   	'$tanggal')");
	    $ok=$_POST[no_daftar];
echo "<script>window.alert('Data berhasil disimpan terimakasih');
         window.location=('beranda.php?aksi=psbupdate&no_daftar=$_POST[no_daftar]')</script>";
	


	

?>