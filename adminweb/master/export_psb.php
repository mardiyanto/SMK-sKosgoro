<?php
include "../../config/koneksi.php";
$nama_file = date('Y-m-d').date('h:m:s').'_laporan_data_calon_siswa.xls';
	header('Pragma: public');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0,pre-check=0');
	header('Content-Type: application/force-download');
	header('Content-Type: application/octet-stream');
	header('Content-Type: application/download');
	header('Content-Disposition: attachment;filename='.$nama_file.'');
	header('Content-Transfer-Encoding: binary ');
?>
<table bordercolor='#807D79' width='100%' border='1' cellpadding='5' cellspacing='0'>
<tr><td>No.</td><td>Calon Siswa</td><td>Alamat</td><td>Tempat Lahir</td><td>Tanggal Lahir</td><td>Asal Sekolah</td><td>Nilai US</td><td>Nama Orang Tua</td><td>Alamat Orang Tua</td>
<td>Tanggal Daftar</td>
<?php
$q = mysql_query('select * from pendaftaran order by no_daftar ASC');
$n = 1;
$hitung=mysql_numrows($q);
while($r = mysql_fetch_array($q))
{
	if($hitung > 100){ $warna='#D87676'; } else {$warna='#B3D577';}
	echo "<tr bgcolor='$warna'>
	<td>$n</td>
	<td>$r[nama]</td>
	<td>$r[alamat]</td>
	<td>$r[tmpt_l]</td>
	<td>$r[tgl_l]</td>
	<td>$r[sekolah_asl]</td>
	
	<td>$r[n_us]</td>
	<td>$r[ayah]</td>
	<td>$r[alamat]</td>
	<td>$r[tgl_daftar]</td>
	
	</tr>";
	$n++;
}
?>
</table>
