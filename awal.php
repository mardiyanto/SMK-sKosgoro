<?php $profil = mysql_query("SELECT * FROM Profil WHERE id_profil='9'");
	$r      = mysql_fetch_array($profil);
?>
	<div class='post'>
        <h2 class='title'><?php echo $r[nama] ?></h2>
		<div class='entry clearfix'>     
           
			<?php	  if ($r['foto']!=''){ ?>
			
			<a href='#'><img width='200' height='114' src='foto/foto_profil/<?php echo $r[foto] ?>' class='alignleft' alt='240850_ikon-google-play-store_663_382' />
				</a>  
	<?php }?><p align='justify'>
<?php echo $r[isi] ?> </p>
        </div>      
    </div>

	<?php
	  $con=mysql_query("SELECT * FROM berita order by id_berita DESC LIMIT 4");
	while($ar=mysql_fetch_array($con)){
		$isi_berita6 = strip_tags($ar['isi']); 
                $isi6 = substr($isi_berita6,0,500); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 
echo"	<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$ar[tanggal] - $ar[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $ar[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='beranda.php?aksi=detail&id=$ar[id_berita]&id_k=$ar[id_kat]' title='$t[judul]' rel='bookmark'>$ar[judul]</a></h2>
		  <div class='entry clearfix'>
	";
 		// Apabila ada gambar dalam berita, tampilkan
    if ($ar['gambar']!=''){
			echo "<a href='beranda.php?aksi=detail&id=$ar[id_berita]&id_k=$ar[id_kat]'><img width='200' height='133' src='foto/data/$ar[gambar]' class='alignleft featured_image wp-post-image' alt='$t[judul]' /></a>";
		}
    echo "<p align='justify'>$isi6</p>
         <div class='readmore'>
            <a href='beranda.php?aksi=detail&id=$ar[id_berita]&id_k=$ar[id_kat]' title='' rel='bookmark'>Read More</a>
        </div>
        </div></div>";
	}
	?>