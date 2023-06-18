<?php   session_start();?>
<?
if($aksi=='detail'){
$detail=mysql_query(" SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d=mysql_fetch_array($detail); 

echo"
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$d[tanggal] - $d[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $d[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='beranda.php?aksi=detail&id=$d[id_berita]&id_k=$d[id_kat]' title='$d[judul]' rel='bookmark'>$d[judul]</a></h2>
		  <div class='entry clearfix'>";
		 if($d[gambar] !=0){echo" <a href='beranda.php?aksi=detail&id=$d[id_berita]&id_k=$d[id_kat]'>
		  <img width='300' height='172' src='foto/data/$d[gambar]' class='alignleft featured_image wp-post-image' alt='$d[judul]' /></a>";}else{echo"";}	

echo"
		  <p align='justify'>$d[isi]</p>
              </div></div>
<strong>Berita Lainnya</strong>
<ul>";
	$terkait=mysql_query(" SELECT * FROM berita  LIMIT 10");
	while ($te=mysql_fetch_array($terkait)){
	echo"
	<li><a href='beranda.php?aksi=detail&id=$te[id_berita]&id_k=$te[id_kat]'>$te[judul]</a></li>";
	  }
echo"</ul>
<div id='content-attribute'>
<span style='float:left; width:200px; text-align:left;'>$d[tanggal] - $d[jam]&nbsp;&nbsp;</span>
<span style='float:right; width:390px; text-align:right;'>Dibaca: <strong>$d[dilihat]</strong> kali
<script language='javascript'>
document.write('<a href='http://twitter.com/home/?status=' + document.URL + '' target='_blank'> Twitter</a> | <a href='http://www.facebook.com/share.php?u=' + document.URL + '' target='_blank'> Facebook</a> ');
</script></span>
<div class='cleaner_h0'></div></div>	";

$komen=mysql_query("SELECT * FROM komentar WHERE id_berita='$_GET[id]' AND status='Y'");
echo"
<div class='batas'></div>
<div class='komen'>
<p class='jk'>Komentar Berita</p>";
if($komen==''){
echo"<p style='font-style:italic;'>Komentar Belum ada</p>";

}else{
while($tamu=mysql_fetch_array($komen)){
echo"<p style='font-weight:bold; color:#000080;'>$tamu[nama]</p>
<p style='font-weight:normal; color:#000080;'>$tamu[tgl] , $tamu[jam]</p>
<p><b>Isi Komentar :</b> <i>$tamu[komentar]</i> </p>";		
}
echo"</div>";
}

echo"
<div id='content-attribute'>
<strong>APA KOMENTAR ANDA...???</strong>
<div class='cleaner_h0'></div>
</div>
<div class='cleaner_h10'></div>
<div id='comment-box'>
<form method='post' action='proseskomentar.php'>
<table width='100%' cellpadding='5' cellspacing='0' border='0'>
<tr><td>Nama Lengkap</td><td>:</td><td><input type='text' name='nama' class='form-control' /></td></tr>
<tr><td>Komentar Anda</td><td>:</td><td><textarea class='form-control' name='komentar' /></textarea></td></tr>
<tr><td></td><td></td><td><input type='image' src='images/kirim.png' /> <input type='image' src='images/batal.png' /></td></tr>
 <input type='hidden' name='id_berita' value='$d[id_berita]'>
  <input type='hidden' name='id_kat' value='$d[id_kat]'>
</table>
</form>
<div class='cleaner_h10'></div>
<div id='footnote-comment-box'>
Redaksi menerima komentar terkait artikel yang ditayangkan. Isi komentar menjadi tanggung jawab pengirim. Pembaca berhak melaporkan komentar jika dianggap tidak etis, kasar, berisi fitnah, atau berbau SARA. Redaksi akan menilai laporan dan berhak memberi peringatan dan menutup akses terhadap pemberi komentar.
</div>
</div>
";

}	
	
		
elseif($aksi=='ok'){
	$con=mysql_query("SELECT * FROM pendaftaran WHERE no_daftar='$_GET[no_daftar]'");
	$ok=mysql_fetch_array($con);
echo"
<div align='center'
style='background-color:#ffffff; hegith:40px;'>	
<h3>Pendaftaran Berhasil</h3></br></br>

<center>

<h4>Biodata</h4>

<img src='foto/pendaftar/$ok[gambar]'></br></br>
 <b>$ok[nama]</b></br></br>
 <b>NISN : $ok[nisn]</b></br>
 <p>1. Pendaftaran Berhasil Silahkan cetak kartu pendaftaran</p>
 <p>2. Proses Selanjutnya yaitu Melakukan datang kesekolah untuk mengupul formulir dan persyaratan</p>
 <p>3. Untuk Tahap Akhir Yaitu Silahkan CEK Keterangan Kelulusan </p>
</center>
<h4><a href='cetak_daftar.php?no_daftar=$ok[no_daftar]' target='_blank' class='cetak' >cetak</a></h4></br>
</div>
";		
}		


elseif($aksi=='psb'){

$tanggal=date("dmY");
echo"

<div class='tab_wrap'>

            <ul class='tabs-widget tabs-widget-widget-themater_tabs-1-id'>
                                        <li><a href='#widget-themater_tabs-1-id1' title='Recent Posts'>STEP (1)</a></li>
                                            <li><a href='#widget-themater_tabs-1-id2' title='Comments'>STEP (2)</a></li>
                                            <li><a href='#widget-themater_tabs-1-id3' title='Tags'>STEP (3)</a></li>

                                </ul>
<div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-1-id' id='widget-themater_tabs-1-id1'>
                                        <div class='posts-widget'><ul>
								<div class=kotak>
   
   <center><img src='images/daftar.jpg' width=250 style='margin-top:10px;'></center>
<h4 style='color:#FF6600; font-weigth:bold; text-align:left; margin-top:9px; margin-bottom:-3px;'>PPDB ONLINE</h4>
<h4 style='color:#FF6600; font-weigth:bold; text-align:left; margin-top:9px; margin-bottom:-3px;'>PPDB Online, adalah sebuah sistem yang dirancang untuk melakukan otomasi seleksi penerimaan siswa baru (PSB), mulai dari proses pendaftaran, proses seleksi hingga pengumuman hasil seleksi, yang dilakukan secara online dan berbasis waktu nyata (realtime).</h4>
<p style='font-size:14px; border:1px dotted #CCC; padding:5px;'>
1. Pengisian data diri harus lengkap dan benar sebagaimana data diri yang tertera pada ijasah tingkat sebelumnya.</br>
2. Cermati dan teliti saat pengiian formulir registrasi</br>
3. GRATIS biaya pendaftaran jika dilakukan melalui media online dalam proses pendafatarnnya.</br>
4. CALON SISWA hanya bisa mendaftar 1 kali melalui pendafataran online atau datang ke kantor $r3[nama]</br>
</p>

 </div>
	</ul>
			</div>
                 </div>
								
<div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-1-id' id='widget-themater_tabs-1-id2'>
     <div class='comments-widget'><ul>
								<div class=kotak>
        <h4>Alur Proses Pendaftaran</h4>
	<img src='images/alurok.png' width=600>
	<p> Apabila sudah memahami dapat melanjutkan ke halaman <strong style='color:#0000ff;	'>STEP (3)</strong></p>
    
       </div>
					</ul>
					</div>
                                </div>
								
                                    <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-1-id' id='widget-themater_tabs-1-id3'>
                   <div class='comments-widget'>

<div class=kotak>
	
				
  <form name='form1' method='post' class='AdvancedForm' enctype='multipart/form-data' action='proses_daftar.php' onSubmit='return validasi_daftar(this)'>
  <input type='hidden' value='$tanggal' name='tgl_daftar'>
    <table class='table table-bordered table-striped'>
      <tr>
    <h4>Formulir Pendaftaran </h4>
        <td colspan='2' valign='top'><div align='center'>
         $r3[nama]<br />

$r3[alamat]<br/></br>
        </div></td>
      </tr>";
  $i=date("y");   
$sql = @mysql_query('SELECT RIGHT(no_daftar ,3) AS no_daftar  FROM pendaftaran ORDER BY no_daftar DESC LIMIT 1') or die('Error : '.mysql_error());
 
$num = mysql_num_rows($sql);
 
if($num <> 0)
 {
 $data = mysql_fetch_array($sql);
 $kode = $data['no_daftar'] + 1;
 }else
 {
 $kode = 1;
 }
 
//mulai bikin kode
 $bikin_kode = str_pad($kode, 3, "0", STR_PAD_LEFT);
 $kode_jadi = "$bikin_kode";
 

     
       echo" <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>A. Identitas Calon Peserta Didik </div></td>
      </tr>
      
           <tr>
        <td width='249' valign='middle'><strong>Nomor Pendaftaran</strong></td>
        <td width='453' valign='top'><label>
	     <input type='text' value='SMK-$i-$kode_jadi' size='11' maxlength='11'readonly style='border:1px solid #999999;background:#ebebeb;'/>
		 <input name='no_daftar' type='hidden' value='SMK-$i-$kode_jadi'>
        </label></td>
      </tr>
      
      
      
      <tr>
        <td width='249' valign='middle'><strong>NISN</strong></td>
        <td width='453' valign='top'>
	
	<label>
          <input name='nisn' type='text' size='10' id='ValidNisn' maxlength='10' />
        </label>
	</td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Nama Lengkap </strong></td>
        <td valign='top'><input name='nama' type='text' size='40' id='Namalengkap'/></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Tempat Lahir</strong></td>
        <td valign='top'><input name='tmpt_l' type='text' size='40' id='Validtempat' required/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Tanggal Lahir</strong></td>
        <td valign='top'><input name='tgl_l'  type='date' size='10' id='datepicker'/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Jenis Kelamin</strong></td>
        <td valign='top'><label>
          <select name='jk' id='Validjk'>
		  <option value='0' selected='selected'>--Jenis Kelamin</option>
            <option value='laki-laki'>Laki-Laki</option>
            <option value='perempuan'>perempuan</option>
                   </select>
        </label></td>
      </tr>
      <tr>
        <td valign='middle'><strong>Agama</strong></td>
        <td valign='top'>
	
	<select name='agama' id='Validagama'>
            <option value='0'>----Pilih Agama----</option>
            <option value='ISLAM'>ISLAM</option>
            <option value='PROTESTAN'>PROTESTAN</option>
            <option value='KATOLIK'>KATOLIK</option>
            <option value='HINDU'>HINDU</option>
            <option value='BUDHA'>BUDHA</option>
          </select>
	</td>
      </tr>
                  
       <tr>
        <td valign='top'><strong> </strong></td>
        <td valign='top'><label>
          RT <input name='rt' type='text' size='2' id='ValidNumber'  /> / RW <input name='rw' type='text' size='2' id='ValidNumber'  />
        </label></td>
      </tr>
      
    
      
      <tr>
        <td valign='middle'><strong>Desa / Kelurahan</strong></td>
        <td valign='top'><input name='desa' type='text' size='40' id='ValidField' /></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Kecamatan</strong></td>
        <td valign='top'><input name='kec' type='text' size='30' id='ValidField'/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Kabupaten</strong></td>
        <td valign='top'><input name='kab' type='text' size='30' id='ValidField'/></td>
      </tr>
      
            <tr>
        <td valign='middle'><strong>Kode Pos</strong></td>
        <td valign='top'><input name='kodepos' type='text' size='10' maxlength='5' id='Validkodepos'/></td>
      </tr>
      
         <tr>
        <td valign='middle'><strong>Telephone</strong></td>
        <td valign='top'><input name='tlp' type='text' size='30' maxlength='12'/></td>
      </tr>
      
      
       <tr>
        <td valign='middle'><strong>Sekolah Asal</strong></td>
        <td valign='top'><input name='sekolah_asl' type='text' size='40' /></td>
      </tr>
      
    <tr>
        <td valign='middle'><strong>Tahun Ijasah</strong></td>
        <td valign='top'><input name='th_ijasah' type='text' size='5' /></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Jumlah NEM</strong></td>
        <td valign='top'><input name='n_us' type='text' size='5' /></td>
      </tr>
      
    
             
       <tr>
      <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>A. 
      Lampiran Persyaratan </div></td>
      
    </tr> 
             
      <tr>
      <td valign='middle'><strong>Fhoto Pendaftar</strong></td>
      <td valign='top'><input type='file' name='fupload'>
       </tr>

       
        <tr>
      <td valign='middle'><strong>Ijasah *</strong></td>
      <td valign='top'><input type='file' name='ijasah'>
       </tr>
       
       
        <tr>
      <td valign='middle'><strong>SKHU *</strong></td>
      <td valign='top'><input type='file' name='skhu'>
       </tr>
       
        <tr>
      <td valign='middle'><strong>KK</strong></td>
      <td valign='top'><input type='file' name='kk'>
       </tr>
       
        <tr>
      <td valign='middle'><strong>Akte Kelahiran</strong></td>
      <td valign='top'><input type='file' name='akte'>
       </tr>

    <tr>
      <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>B. 
      Identitas Orang Tua / wali Peserta Didik </div></td>
      
    </tr> 

  <tr>
        <td valign='middle'><strong>Nama Ayah</strong></td>
        <td valign='top'><input name='ayah' type='text' size='40' id='Ayah' /></td>
      </tr>

  <tr>
        <td valign='middle'><strong>Pekerjaan Ayah</strong></td>
        <td valign='top'><input name='payah' type='text' size='40' id='payah' /></td>
  </tr>


   <tr>
        <td valign='middle'><strong>Nama Ibu</strong></td>
        <td valign='top'><input name='ibu' type='text' size='40' id='ibu' /></td>
      </tr>

  <tr>
        <td valign='middle'><strong>Pekerjaan Ibu</strong></td>
        <td valign='top'><input name='pibu' type='text' size='40' id='pibu' /></td>
  </tr>
      
      <tr>
        <td valign='top'><strong>Alamat Orang Tua wali</strong></td>
        <td valign='top'><label>
          <textarea name='alamat' cols='32' rows='6' id='ValidField' ></textarea>
        </label></td>
      </tr>

        <tr>
        <td valign='middle'><strong>Kode Pengaman </strong></td>
        <td valign='top'><img src='captcha.php'></td>
      </tr>
      <tr>
        <td valign='middle'>&nbsp;</td>
        <td valign='top'><label>
          <input name='kode' type='text' size='5' />
        </label></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Password Login</strong></td>
        <td valign='top'><input name='pass' type='password' size='40' id='pibu' /></td>
  </tr>
      
      <tr>
        <td valign='top'>&nbsp;</td>
        <td valign='top'><label>
          <br />
          <br />
          <input type='submit' name='Submit' value='Kirim' />
          <input type='reset' name='Submit2' value='Reset' />
        </label></td>
      </tr>
    </table>
    
  </form>
  </div>



										</div>
                                </div>
								
								
                        </li>
						


</div>	";


}
	
elseif($aksi=='psbupdate'){
$con=mysql_query("SELECT * FROM pendaftaran WHERE no_daftar='$_GET[no_daftar]'");
$r=mysql_fetch_array($con);	
$tanggal=date("D-M-Y");
echo"
<div class=kotak>			
  <form name='form1' method='post' class='AdvancedForm' enctype='multipart/form-data' action='beranda.php?aksi=updatepsb&no_daftar=$r[no_daftar]' onSubmit='return validasi_daftar(this)'>
  <input type='hidden' value='$tanggal' name='tgl_daftar'>
    <table class='table table-bordered table-striped'>
      <tr>
    <h4>Formulir Pendaftaran </h4>
        <td colspan='2' valign='top'><div align='center'>
         $r3[nama]<br />
$r3[alamat]<br/></br>
        </div></td>
      </tr>";

       echo" <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>A. Identitas Calon Peserta Didik </div></td>
      </tr>
      
           <tr>
        <td width='249' valign='middle'><strong>Nomor Pendaftaran</strong></td>
        <td width='453' valign='top'><label>
	     <input type='text' value='$r[no_daftar]' size='11' maxlength='11'readonly style='border:1px solid #999999;background:#ebebeb;'/>
		 <input name='no_daftar' type='hidden' value='$r[no_daftar]'>
        </label></td>
      </tr>
      
      
      
      <tr>
        <td width='249' valign='middle'><strong>NISN</strong></td>
        <td width='453' valign='top'>
	
	<label>
          <input name='nisn' value='$r[nisn]' type='text' size='10' id='ValidNisn' maxlength='10' />
        </label>
	</td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Nama Lengkap </strong></td>
        <td valign='top'><input name='nama' value='$r[nama]' type='text' size='40' id='Namalengkap'/></td>
      </tr>
                <tr>
        <td valign='middle'><strong>Jurusan</strong></td>
        <td valign='top'>
	
	<select name='jurusan' id='Validagama'>
            <option value='$r[jurusan]'>$r[jurusan]</option>
            <option value='Farmasi'>Farmasi</option>
											<option value='Perhotelan'>Perhotelan</option>
											<option value='RPL'>Rekayasa Perangkat Lunak</option>
          </select>
	</td>
      </tr>
	  	          <tr>
        <td valign='middle'><strong>Telephone</strong></td>
        <td valign='top'><input name='tlp' value='$r[tlp]' type='text' size='30' maxlength='12'/></td>
      </tr>
   
            <tr>
        <td valign='middle'><strong>Kode Pos</strong></td>
        <td valign='top'><input name='kodepos' value='$r[kodepos]' type='text' size='10' maxlength='5' id='Validkodepos'/></td>
      </tr>
        <tr>
        <td valign='middle'><strong>Sekolah Asal</strong></td>
        <td valign='top'><input name='sekolah_asl' type='text' size='40' /></td>
      </tr>
       <tr>
        <td valign='middle'><strong>Tempat Lahir</strong></td>
        <td valign='top'><input name='tmpt_l'  type='text' size='40' id='Validtempat' required/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Tanggal Lahir</strong></td>
        <td valign='top'><input name='tgl_l'  type='date' size='10' id='datepicker'/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Jenis Kelamin</strong></td>
        <td valign='top'><label>
          <select name='jk' id='Validjk'>
		  <option value='0' selected='selected'>--Jenis Kelamin</option>
            <option value='laki-laki'>Laki-Laki</option>
            <option value='perempuan'>perempuan</option>
                   </select>
        </label></td>
      </tr>
      <tr>
        <td valign='middle'><strong>Agama</strong></td>
        <td valign='top'>
	
	<select name='agama' id='Validagama'>
            <option value='0'>----Pilih Agama----</option>
            <option value='ISLAM'>ISLAM</option>
            <option value='PROTESTAN'>PROTESTAN</option>
            <option value='KATOLIK'>KATOLIK</option>
            <option value='HINDU'>HINDU</option>
            <option value='BUDHA'>BUDHA</option>
          </select>
	</td>
      </tr>
  
       <tr>
        <td valign='top'><strong> </strong></td>
        <td valign='top'><label>
          RT <input name='rt' type='text' size='2' id='ValidNumber'  /> / RW <input name='rw' type='text' size='2' id='ValidNumber'  />
        </label></td>
      </tr>
      
    
      
      <tr>
        <td valign='middle'><strong>Desa / Kelurahan</strong></td>
        <td valign='top'><input name='desa' type='text' size='40' id='ValidField' /></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Kecamatan</strong></td>
        <td valign='top'><input name='kec' type='text' size='30' id='ValidField'/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Kabupaten</strong></td>
        <td valign='top'><input name='kab' type='text' size='30' id='ValidField'/></td>
      </tr>
      


    <tr>
        <td valign='middle'><strong>Tahun Ijasah</strong></td>
        <td valign='top'><input name='th_ijasah' type='text' size='5' /></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Jumlah NEM</strong></td>
        <td valign='top'><input name='n_us' type='text' size='5' /></td>
      </tr>
       
    <tr>
      <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>B. 
      Identitas Orang Tua / wali Peserta Didik </div></td>
      
    </tr> 

  <tr>
        <td valign='middle'><strong>Nama Ayah</strong></td>
        <td valign='top'><input name='ayah' type='text' size='40' id='Ayah' /></td>
      </tr>

  <tr>
        <td valign='middle'><strong>Pekerjaan Ayah</strong></td>
        <td valign='top'><input name='payah' type='text' size='40' id='payah' /></td>
  </tr>


   <tr>
        <td valign='middle'><strong>Nama Ibu</strong></td>
        <td valign='top'><input name='ibu' type='text' size='40' id='ibu' /></td>
      </tr>

  <tr>
        <td valign='middle'><strong>Pekerjaan Ibu</strong></td>
        <td valign='top'><input name='pibu' type='text' size='40' id='pibu' /></td>
  </tr>
      
      <tr>
        <td valign='top'><strong>Alamat Orang Tua wali</strong></td>
        <td valign='top'><label>
          <textarea name='alamat' cols='32' rows='6' id='ValidField' ></textarea>
        </label></td>
      </tr>      
       <tr>
        <td valign='middle'><strong>Password Login</strong></td>
        <td valign='top'><input name='pass' type='password' size='40' id='pibu' /></td>
  </tr>
      
      <tr>
        <td valign='top'>&nbsp;</td>
        <td valign='top'><label>
          <br />
          <br />
          <input type='submit' name='Submit' value='Kirim' />
          <input type='reset' name='Submit2' value='Reset' />
        </label></td>
      </tr>
    </table>
    
  </form>
  </div>
";
}
elseif($aksi=='updatepsb'){
mysql_query("UPDATE pendaftaran SET 				
								nisn='$_POST[nisn]',
								tmpt_l='$_POST[tmpt_l]',
								tgl_l='$_POST[tgl_l]',
								jk='$_POST[jk]',
								agama='$_POST[agama]',
								rt='$_POST[rt]',
								rw='$_POST[rw]',
								desa='$_POST[desa]',
								kec='$_POST[kec]',
								kab='$_POST[kab]',
								sekolah_asl='$_POST[sekolah_asl]',
								th_ijasah='$_POST[th_ijasah]',
								n_us='$_POST[n_us]',
								ayah='$_POST[ayah]',
								payah='$_POST[payah]',
								ibu='$_POST[ibu]',
								pibu='$_POST[pibu]',
								kelas='new'
								WHERE no_daftar='$_GET[no_daftar]'");
echo "<script>window.alert('Data berhasil disimpan terimakasih');
         window.location=('beranda.php?aksi=ok&no_daftar=$_POST[no_daftar]')</script>";
}


elseif($aksi=='artikel'){
	$con=mysql_query("SELECT * FROM berita order by id_berita DESC");
	while($ar=mysql_fetch_array($con)){
		$isi_berita6 = strip_tags($ar['isi']); 
                $isi6 = substr($isi_berita6,0,500); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 
		
echo"
<div class='post'>
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
echo"<div align=center >$linkHalaman</div>
";
}

}	


elseif ($aksi=='kategori'){
$kate2=mysql_query(" SELECT * FROM berita,kategori WHERE id_kat=id_kategori AND id_kat='$_GET[id_k]'");
$we=mysql_fetch_array($kate2);
  $p      = new Paging3;
  $batas  = 4;
  $posisi = $p->cariPosisi($batas); 		  
$kate=mysql_query(" SELECT * FROM berita WHERE id_kat='$_GET[id_k]' ORDER BY id_berita DESC LIMIT $posisi,$batas");
$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kat='$_GET[id_k]'"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

				

  $ada = mysql_num_rows($kate);
  
  if ($ada > 0) {
while ($ta=mysql_fetch_array($kate)){

                $isi_berita6 = strip_tags($ta['isi']); 
                $isi6 = substr($isi_berita6,0,500); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 
echo"
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$ta[tanggal] - $ta[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $ta[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='beranda.php?aksi=detail&id=$ta[id_berita]&id_k=$ta[id_kat]' title='$ta[judul]' rel='bookmark'>$ta[judul]</a></h2>
		  <div class='entry clearfix'>
";
 		// Apabila ada gambar dalam berita, tampilkan
    if ($ta['gambar']!=''){
			echo "<a href='beranda.php?aksi=detail&id=$ta[id_berita]&id_k=$ta[id_kat]'><img width='200' height='133' src='foto/data/$ta[gambar]' class='alignleft featured_image wp-post-image' alt='$t[judul]' /></a>";
		}
    echo "<p align='justify'>$isi6</p>
         <div class='readmore'>
            <a href='beranda.php?aksi=detail&id=$ta[id_berita]&id_k=$ta[id_kat]' title='' rel='bookmark'>Read More</a>
        </div>
        </div></div>";
}
}else{
echo"<div id='detail-category'>
           <strong>TIDAK ADA DATA PADA KATEGORI INI</strong>
          </div>";

}
echo"<div class='cleaner_h10'></div>

<div align=center >$linkHalaman</div>";
		
		  
}







  elseif($aksi=='pencarian'){
  $kata = trim($_POST['kata']);
  // mencegah XSS
  $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);

  // pisahkan kata per kalimat lalu hitung jumlah kata
  $pisah_kata = explode(" ",$kata);
  $jml_katakan = (integer)count($pisah_kata);
  $jml_kata = $jml_katakan-1;

  $cari = "SELECT * FROM berita WHERE " ;
    for ($i=0; $i<=$jml_kata; $i++){
      $cari .= "isi LIKE '%$pisah_kata[$i]%' OR judul LIKE '%$pisah_kata[$i]%'";
      if ($i < $jml_kata ){
        $cari .= " OR ";
      }
    }
  $cari .= " ORDER BY id_berita DESC LIMIT 7";
  $hasil  = mysql_query($cari);
  $ketemu = mysql_num_rows($hasil);

  if ($ketemu > 0){
  echo "
  
  
  
  <h3>Ditemukan $ketemu dengan kata : <font><b>$kata</b></font></h3>
<div id='detail-category'>";
     while($cr=mysql_fetch_array($hasil)){
      // Tampilkan hanya sebagian isi produk
      $isi_produk7 = htmlentities(strip_tags($cr['isi'])); // mengabaikan tag html
      $isi7 = substr($isi_produk7,0,280); // ambil sebanyak 250 karakter
      $isi7 = substr($isi_produk7,0,strrpos($isi7," ")); // potong per spasi kalimat
    	  echo "

	    <h1><a href='beranda.php?aksi=detail&id=$cr[id_berita]&id_k=$cr[id_kat]' class=link1 >$cr[judul]</a></h1>
	   
			 <div id='detail-category-time'>
			  $cr[tanggal] - $cr[jam]&nbsp;&nbsp; |&nbsp; dibaca : $cr[dilihat] kali.</div><br />";
			  if($cr[gambar] !=0){echo" <img src=foto/data/$cr[gambar]  class=box-shadow2 width=100 height=80 align=left />";}else{echo"";}	
			 
			  echo"<p style='text-align:justify;'>$isi7..</p><div class='cleaner_h0'></div>";		                    
      }
      echo"</div>";
    }                                                          
  else{
    echo "
	   <h3>Tidak Ditemukan dengan kata <font><b>$kata</b></font></h3>
	 <strong>Baca juga artikel dibawah ini :</strong><br /><br />
	 <div id='detail-category'>";
	$bacajuga=mysql_query(" SELECT * FROM berita ORDER BY RAND() LIMIT 4");
while ($z=mysql_fetch_array($bacajuga)){

                $isi_berita7 = strip_tags($z['isi']); 
                $isi7 = substr($isi_berita7,0,310); 
                $isi7 = substr($isi_berita7,0,strrpos($isi7," ")); 
	    echo"
		
	    
	    <h1><a href='beranda.php?aksi=detail&id=$z[id_berita]&id_k=$z[id_kat]' class=link1 >$z[judul]</a></h1>
              
			  <div class='tanggal'>$z[tanggal] - $z[jam]&nbsp;&nbsp; |&nbsp; dibaca : $cr[dilihat] kali.</div><br />";
	if($z[gambar] !=0){echo" <img src=foto/data/$z[gambar]  class=box-shadow2 width=80 height=60 align=left />";}else{echo"";}	
			  
			  echo"<p style='text-align:justify;'>$isi7....</p><div class='cleaner_h0'></div>";	
		  }
	     echo"</div>";
	}
}
//////////////////////////////////
elseif($aksi=='bukutamu'){
echo"    <div class='post clearfix' id='post'>
        <h2 class='title'>Buku Tamu</h2>
        <div class='entry clearfix'>";
if($_GET[cek]=='spam'){
$h=$_GET[nama];
			echo"<div class='error_box'>Maaf $h anda diduga sebagai spam...... </div>";
			}
			
			
if($_GET[cek]=='sukses'){
$h=$_GET[nama];
			echo"<div class='valid_box10'>Terimakasih <font style='color:#ff0000'>$h</font> anda telah mengisi Buku Tamu kami..</div><br />
";
			}	
  $p      = new Paging2;
  $batas  = 5;
  $posisi = $p->cariPosisi($batas); 
$buku=mysql_query("SELECT * FROM bukutamu WHERE status='Y' ORDER BY id_bukutm DESC LIMIT $posisi,$batas");
$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM bukutamu WHERE status='Y' "));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
echo"<div class='valid_box10'><strong>$jmldata </strong> Pesan Anda</div>";
while ($bu=mysql_fetch_array($buku)){
$komen=wordwrap($bu['isi_buku'], 85, "<br />\n", 1);

echo"<div class='top' >
            <h4>$bu[nama]</h4>
              <div>
			  <div class='tanggal'>$bu[tanggal] - $bu[jam]</div><br />
			<em><strong>MENGATAKAN :</strong></em><br />
			  $komen";
		if($bu[jawab]!=''){
		echo"
		<div class='balas'>
		<strong>BALASAN : $bu[tgl]</strong>
		<div class='ad'>ADMIN : <span>$bu[admin]</span></div>
		$bu[jawab]
		</div>
		
		";
		}	  
			  echo"</div>
          </div>";
		  }
		 echo" <div align=center >$linkHalaman </div>";			
			
			
?>
<script language='JavaScript' type='text/javascript'>
function validasi_buku(form){
	        
       nama=/^[a-zA-Z\_\ \-]{3,50}/;
       if (!nama.test(form.nama.value)){
          alert ('Anda belum mengisi Nama atau Nama mengandung angka! Perbaiki dan coba sekali lagi. !');
          form.nama.focus();
          return false;
       }
  
    return (true);
	
 }
	</script> 
<?echo"</br>
<div class='no_login'><strong>APA KOMENTAR ANDA...???</strong></div></br>
<form method='post' action='prosesbuku.php' onSubmit='return validasi_buku(this)'>
<div class='form-title'>Nama Lengkap : </div>
<input class='form-field' type='text' name='nama'  required='required' placeholder='Masukan Nama Anda' /><br />

<div class='form-title'>Email :</div>
<input class='form-field' type='email'name='email'  required='required' placeholder='Masukan Email' /><br />

<div class='form-title'>Komentar Anda :</div>
<textarea class='form-text' name='isi' /></textarea>
<br />
Apakah Anda Yakin ?<input type='checkbox' name='cek' value='yes'>
<input class='submit-button' type='submit' value='Kirim' />
</form>
   
    </div>
</div>
";

}

elseif($aksi=='profil'){
$sj=mysql_query("SELECT * FROM profil WHERE id_profil='3'");

$sjh=mysql_fetch_array($sj);
$vs=mysql_query("SELECT * FROM profil WHERE id_profil='4'");
$hsvs=mysql_fetch_array($vs);
$str=mysql_query("SELECT * FROM profil WHERE id_profil='6'");
$org=mysql_fetch_array($str);
$srn=mysql_query("SELECT * FROM profil WHERE id_profil='8'");
$sarana=mysql_fetch_array($srn);
echo"


            <ul class='tabs-widget tabs-widget-widget-themater_tabs-4-id'>
                                        <li><a href='#widget-themater_tabs-4-id1' title='Recent Posts'>SEJARAH</a></li>
                                            <li><a href='#widget-themater_tabs-4-id2' title='Comments'>VISI & MISI</a></li>
                                            <li><a href='#widget-themater_tabs-4-id3' title='Tags'>STRUKTUR ORGANISASI</a></li>
											<li><a href='#widget-themater_tabs-4-id4' title='Tags'>SARANA DAN PRASARANA</a></li>

                                </ul>
                                          <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-4-id' id='widget-themater_tabs-4-id1'>
                                        <div class='posts-widget'><ul>
								    <div class='post clearfix' id='post'>
        <h2 class='title'>$sjh[nama]</h2>
        <div class='entry clearfix'>
		";
     if($sjh[aktif]=='Y'){
	echo"<img width='300' height='172' src='foto/foto_profil/$sjh[foto]' 
	class='alignleft featured_image wp-post-image' alt='240850_ikon-google-play-store_663_382' />";
	
      }else{
	echo"";
      }
		echo"<p align='justify'>$sjh[isi]</p>
		        </div>
    </div>
								</ul></div>
                                </div>
								
								
 <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-4-id' id='widget-themater_tabs-4-id2'>
     <div class='comments-widget'><ul>
																	    <div class='post clearfix' id='post'>
        <h2 class='title'>$hsvs[nama]</h2>
        <div class='entry clearfix'>
		";
     if($hsvs[aktif]=='Y'){
	echo"<img width='300' height='172' src='foto/foto_profil/$hsvs[foto]' 
	class='alignleft featured_image wp-post-image' alt='240850_ikon-google-play-store_663_382' />";
	
      }else{
	echo"";
      }
		echo"<p align='justify'>$hsvs[isi]</p>
		        </div>
    </div>
					</ul></div>
                                </div>
                                    <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-4-id' id='widget-themater_tabs-4-id3'>
                   <div class='comments-widget'><ul>
                                            <div class='post clearfix' id='post'>
        <h2 class='title'>$org[nama]</h2>
        <div class='entry clearfix'>
		";
     if($org[aktif]=='Y'){
	echo"<img width='610' height='762' src='foto/foto_profil/$org[foto]' 
	class='alignleft featured_image wp-post-image' alt='240850_ikon-google-play-store_663_382' />";
	
      }else{
	echo"";
      }
		echo"<p align='justify'>$org[isi]</p>
		        </div>
    </div>
                                        </ul></div>
                                </div>

<div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-4-id' id='widget-themater_tabs-4-id4'>
                   <div class='comments-widget'><ul>
                                            <div class='post clearfix' id='post'>
        <h2 class='title'>$sarana[nama]</h2>
        <div class='entry clearfix'>
		";
     if($sarana[aktif]=='Y'){
	echo"<img width='300' height='172' src='foto/foto_profil/$sarana[foto]' 
	class='alignleft featured_image wp-post-image' alt='240850_ikon-google-play-store_663_382' />";
	
      }else{
	echo"";
      }
		echo"<p align='justify'>$sarana[isi]</p>
		        </div>
    </div>
                                        </ul></div>
                                </div>

";


}

/////////////////////////
elseif($aksi=='profil'){
  $g = mysql_query("SELECT * FROM profil WHERE id_profil='$_GET[id]' ");
  $w = mysql_fetch_array($g);
    echo"
	<div class='valid_box10'>$w[nama]</div>
	<div class='valid_box2'>";
	if($w[aktif]=='Y'){echo"<img alt='galeri'  src='foto/foto_profil/$w[foto]' width='100%' 
	class='box-shadow2' title='$w[judul]'/><br /><br />";}
    echo"<div align='justify'>$w[isi]</div>
    </div><br />

<div class='cleaner_h10'></div>
<div id='detail-img-with-article1'>
<div class='cleaner_h10'></div>
<strong>Berita Lainnya</strong>
<ul>";
	$terkait=mysql_query(" SELECT * FROM berita ORDER BY RAND() LIMIT 7");
	echo"<div class='top' align=justify >";
	while ($te=mysql_fetch_array($terkait)){
	echo"
	<li><a href='beranda.php?aksi=detail&id=$te[id_berita]&id_k=$te[id_kat]'>$te[judul]</a></li>";
}
	echo"</ul></div>";
}
////////////////
elseif($aksi=='agenda'){
echo"<h3>Agenda kegiatan</h3>";
	if($_GET[id] !=''){
	$agenda2=mysql_query(" SELECT * FROM agenda WHERE id_agenda='$_GET[id]'");
	$d2=mysql_fetch_array($agenda2); 
	echo"
<table class='table table-bordered table-striped'>
  <tr>
    <td colspan='3' class='dated'>Posting : <em>$d2[tgl_posting]</em></td>
  </tr>
  <tr>
    <td colspan='3' class='jd'><strong>$d2[tema]</strong></td>
  </tr>
  <tr>
    <td width='12%' valign='top'>Topik</td>
    <td width='1%' valign='top'>:</td>
    <td width='87%' valign='top'>$d2[isi_agenda]</td>
  </tr>
  <tr>
    <td valign='top'>Tanggal</td>
    <td valign='top'>:</td>
    <td valign='top'>$d2[tgl_mulai] s/d $d2[tgl_selesai]</td>
  </tr>
  <tr>
    <td valign='top'>Pukul</td>
    <td valign='top'>:</td>
    <td valign='top'>$d2[jam]</td>
  </tr>
  <tr>
    <td valign='top'>Tempat</td>
    <td valign='top'>:</td>
    <td valign='top'>$d2[tempat]</td>
  </tr>
  <tr>
    <td valign='top'>Pengirim</td>
    <td valign='top'>:</td>
    <td valign='top'>$d2[pengirim]</td>
  </tr>
</table><br />";
	}
 $p      = new Paging;
  $batas  = 3;
  $posisi = $p->cariPosisi($batas); 
	$agenda3=mysql_query(" SELECT * FROM agenda  WHERE id_agenda !='$_GET[id]' ORDER BY id_agenda DESC LIMIT $posisi,$batas");
	$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM agenda ORDER BY id_agenda DESC"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

	while ($d3=mysql_fetch_array($agenda3)){ 
	echo"
<div class='top' align=justify >
	<table class='table table-bordered table-striped'>
	<tr>
    <td colspan='3' class='dated'>Posting : $d3[tgl_posting]</td>
  </tr>
  <tr>
    <td colspan='3' class='jd'><strong>$d3[tema]</strong></td>
  </tr>
  <tr>
    <td width='12%' valign='top'>Topik</td>
    <td width='1%' valign='top'>:</td>
    <td width='87%' valign='top'>$d3[isi_agenda]</td>
  </tr>
  <tr>
    <td valign='top'>Tanggal</td>
    <td valign='top'>:</td>
    <td valign='top'>$d3[tgl_mulai] s/d $d3[tgl_selesai]</td>
  </tr>
  <tr>
    <td valign='top'>Pukul</td>
    <td valign='top'>:</td>
    <td valign='top'>$d3[jam]</td>
  </tr>
  <tr>
    <td valign='top'>Tempat</td>
    <td valign='top'>:</td>
    <td valign='top'>$d3[tempat]</td>
  </tr>
  <tr>
    <td valign='top'>Pengirim</td>
    <td valign='top'>:</td>
    <td valign='top'>$d3[pengirim]</td>
  </tr>
</table></div>";
		   }
echo"<div align=center >$linkHalaman </div>";
}
///////////////////////////////////////////////////////////////////////////
elseif($aksi=='galeri'){
echo" 	<div class='row justify-content-center mb-5 pb-3'>
          <div class='col-md-7 heading-section ftco-animate text-center'>
            <h2 class='mb-4'>Galeri kami</h2>
          </div>
        </div>
		<div class='row'>
        	<div class='col-md-12 ftco-animate'>
            <div class='carousel-testimony owl-carousel'>
		";
  $p      = new Paging4;
  $batas  = 12;
  $posisi = $p->cariPosisi($batas);

  // Tentukan kolom
  $col = 4;

  $g = mysql_query("SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT $posisi,$batas");
	$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM galeri"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
  $ada = mysql_num_rows($g);
  
  if ($ada > 0) {
  
  $cnt = 0;
  while ($w = mysql_fetch_array($g)){
    if ($cnt >= $col) {
      echo "";
      $cnt = 0;
    }
    $cnt++;

    echo "<div class='item'>
                <div class='testimony-wrap text-center'>";
				?>
                  <a href='#' class='block-20' style="background-image: url('foto/galleri/<?=$w[gambar]?>');">
            <?echo"  </a>
                  <div class='text'>
                     <p class='name'>Galeri</p>
                    <span class='position'>$r3[nama]</span>
                  </div>
                </div>
              </div>

    ";
  }
  echo"		         </div>
          </div>
        </div>";
}
echo "
<div class='cleaner_h10'></div>
<div align=center >$linkHalaman </div>
<div class='cleaner_h10'></div>
<div id='detail-img-with-article1'>
<div class='cleaner_h10'></div>
<strong>Berita Lainnya</strong>
<ul>";
	$terkait=mysql_query(" SELECT * FROM berita ORDER BY RAND() LIMIT 7");
	echo"<div class='top' align=justify >";
	while ($te=mysql_fetch_array($terkait)){
	echo"
	<li><a href='beranda.php?aksi=detail&id=$te[id_berita]&id_k=$te[id_kat]'>$te[judul]</a></li>";
}
	echo"</ul></div>        </div>
   ";
}
/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='pegawai'){
 $p      = new Paging6;
  $batas  = 16;
  $posisi = $p->cariPosisi($batas); 
	$agenda3=mysql_query(" SELECT * FROM pegawai ORDER BY id_gr ASC LIMIT $posisi,$batas");
	$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM pegawai ORDER BY id_gr ASC "));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);


echo"
<div id='detail-category1'>
 <center style='font-weight:bold;color:#191919;
	font-family: dinregular;  margin-bottom:10px;'>
<h3>Data Pegawai</h3>
<div id='outtable'>
<table class='table table-bordered table-striped'>

  <tr >
    <th >No</td>
    <th>Data Pegawai </td>
    <th>Jenis Kelamin </td>
    <th>Status</td>
    <th>Gelar</td>
    <th>Sertifikasi</td>
     <th>Aksi</td>
  </tr>";
while ($t=mysql_fetch_array($agenda3)){ 
$no++;  
  echo"
  <tbody>
  <tr>
    <td  align='center' valign='top'><strong>$no</strong></td>
    <td valign='top' >
	  <strong>$t[nama]</strong><br />
      NIP : $t[nip]<br />
      JABATAN : $t[jabatan]</td>
    <td valign='top' align='center'><strong>$t[kelamin]</strong></td>
    <td valign='top' >$t[status]</td>
    <td valign='top' >$t[tamatan]</td>
    <td valign='top' ><strong>$t[sertifikasi]</strong></td>
    <td valign='top' ><strong><a href='?aksi=detailpegawai&id=$t[id_gr]'>detail</a></strong></td>
  </tr></tbody>";
  }
echo"</table></div></div>";
echo "<br /><div align=center >$linkHalaman </div><br /><br /><br />";
}




elseif($aksi=='kontak'){
echo"

<div >
$r3[isi]</br>

</div><br />
<br />
";
}

//<iframe width='540' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=SMAN+1+Pagar+Dewa,+Panaragan,+Lampung,+Indonesia&amp;aq=0&amp;oq=SMAN+1+PAGAR+DEWA&amp;sll=53.956086,7.03125&amp;sspn=14.878274,28.256836&amp;ie=UTF8&amp;hq=SMAN+1+Pagar+Dewa,&amp;hnear=Panaragan,+Indonesia&amp;ll=-4.49257,105.10476&amp;spn=0.04165,0.038859&amp;t=m&amp;output=embed'></iframe><br /><small><a href='https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=SMAN+1+Pagar+Dewa,+Panaragan,+Lampung,+Indonesia&amp;aq=0&amp;oq=SMAN+1+PAGAR+DEWA&amp;sll=53.956086,7.03125&amp;sspn=14.878274,28.256836&amp;ie=UTF8&amp;hq=SMAN+1+Pagar+Dewa,&amp;hnear=Panaragan,+Indonesia&amp;ll=-4.49257,105.10476&amp;spn=0.04165,0.038859&amp;t=m' style='color:#0000FF;text-align:left'>View Larger Map</a></small>

/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='detailmateri'){
$kate2=mysql_query(" SELECT * FROM kat_download WHERE no='$_GET[id]' ");
$we=mysql_fetch_array($kate2);
$kate=mysql_query(" SELECT * FROM download WHERE kategori='$_GET[id]' AND kelas='X' ORDER BY id_d DESC");
$xi=mysql_query(" SELECT * FROM download WHERE kategori='$_GET[id]' AND kelas='XI' ORDER BY id_d DESC");
$xii=mysql_query(" SELECT * FROM download WHERE kategori='$_GET[id]' AND kelas='XII' ORDER BY id_d DESC");
		
echo"
<div id='wp-header'>
    <h3>MATERI $we[kategori]</h3></br>
        <div id='content'>
		<li>
            <ul class='tabs-widget tabs-widget-widget-themater_tabs-3-id'>
                                        <li><a href='#widget-themater_tabs-3-id3' title='Recent Posts'>Kelas X</a></li>
                                            <li><a href='#widget-themater_tabs-3-id2' title='Comments'>Kelas XI</a></li>
                                            <li><a href='#widget-themater_tabs-3-id3' title='Tags'>Kelas XII</a></li>

                                </ul>";
$no=1;
echo"
    <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-3-id' id='widget-themater_tabs-3-id3'>
                                        <div class='posts-widget'><ul>
<table width='520' cellpadding='5' class='g'>
<tr class='head' class='g'>
<th width='38' class='g'>No.</th><th width='275' class='g'>Judul Materi</th><th width='152' class='g'>Kelas</th><th width='123' class='g'>Action</th>
</tr>";
if ($kate > 0){
while ($nm=mysql_fetch_array($kate)){

	
 echo"<tr class='satu' class='g'>
<td align='center' class='g'>$no</td><td class='g'>$nm[nama]</td><td align='center' class='g'>$nm[kelas]</td class='g'><td align='center' class='g'>
<a href='beranda.php?aksi=detailpelajaran&id=$nm[id_d]'>detail</a> &nbsp;<a href='foto/file/$nm[file]'>download</a>
		
</td>
</tr>";
		
$no++;
}
		echo"</table></ul>
								</div>
                                </div></br>";
}else{
		echo"<tr class='satu'>
		<td colspan='7'>Data Kosong</td>
		</tr>
		";
		echo"</table></ul>
								</div>
                                </div></br>";
}
		

    $no=1;
echo" <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-3-id' id='widget-themater_tabs-3-id2'>
     <div class='comments-widget'><ul>
<table width='520' cellpadding='5' class='g'>
<tr class='head' class='g'>
<th width='38' class='g'>No.</th><th width='275' class='g'>Judul Materi</th><th width='152' class='g'>Kelas</th><th width='123' class='g'>Action</th>
</tr>";
		if ($xi > 0){
		while ($i=mysql_fetch_array($xi)){

	
	 echo"<tr class='satu' class='g'>
<td align='center' class='g'>$no</td><td class='g'>$i[nama]</td><td align='center' class='g'>$i[kelas]</td class='g'><td align='center' class='g'>
<a href='beranda.php?aksi=detailpelajaran&id=$i[id_d]'><img src='images/view.png'></a> &nbsp;<a href='foto/file/$i[file]'><img src='images/dwn.png'></a>

		
		</td>
		 </tr>";
$no++;
}
		echo"</table></ul>
								</div>
                                </div></br>";		
}else{
	echo"<tr class='satu'>
		<td colspan='7'>Data Kosong</td>
		</tr>
		";
		echo"</table></ul>
								</div>
                                </div></br>";
}        


$no=1;

echo" <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-3-id' id='widget-themater_tabs-3-id3'>
                   <div class='comments-widget'>
				   <ul>
    <table width='520' cellpadding='5' class='g'>
    	<tr class='head' class='g'>
        	<th width='38' class='g'>No.</th><th width='275' class='g'>Judul Materi</th><th width='152' class='g'>Kelas</th><th width='123' class='g'>Action</th>
        </tr>";
if ($xii > 0){
while ($m=mysql_fetch_array($xii)){

	
 echo"<tr class='satu' class='g'>
<td align='center' class='g'>$no</td><td class='g'>$m[nama]</td><td align='center' class='g'>$m[kelas]</td class='g'><td align='center' class='g'>
<a href='beranda.php?aksi=detailpelajaran&id=$m[id_d]'><img src='images/view.png'></a> &nbsp;<a href='foto/file/$m[file]'><img src='images/dwn.png'></a>

		
		</td>
        </tr>";
$no++;
}
echo"</table></ul>
								</div>
                                </div></div>";
}else{
	echo"<tr class='satu'>
		<td colspan='7'>Data Kosong</td>
		</tr>
		";
		echo"</table></ul>
								</div>
                                </div></br>";
}


echo"</section></div>";
 

}


elseif($aksi=='detailpelajaran'){
$ool=$_GET[id_tamu];
$oop=mysql_query(" SELECT * FROM kat_download WHERE no='$_GET[id]' ");
$we=mysql_fetch_array($oop);
$oh=mysql_query(" SELECT * FROM download WHERE id_d='$_GET[id]'");		
$putu=mysql_fetch_array($oh);
$_SESSION[id_d] = $putu[id_d];
echo"
<div class='pel'>
<h3>Detail Materi $putu[nama]</h3></br>

            	
<video width='100%' controls='controls' autoplay='true'>
<source src='video/$putu[video]' type='video/mp4'>

</video>	
	

<p>$putu[keterangan]...</p></br>

<center><p>Download File</p>
<a href='foto/file/$putu[file]'><img src='images/download.png' width=100></a>
</center>
<div class='fb-like' data-href='https://developers.facebook.com/docs/plugins/' data-layout='standard' data-action='like' data-show-faces='true' data-share='true'></div>
<h4 style='font-weight:bold; font-size:14px;'>Materi Lainnya</h4>";
$kelas=$putu[kelas];
$kat=$putu[kategori];
$il=mysql_query(" SELECT * FROM download WHERE kelas='$kelas' AND kategori='$kat'");
while ($tu=mysql_fetch_array($il)){

echo"<ul>
<li class='i'><a href=''>$tu[nama]</a></li>

</ul>";
}


$komen=mysql_query("SELECT * FROM komentar WHERE id_d='$_GET[id]' AND status='Y'");

echo"
<div class='batas'></div>
<div class='komen'>
<p class='jk'>Komentar Materi</p>";
if($komen==''){
echo"<p style='font-style:italic;'>Komentar Belum ada</p>";

}else{
while($tamu=mysql_fetch_array($komen)){
echo"<p style='font-weight:bold; color:#000080;'>$tamu[nama]</p>
<p style='font-weight:normal; color:#000080;'>$tamu[tgl] , $tamu[jam]</p>
<p><b>Isi Komentar :</b> <i>$tamu[komentar]</i> </p>";		
}		
}
echo"</div>

<form method='post' action='proseskomentarmateri.php'>
<table class='table table-bordered table-striped'>
           
              <tr>
                  <td colspan='3'><h3>Silahkan Berkomentar : </h3></td>
              </tr>
              <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><input type=text name='nama'></td>
              </tr>
              <tr>
                  <td valign=top>Komentar</td>
                  <td valign=top>:</td>
                  <td><textarea name='komentar' rows=6 width=400></textarea></td>
              </tr>
              <tr>
                  <td colspan='3'><input type=submit name='submit' value=submit></td>
		  <input type='hidden' name='id_d' value='$_GET[id]'>
              </tr>
</table> 

</form>

</div>";		
		
}


elseif($aksi=='materi'){
	      
echo"
    <div class='post clearfix' id='post'>
        <h2 class='title'>Selamat Datang Di E-Book Pembelajaran - $r3[nama]</h2>
        <p style='text-align: justify;'>
Media Pembelajaran banyak perantara bisa melalui offline maupun juga online manfaatnya pun sungguh sangat tidak diragukan apalagi didasari dengan niat yang sungguh-sungguh</br>
</br>Belajar mandiri sesuai kebutuhan itu ngaruh banget, buku mungkin agak sedikit membantu, nonton video atau baca ringkasan+video bisa lebih efektif.</br></br>
silahkan pilih materi yang anda butuhkan
</p>
<div class='row'>
";		
		
$dwl=mysql_query(" SELECT * FROM kat_download ORDER BY no ASC");
	              while($dw=mysql_fetch_array($dwl)){
		     		
	echo"<div class='col-md-4 d-flex ftco-animate'>
  <div class='course align-self-stretch'>
    <a href='#' class='img' style='background-image: url(foto/admin/$dw[gb])'></a>
    <div class='text p-4'>
      <h3 class='mb-3'><a href='#'>$dw[kategori]</a></h3>
      <p>Media Pembelajaran banyak perantara bisa melalui offline maupun juga online manfaatnya pun sungguh sangat tidak diragukan apalagi didasari dengan niat yang sungguh-sungguh</p>
      <p><a href='beranda.php?aksi=detailmateri&id=$dw[no]' class='btn btn-primary'>Detail</a></p>
    </div>
  </div>
</div>

";
		      }
	      
echo"</div></div> ";		      
		      
}

elseif($aksi=='akademik'){
	      
  echo"<h2 class='title'>Data - $r3[nama]</h2>
  <a href='beranda.php?aksi=pegawai' class='btn btn-primary'>DATA GURU</a>
  <a href='beranda.php?aksi=siswa' class='btn btn-primary'>DATA SISWA</a>
  <a href='beranda.php?aksi=materi' class='btn btn-primary'>MATERI</a>
  ";	
  if (isset($_SESSION['nisn'])) {
    // Jika sudah ada sesi login, tampilkan pesan selamat datang
    echo "<a href='beranda.php?aksi=ceklulus' class='btn btn-primary'>CEK NILAI $_SESSION[nama] </a> ";
    echo "<a href='logout.php' class='btn btn-primary'>LOGOUT <i class='ion-ios-arrow-forward'></i></a> ";
   
} else {
    // Jika belum ada sesi login, tampilkan tombol login
    echo "<a href='beranda.php?aksi=login-siswa' class='btn btn-primary'>LOGIN TES MASUK</a>";
}
            
  }
///Ini bagian tampil siswa
elseif($aksi=='carisiswa'){

if ((isset($_POST['submit'])) and ($_POST['cari']<>"")){
      $cari=$_POST['cari'];
      $berdasarkan=$_POST['berdasarkan'];

      $s=mysql_query("SELECT * FROM pendaftaran WHERE $berdasarkan LIKE '%$cari%'");
      $ada=mysql_numrows($s);
$no=1;
echo"<div id='detail-category1'>

      <center style='font-weight:bold;  margin-bottom:10px;'>
    <h3>Data Siswa</h3>
     <form action='?aksi=carisiswa' method='post' id='tabel'>
  <table class='table table-bordered table-striped'><tr><td>Berdasarkan : </td><td>
   <select name='berdasarkan'>
    <option value='nisn'>NISN</option>
     <option value='nama'>Nama Siswa</option>
     <option value='jk'>Jenis Kelamin</option>
     </select></td>
   <td>Cari : </td>
   <td><input type='text'  name='cari' required placeholder=' isi pencarian '></td>
   <td><input type='submit' name='submit' value='CARI'> </td></tr></table>
</form>
<p>Di temukan Ada $ada data</p>
 <div id='outtable'>
  <table class='table table-bordered table-striped'>
    
      <tr>
      <th >No</th>
        <th >NISN</th>
        <th >Nama</th>
        <th >Jenis Kelamin</th>
      <th >jurusan</th>
       <th >Aksi</th>
    </tr>
    ";
  if($ada > 0){
  while($pd=mysql_fetch_array($s)){
    echo"<tbody>
      <tr>
       <td>$no</td>
        <td>$pd[nisn]</td>
        <td>$pd[nama]</td>
        <td>$pd[jk]</td>
        <td>$pd[jurusan]</td>
      
     <td><a href='?aksi=detailsiswa&id=$pd[no_daftar]'>detail</a></td>
      </tr>

      
    </tbody>";
  
$no++;
}
  

}else{
   
   echo"<td colspan='7'><div align='center'>Maaf, Data yang anda cari belum terdaftar</div></td>";
  }
  
echo"</table>"; 

  

}
echo"</div></div>";
   
}

elseif($aksi=='siswa'){
   echo"
   <ul class='tabs-widget tabs-widget-widget-themater_tabs-5-id'>
                                        <li><a href='#widget-themater_tabs-5-id1' title='Recent Posts'>Kelas X/Diterima</a></li>
                                            <li><a href='#widget-themater_tabs-5-id2' title='Comments'>Kelas XI</a></li>
                                            <li><a href='#widget-themater_tabs-5-id3' title='Tags'>Kelas XII</a></li>
											<li><a href='#widget-themater_tabs-5-id4' title='Tags'>Alumni</a></li>

                                </ul>
                                          <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-5-id' id='widget-themater_tabs-5-id1'>
                                        <div class='posts-widget'><ul>
								
								<div class='post clearfix' id='post'>
        <h2 class='title'>DATA SISWA</h2>
     <form action='?aksi=carisiswa' method='post' id='tabel'>
  <table class='table table-bordered table-striped'><tr><td>Berdasarkan : </td><td>
   <select name='berdasarkan'>
     <option value='nisn'>NISN</option>
     <option value='nama'>Nama Siswa</option>
     <option value='jk'>Jenis Kelamin</option>
     </select></td>
   <td>Cari : </td>
   <td><input type='text'  name='cari' required placeholder=' isi pencarian '></td>
   <td><input type='submit' name='submit' value='CARI'> </td></tr></table>
</form>
 <div id='outtable'>";
 $result=mysql_query("SELECT * FROM pendaftaran WHERE kelas='X' order by no_daftar DESC");
$no=1;
  echo"<table class='table table-bordered table-striped'>
    
      <tr>
        <th class='normal'>No</th>
        <th class='normal'>NISN</th>
        <th class='normal'>Nama</th>
        <th class='normal'>Jenis Kelamin</th>
      <th class='normal'>Jurusan</th>
       <th class='normal'>Aksi</th>
    </tr>
    ";
  while($pd=mysql_fetch_array($result)){
    echo"<tbody>
      <tr>
      <td>$no</td>
        <td>$pd[nisn]</td>
        <td>$pd[nama]</td>
        <td>$pd[jk]</td>
        <td>$pd[jurusan]</td>
        <td><a href='?aksi=detailsiswa&id=$pd[no_daftar]'>detail</a></td>
      </tr>

      
    </tbody>";
  
  $no++;
  }
  
  
  
  echo"</table>";
  
echo"</div>
            
        </div>   
								
								
								</ul></div>
                                </div>
 <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-5-id' id='widget-themater_tabs-5-id2'>
     <div class='comments-widget'><ul>
									<div class='post clearfix' id='post'>
        <h2 class='title'>DATA SISWA</h2>
     <form action='?aksi=carisiswa' method='post' id='tabel'>
  <table class='table table-bordered table-striped'><tr><td>Berdasarkan : </td><td>
   <select name='berdasarkan'>
     <option value='nisn'>NISN</option>
     <option value='nama'>Nama Siswa</option>
     <option value='jk'>Jenis Kelamin</option>
     </select></td>
   <td>Cari : </td>
   <td><input type='text'  name='cari' required placeholder=' isi pencarian '></td>
   <td><input type='submit' name='submit' value='CARI'> </td></tr></table>
</form>
 <div id='outtable'>";
 $result=mysql_query("SELECT * FROM pendaftaran WHERE kelas='XI' order by no_daftar DESC");
$no=1;
  echo"<table class='table table-bordered table-striped'>
    
      <tr>
        <th class='normal'>No</th>
        <th class='normal'>NISN</th>
        <th class='normal'>Nama</th>
        <th class='normal'>Jenis Kelamin</th>
      <th class='normal'>Jurusan</th>
       <th class='normal'>Aksi</th>
    </tr>
    ";
  while($pd=mysql_fetch_array($result)){
    echo"<tbody>
      <tr>
      <td>$no</td>
        <td>$pd[nisn]</td>
        <td>$pd[nama]</td>
        <td>$pd[jk]</td>
        <td>$pd[jurusan]</td>
        <td><a href='?aksi=detailsiswa&id=$pd[no_daftar]'>detail</a></td>
      </tr>

      
    </tbody>";
  
  $no++;
  }
  
  
  
  echo"</table>";
  
echo"</div>
            
        </div>   
					</ul></div>
                                </div>
                                    <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-5-id' id='widget-themater_tabs-5-id3'>
                   <div class='comments-widget'><ul>
                                                   <div class='post clearfix' id='post'>
        <h2 class='title'>DATA SISWA</h2>
     <form action='?aksi=carisiswa' method='post' id='tabel'>
  <table class='table table-bordered table-striped'><tr><td>Berdasarkan : </td><td>
   <select name='berdasarkan'>
     <option value='nisn'>NISN</option>
     <option value='nama'>Nama Siswa</option>
     <option value='jk'>Jenis Kelamin</option>
     </select></td>
   <td>Cari : </td>
   <td><input type='text'  name='cari' required placeholder=' isi pencarian '></td>
   <td><input type='submit' name='submit' value='CARI'> </td></tr></table>
</form>
 <div id='outtable'>";
 $result=mysql_query("SELECT * FROM pendaftaran WHERE kelas='XII' order by no_daftar DESC");
$no=1;
  echo"<table class='table table-bordered table-striped'>
    
      <tr>
        <th class='normal'>No</th>
        <th class='normal'>NISN</th>
        <th class='normal'>Nama</th>
        <th class='normal'>Jenis Kelamin</th>
      <th class='normal'>Jurusan</th>
       <th class='normal'>Aksi</th>
    </tr>
    ";
  while($pd=mysql_fetch_array($result)){
    echo"<tbody>
      <tr>
      <td>$no</td>
        <td>$pd[nisn]</td>
        <td>$pd[nama]</td>
        <td>$pd[jk]</td>
        <td>$pd[jurusan]</td>
        <td><a href='?aksi=detailsiswa&id=$pd[no_daftar]'>detail</a></td>
      </tr>

      
    </tbody>";
  
  $no++;
  }
  
  
  
  echo"</table>";
  
echo"</div>
            
        </div>   
                                        </ul></div>
                                </div>
								
								 <div class='tabs-widget-content tabs-widget-content-widget-themater_tabs-5-id' id='widget-themater_tabs-5-id4'>
                   <div class='comments-widget'><ul>
                                                   <div class='post clearfix' id='post'>
        <h2 class='title'>DATA SISWA</h2>
     <form action='?aksi=carisiswa' method='post' id='tabel'>
  <table class='table table-bordered table-striped'><tr><td>Berdasarkan : </td><td>
   <select name='berdasarkan'>
     <option value='nisn'>NISN</option>
     <option value='nama'>Nama Siswa</option>
     <option value='jk'>Jenis Kelamin</option>
     </select></td>
   <td>Cari : </td>
   <td><input type='text'  name='cari' required placeholder=' isi pencarian '></td>
   <td><input type='submit' name='submit' value='CARI'> </td></tr></table>
</form>
 <div id='outtable'>";
 $result=mysql_query("SELECT * FROM pendaftaran WHERE kelas='Alumni' order by no_daftar DESC");
$no=1;
  echo"<table class='table table-bordered table-striped'>
    
      <tr>
        <th class='normal'>No</th>
        <th class='normal'>NISN</th>
        <th class='normal'>Nama</th>
        <th class='normal'>Jenis Kelamin</th>
      <th class='normal'>Alamat</th>
       <th class='normal'>Aksi</th>
    </tr>
    ";
  while($pd=mysql_fetch_array($result)){
    echo"<tbody>
      <tr>
      <td>$no</td>
        <td>$pd[nisn]</td>
        <td>$pd[nama]</td>
        <td>$pd[jk]</td>
        <td>$pd[alamat]</td>
        <td><a href='?aksi=detailsiswa&id=$pd[no_daftar]'>detail</a></td>
      </tr>

      
    </tbody>";
  
  $no++;
  }
  
  
  
  echo"</table>";
  
echo"</div>
            
        </div>   
                                        </ul></div>
                                </div>
								
								
 ";
   
}




elseif($aksi=='detailsiswa'){
   $con=mysql_query("SELECT * FROM pendaftaran where no_daftar='$_GET[id]'");
   $g=mysql_fetch_array($con);
   
   
   echo"
   <div id='detail-category2'>

      <center style='font-weight:bold;  margin-bottom:10px;'>
    <h3>DETAIL SISWA</h3>
  <table width='322' border='0'>
    <tr>
      <td colspan='3'><center>
      <img src='foto/pendaftar/$g[gambar]' style='border:1px solid #999999;'></center></td>
    </tr>

<tr><td>A. Identitas Siswa</td></tr>    
    <tr>
      <td width='156'>NISN</td>
      <td width='9'>:</td>
      <td width='135'>$g[nisn]</td>
    </tr>
    <tr>
      <td>Nama Lengkap </td>
      <td>:</td>
      <td>$g[nama]</td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td>$g[jk]</td>
    </tr>
    <tr>
      <td>Tempat Tanggal Lahir </td>
      <td>:</td>
      <td>$g[tmpt_l] , $g[tgl_l]</td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td>$g[agama]</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>$g[alamat]</td>
    </tr>
    <tr>
      <td>No Kontak </td>
      <td>:</td>
      <td>$g[tlp]</td>
    </tr>
<tr><td>B. Identitas Orang Tua / Walli</td></tr>  

    <tr>
      <td>Nama Ayah</td>
      <td>:</td>
      <td>$g[ayah]</td>
    </tr>

    <tr>
      <td>Pekerjaan Ayah</td>
      <td>:</td>
      <td>$g[payah]</td>
    </tr>

   <tr>
      <td>Nama Ibu</td>
      <td>:</td>
      <td>$g[ibu]</td>
    </tr>

    <tr>
      <td>Pekerjaan Ibu</td>
      <td>:</td>
      <td>$g[pibu]</td>
    </tr>

   <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>$g[alamat]</td>
    </tr>

  </table>
  
  <h3><a href = 'javascript:history.back()'>KEMBALI</a></h3>
  
</div>
   ";
   
   
}


elseif($aksi=='detailpegawai'){
   $con=mysql_query("SELECT * FROM pegawai where id_gr='$_GET[id]'");
   $g=mysql_fetch_array($con);
   
   
   echo"
   <div id='detail-category2'>
    <h3>DETAIL PEGAWAI</h3>
<table class='table table-bordered table-striped'>
    <tr>
      <td colspan='3'><center>
      <img src='foto/guru/$g[foto]' style='border:1px solid #999999;'></center></td>
    </tr>

<tr><td>A. Identitas Pegawai</td></tr>    
    <tr>
      <td width='156'>NIP</td>
      <td width='9'>:</td>
      <td width='135'>$g[nip]</td>
    </tr>
    <tr>
      <td>Nama Lengkap </td>
      <td>:</td>
      <td>$g[nama]</td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td>$g[kelamin]</td>
    </tr>
    <tr>
      <td>Jabatan</td>
      <td>:</td>
      <td>$g[jabatan]</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>:</td>
      <td>$g[status]</td>
    </tr>
   

  </table>
  
  <h3><a href = 'javascript:history.back()'>KEMBALI</a></h3>
  
</div>
   ";
   
   
}


#####LOGIN CALON SISWA#####
elseif($aksi=='login-siswa'){
	
echo"
<div class='col-md-6 pr-md-5'>
<h4 class='mb-4'>Form Login Calon Siswa</h4>
<form action='proses-login-siswa.php' method='post'  >
  <div class='form-group'>
    <input type='text'  class='form-control' name='nisn'  required='required' placeholder='Masukan NISN'>
  </div>
  <div class='form-group'>
    <input type='password' class='form-control' name='pass' placeholder='Masukan Password' required>
  </div>

  <div class='form-group'>
    <input type='submit' value='login' class='btn btn-primary py-3 px-5'>
  </div>
</form>
</div>
";	
	
}

elseif($aksi=='proses-login-siswa'){
  session_start();
$nik=$_POST['nisn'];
   $con=mysql_query("SELECT * FROM pendaftaran WHERE nisn='$nik' ");
   $ketemu=mysql_num_rows($con);
   $r=mysql_fetch_array($con);
   if($ketemu > 0){
    
      $_SESSION[nisn]  = $r[nisn];
    $_SESSION[nama]  = $r[nama];
  
    $_SESSION[gambar]=$r[gambar];
       echo"
      <script>window.alert('Login Anda Berhasil, Silahkan tunggu!');
        window.location=('beranda.php?aksi=mautes')</script>";
      
   }else{
      echo"
      <script>window.alert('Maaf Login anda bermasalah !');
        window.location=('?aksi=login-siswa')</script>
      
      ";
      
   }

}
elseif($aksi=='mautes'){

echo"<div class='row'>
<div class='col-md-4 d-flex ftco-animate'>
  <div class='blog-entry align-self-stretch'>

      <h3 class='heading mb-4'><a href='#'>Selamat datang  $_SESSION[nisn]</a></h3>
      <p class='time-loc'><span class='mr-2'><i class='icon-clock-o'></i> 10:30AM-03:30PM</span> <span><i class='icon-map-o'></i> Venue Main Campus</span></p>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href='event.html'>Join Event <i class='ion-ios-arrow-forward'></i></a> </p><p><a href='logout.php'>Logout <i class='ion-ios-arrow-forward'></i></a></p>
    </div>
  </div>
</div>
</div> ";
}
elseif($aksi=='peraturan'){
	$result=mysql_query("select * from tbl_soal WHERE aktif='Y'");
$hitung=mysql_num_rows($result);
		 $qry=mysql_query("SELECT * FROM tbl_pengaturan_ujian");
		 $r=mysql_fetch_array($qry);
 		 
		echo "
		<h3 align='center'>$r[nama_ujian]</h3><br/>
		Waktu Pengerjaan : $r[waktu] menit<br/>
		Jumlah Soal : $hitung<br/>
    nama colon siswa :   $_SESSION[nama] <br>
		<p/>
		<h2>PERATURAN</h2><br/>
		$r[peraturan]<br/>
		";
		?>
		<script>
 function cekForm() {
	if (!document.fValidate.agree.checked) {
				alert("Anda belum menyetujui!");
				return false;
			} else {
				location.href="?aksi=soal";
			}
		}
</script>
<FORM name="fValidate">
<input type="checkbox" name="agree" id="agree" value="1"> Saya Mengerti dan Siap Untuk Mengikuti Tes<br/><br/>
          <div style='text-align:center;'><input type="button" name="button-ok" value="MULAI TES" onclick="cekForm()"></div>
</FORM>

	
<?	
} 

elseif($aksi=='soal'){
	
if (empty($_SESSION[nisn])){
  echo"
      <script>window.alert('Maaf Anda Harus Login !');
        window.location=('?aksi=login-siswa')</script>
      
      ";
}
else{
//Lakukan Pengecekan Apakah Sudah Pernah Mengerjakan Soal atau belum
		$cek=mysql_num_rows(mysql_query("SELECT nisn FROM tbl_nilai WHERE nisn='$_SESSION[nisn]'"));
		if ($cek > 0) {
			      $tampil = mysql_query("SELECT * FROM tbl_nilai WHERE nisn='$_SESSION[nisn]'");
					$t=mysql_fetch_array($tampil);
					$username=  ucwords($_SESSION['nama']);;

		echo "<h3 style='border:0';><u>$username</u> Maaf Anda Sudah Mengerjakan Tes</h3>";
		

		}
		else {
	//echo '<table class='table table-bordered table-striped'><tr><th>Waktu Anda</th></tr>
		//  <tr><td align=center><span style="font-size:18px"><span id="menit"></span>:<span id="detik"></span></span> </td></tr></table>';
echo "<h4>SELEMAT MENGERJAKAN</h4><div style='width:100%; border: 1px solid #EBEBEB; margin-top: 20px; overflow:scroll;height:900px;'>";
 echo '
 
 <table width="100%" border="0">';

		$hasil=mysql_query("select * from tbl_soal WHERE aktif='Y' ORDER BY RAND ()");
		$jumlah=mysql_num_rows($hasil);
		$urut=0;
		while($row =mysql_fetch_array($hasil))
		{
			$id=$row["id_soal"];
			$pertanyaan=$row["soal"];
			$pilihan_a=$row["a"];
			$pilihan_b=$row["b"];
			$pilihan_c=$row["c"];
			$pilihan_d=$row["d"]; 
			
			?>
			<form name="form1" method="post" action="?aksi=jawaban">
			<input type="hidden" name="id[]" value=<?php echo $id; ?>>
			<input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
			<tr>
			  	<td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
			  	<td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
			</tr>
			<?php
				if (!empty($row["gambar"])) {
					echo "<tr><td></td><td><img src='foto/soal/$row[gambar]' width='200' hight='200'></td></tr>";
				}
			?>
			<tr>
			  	<td height="21"><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
	  	      <?php echo "$pilihan_a";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
	  	      <?php echo "$pilihan_b";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
	  	      <?php echo "$pilihan_c";?></font> </td>
			</tr>
			<tr>
				<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
	  	      <?php echo "$pilihan_d";?></font> </td>
            </tr>
			
		<?php
		}
		?>
        	<tr>
				<td>&nbsp;</td>
			  	<td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
			</table>
</form>
        </p>
</div>
	 <?php
		 $qry=mysql_query("SELECT * FROM tbl_pengaturan_ujian");
		 $r=mysql_fetch_array($qry);
	 ?>
<script> 
	<!-- 
	// 
	 var detik=20;
	 var menit=57;
	 //document.counter.d2.value='30' 
	
	function display()
	{ 
		if (menit==0&&detik==0) {
			alert('Waktu habis, klik OK untuk melihat hasil ujian anda.');
			location.href="?hal=hasil_ujian";
		}
	
	 if (detik<=0){ 
		detik=60;
		menit-=1;
	 } 
	 if (menit<=-1){ 
		detik=0;
		menit+=1;
	 } 
	 else 
		detik-=1 
		
		detik="" + detik
		menit="" + menit
		var pad = "00"
		document.getElementById("menit").innerHTML=pad.substring(0, pad.length - menit.length) + menit;
		document.getElementById("detik").innerHTML=pad.substring(0, pad.length - detik.length) + detik;
		//document.counter.d2.value=menit;
		//document.counter.d3.value=detik;
		setTimeout("display()",1000) 
	} 
	display() 
	--> 
	</script>
	
<? }}} 
	
 elseif($aksi=='jawaban'){

$cek=mysql_num_rows(mysql_query("SELECT nisn FROM tbl_nilai WHERE nisn='$_SESSION[nisn]'"));
if($cek > 0){
	echo"
	<script>window.alert('Maaf Tes Ujian Online Sudah Dilakukan');
        window.location=('index.php')')</script>
	";
}else{
	
 
       if(isset($_POST['submit'])){
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$jumlah=$_POST['jumlah'];
			
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;
			
			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=mysql_query("select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
					
					$cek=mysql_num_rows($query);
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				/*RUMUS
				Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
				hasil= 100 / jumlah soal * jawaban yang benar
				*/
				
				$result=mysql_query("select * from tbl_soal WHERE aktif='Y'");
				$jumlah_soal=mysql_num_rows($result);
				$score = 100/$jumlah_soal*$benar;
				$hasil = number_format($score,1);
			}
		}
		//Lakukan Pengecekan  Data  dalam Database
	   $cek=mysql_num_rows(mysql_query("SELECT nisn FROM tbl_nilai WHERE nisn='$_SESSION[nisn]'"));
		if ($cek < 1) {
		//Pemberian kondisi lulus/ tidak lulus
		 $qry2=mysql_query("SELECT nilai_min FROM tbl_pengaturan_ujian");
		 $q2=mysql_fetch_array($qry2);
		 $tgl_sekarang=date("m-d-Y");
		 $ceknilai= $q2['nilai_min'];
		 if ($hasil >= $ceknilai) {
		//Lakukan Penyimpanan Kedalam Database
				$iduser= ucwords($_SESSION['nisn']);
				mysql_query("INSERT INTO tbl_nilai (nisn,benar,salah,kosong,score,tanggal,keterangan) Values ('$iduser','$benar','$salah','$kosong','$hasil','$tgl_sekarang','Lulus')");
		}else {
		//Lakukan Penyimpanan Kedalam Database
				$iduser= ucwords($_SESSION['nisn']);
				mysql_query("INSERT INTO tbl_nilai (nisn,benar,salah,kosong,score,tanggal,keterangan) Values ('$iduser','$benar','$salah','$kosong','$hasil','$tgl_sekarang','Tidak Lulus')");
		}
	}
		
		
		
		//Menampilkan Hasil Ujian Kompetensi
		$id=$_SESSION[nisn];
		$sql=mysql_query("SELECT * FROM pendaftaran where nisn='$id'");
		$r=mysql_fetch_array($sql);
		
		echo "<center><h4 style='border:0';>Terimakasih <b>$r[nama]</b> Sudah Melakukan Tes Ujian Secara Online</h4></center>";
		
		echo"
		<u><b>Keterangan</b></u></br>
		<p>Untuk Informasi Keluusan Segera Akan Di Umumkan Melalui Website Resmi $r3[nama] Dengan Cara Cek NISN melalui Kolom Pencarian yang nantinya akan disediakan</p>";
		
		
}	
 }


elseif($aksi=='ceklulus'){
$sql=mysql_query("SELECT * FROM tbl_nilai WHERE nisn='$_SESSION[nisn]'");
$r=mysql_num_rows($sql);


echo"

<div id='outtable'>";


echo"    <table class='table table-striped'>
    
     <tr>
                                               <th ><div align='center'>No</div></th>
			                       
					       <th ><div align='center'>NISN</div></th>
					       
					       <th  ><div align='center'>Waktu Ujian</div></th>
					       <th  ><div align='center'>Total Nilai</div></th>
					        <th ><div align='center'>Keterangan</div></th>
					       <th  ><div align='center'>Aksi</div></th>
					   
    ";
 
  while($pd=mysql_fetch_array($sql)){
	$no=1;
    echo"<tbody>
      <tr>
       <td>$no</td>
      
        <td>$pd[nisn]</td>
        <td>$pd[tanggal]</td>
	<td>$pd[score]</td>
        <td>$pd[keterangan]</td>
        <td><a href='?aksi=detaillulus&id=$pd[nisn]'>detail</a></td>
      </tr>

      
    </tbody>";
    echo"</table>"; 
  
$no++;
}
  

  

echo"</div>";
  

}

   
   
elseif($aksi=='detaillulus'){
   $con=mysql_query("SELECT * FROM pendaftaran WHERE  nisn='$_GET[id]'");
    $con1=mysql_query("SELECT * FROM tbl_nilai WHERE  nisn='$_GET[id]'");
     $w=mysql_fetch_array($con1);
   $g=mysql_fetch_array($con);
   
   
   echo"
   <div id='detail-category2'>
    <h3>DETAIL SISWA</h3>
<table class='table table-bordered table-striped'>
    <tr>
      <td colspan='3'><center>
      <img src='foto/pendaftar/$g[gambar]' style='border:1px solid #999999;'></center></td>
    </tr>

<tr><td>A. Identitas Siswa</td></tr>    
    <tr>
      <td width='156'>NISN</td>
      <td width='9'>:</td>
      <td width='135'>$g[nisn]</td>
    </tr>
    <tr>
      <td>Nama Lengkap </td>
      <td>:</td>
      <td>$g[nama]</td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td>$g[jk]</td>
    </tr>
    <tr>
      <td>Tempat Tanggal Lahir </td>
      <td>:</td>
      <td>$g[tmpt_l] , $g[tgl_l]</td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td>$g[agama]</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>$g[alamat]</td>
    </tr>
    <tr>
      <td>No Kontak </td>
      <td>:</td>
      <td>$g[tlp]</td>
    </tr>
  </table>
  </br>";
  
  $b=$w['benar'];
  $s=$w['salah'];
  $sc=$w['score'];
  $k=$w['kosong'];
  $jl=$b + $s;
  
  

  echo"
  <h3>Informasi Nilai</h3>
  <table width='322' border='0'>
  

 <tr>
      <td>Jumlah Soal</td>
      <td>:</td>
      <td>$jl</td>
    </tr>
    <tr>
      <td>Benar</td>
      <td>:</td>
      <td>$b</td>
    </tr>
    <tr>
      <td>Salah </td>
      <td>:</td>
      <td>$s</td>
    </tr>
    <tr>
      <td>Kosong </td>
      <td>:</td>
      <td>$k</td>
    </tr>
    <tr>
      <td>Total Score</td>
      <td>:</td>
      <td>$sc</td>
    </tr>
   
  </table>
  
  
  
  
 <p> Berdasarkan Hasil keputusan dari panitia penyelenggara Penerimaan siswa baru berbasis online menyatakan bahwa anda di nyatakan</p> 
  
  
  <h3>$w[keterangan]</h3>
  
</div>
   ";
   
   
}
   
   
   
   

###########END BAGIAN LOGIN CALON SISWA#####



elseif ($aksi=='donwload'){
$kate2=mysql_query(" SELECT * FROM kat_download WHERE no='$_GET[id]' ");
$we=mysql_fetch_array($kate2);
		  
$kate=mysql_query(" SELECT * FROM download WHERE kategori='$_GET[id]' ORDER BY id_d DESC ");
				
echo"<div class='valid_box10'>Download $we[kategori]</div>
<div class='top'>
";
  $ketemu = mysql_num_rows($kate);

  if ($ketemu > 0){
while ($ta=mysql_fetch_array($kate)){
$no++;


echo"
 <div class='kardus'>$no.</strong> <a href='foto/file/$ta[file]' target='_blank' alt='$ta[keterangan]' >$ta[nama]</a></div>
   
";
}
echo"<div class='clear'></div></div>";

}else{
echo"<div class='top'>
          <strong>Maaf Belum Ada Download Di Kategori Ini<br />
  <div class='clear'></div></div>      
";
}
}
?>
<? 
$dt=$d['dilihat']+1;
mysql_query("UPDATE berita SET  dilihat='$dt' WHERE id_berita='$_GET[id]'");
?>

<link rel="stylesheet" type="text/css" href="validasi/stylesheets/jquery.validate.css" />
 <script src="js/jquery-1.3.2.js" type="text/javascript"></script>
 
   <script src="validasi/javascripts/jquery.validate.js" type="text/javascript"> </script>
<script src="validasi/javascripts/jquery.validation.functions.js" type="text/javascript"> </script>
	
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#ValidField").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Mohon Isikan Nama Lengkap"
                });
		        jQuery("#Validtempat").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Mohon Isikan Tempat Lahir"
                });
            jQuery("#Ayah").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Mohon Isikan Nama Ayah"
                });
            jQuery("#payah").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Mohon Isikan Pekerjaan Ayah"
                });
            jQuery("#ibu").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Mohon Isikan Nama Ibu"
                });
            jQuery("#pibu").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Mohon Isikan Pekerjaan Ibu"
                });
            jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Mohon isi NISN Dengan Angka"
		    
                });
		
		jQuery("#Namalengkap").validate({
                    expression: "if (VAL.length > 3 && VAL && isNaN(VAL) && VAL) return true; else return false;",
                    message: "Maaf Nama Lengkap Harus Valid"
		    //keterangan panjang karakter tidak boleh kurang dari 3 tidak boleh angka dan tidak boleh kosong
		    //isNan maksudnya itu ket bahwa itu huruf
		    //!isNaN maksudnya itu adalah tidak huruf
		    
                });
		  jQuery("#ValidNisn").validate({
                    expression: "if (VAL.length > 9 && VAL && !isNaN(VAL) && VAL) return true; else return false;",
                    message: "Maaf isi NISN belum VALID"
		    //keterangan panjang karakter tidak boleh kurang dari 8 tidak boleh angka dan tidak boleh kosong
                });
				
          
                jQuery("#Validkodepos").validate({
                    expression: "if (VAL.length > 4 && VAL && !isNaN(VAL) && VAL) return true; else return false;",
                    message: "Mohon Cek Kode Pos Anda"
                });
              
                jQuery("#Validjk").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Jenis Kelamin Mohon Diisi"
                });
		  jQuery("#Validagama").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Agama Mohon disi"
                });
                jQuery("#ValidMultiSelection").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidRadio").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please select a radio button"
                });
                jQuery("#ValidCheckbox").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please check atleast one checkbox"
                });
            });
            /* ]]> */
        </script>




