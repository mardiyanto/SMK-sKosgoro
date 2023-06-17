<?php  
///pemanggilan tabel pendaftaran
$data=mysql_query("SELECT * FROM pendaftaran where kelas='I'");
$k=mysql_num_rows($data);


$data2=mysql_query("SELECT * FROM pendaftaran where kelas!=''");
$k2=mysql_num_rows($data2);
///pemanggilan data artikel
$data_art=mysql_query("SELECT * FROM berita ");
$b=mysql_num_rows($data_art);

///pemanggilan data pegawai
$data_p=mysql_query("SELECT * FROM pegawai");
$p=mysql_num_rows($data_p);

///pemanggilan data komentar
$data_k=mysql_query("SELECT * FROM komentar");
$km=mysql_num_rows($data_k);

///pemanggilan data komentar
$data_b=mysql_query("SELECT * FROM bukutamu");
$bm=mysql_num_rows($data_b);

///pemanggilan data komentar
$data_g=mysql_query("SELECT * FROM galeri");
$g=mysql_num_rows($data_g);


?>

