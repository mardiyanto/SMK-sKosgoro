<?
$posting=mysql_query("SELECT COUNT(id_berita)as b FROM berita");
$post=mysql_fetch_array($posting);

$kategori=mysql_query("SELECT COUNT(id_kategori)as ka FROM kategori");
$kate=mysql_fetch_array($kategori);

$bukutamu=mysql_query("SELECT COUNT(id_bukutm)as kt FROM bukutamu WHERE status='Y' ");
$buk=mysql_fetch_array($bukutamu);

$bukutamu2=mysql_query("SELECT COUNT(id_bukutm)as kt2 FROM bukutamu WHERE status='N' ");
$buk2=mysql_fetch_array($bukutamu2);

$galeri=mysql_query("SELECT COUNT(id_galeri)as ga FROM galeri");
$gale=mysql_fetch_array($galeri);
?>