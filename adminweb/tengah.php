<?php

///////////////////////////lihat/////////////////////////////////////////////
if($aksi=='home'){
echo"

 <div class='row'>
                   <div class='col-lg-12'>
			<div class='panel panel-default'>
                            <div class='panel-heading'>
                           Sambutan
                            </div>

                            <div class='panel-body'>
                              
				<p>Selamat Datang Di halaman Admin, Silahkan Pilih menu untuk pengaturan data yang di butuhkan guna mendapatkan hasil yang maksimal sesuai keinginan.</p>
		
                            </div>
			</div>
                   </div>
			
</div>



<div class='row'>
    



<div class='col-lg-6'>

                        <div class='chat-panel panel panel-primary'>
                            <div class='panel-heading'>
                                <i class='icon-comments'></i>
                                Chat
                            <div class='btn-group pull-right'>
                                <button type='button' data-toggle='dropdown'>
                                    <i class='icon-chevron-down'></i>
                                </button>
                                <ul class='dropdown-menu slidedown'>
                                    <li>
                                        <a href='#'>
                                            <i class='icon-refresh'></i> Refresh
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            </div>

                            <div class='panel-body'>
                                <ul class='chat'>";
				
				$data=mysql_query("SELECT * FROM bukutamu where status='Y' order by id_bukutm DESC");
				while($b=mysql_fetch_array($data)){
				
                                    echo"<li class='left clearfix'>
                                        <span class='chat-img pull-left'>
                                            <img src='assets/img/1.png' alt='User Avatar' class='img-circle' />
                                        </span>
                                        <div class='chat-body clearfix'>
                                            <div class='header'>
                                                <strong class='primary-font'> $b[nama] </strong>
                                                <small class='pull-right text-muted'>
                                                    <i class='icon-time'></i> $b[jam] - $b[tangal]
                                                </small>
                                            </div>
                                             <br />
                                            <p>
						$b[isi_buku]
						</p>
                                        </div>
                                    </li>
				    
                                    <li class='right clearfix'>
                                        <span class='chat-img pull-right'>
                                            <img src='assets/img/2.png' alt='User Avatar' class='img-circle' />
                                        </span>
                                        <div class='chat-body clearfix'>
                                            <div class='header'>
                                                <small class=' text-muted'>
                                                    <i class='icon-time'></i> $b[jam] - $b[tanggal]</small>
                                                <strong class='pull-right primary-font'> $b[admin]</strong>
                                            </div>
                                            <br />
                                            <p>
                                                $b[jawab]
						   </p>
                                        </div>
                                    </li>";
				}
				echo"
				    
                                   
                                </ul>
                            </div>
<form id='form1'  method='post' action='master/bukutamu.php?act=balas' enctype='multipart/form-data'>
                            <div class='panel-footer'>
                                <div class='input-group'>
				
                                    <input id='Text1' name='jw' type='text' class='form-control input-sm' placeholder='Type your message here...' />
                                    <span class='input-group-btn'>
                                        
					<input type='submit' value='Kirim'  class='btn btn-warning btn-sm' id='Button1'>
					</span>
					</form>
                                    
                                </div>
                            </div>

                        </div>


                    </div>

 
</div>
       
</div>

</div>
   
        
            
                  
                
         

     
";
}









///////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='editartikel'){
$tebaru=mysql_query(" SELECT * FROM berita WHERE id_berita=$_GET[id_b]");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
			 <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>

<form id='form1' enctype='multipart/form-data' method='post' action='master/artikel.php?act=editberita&id_b=$_GET[id_b]&gb=$t[gambar]'>
       <div class='form-grup'>
        <label>Kategori</label>
		    <selectclass='form-control' name='kat'>";

             $tampil=mysql_query("SELECT * FROM kategori ORDER BY kategori");
          if ($t[id_kat]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($t[id_kat]==$w[id_kategori]){
              echo "<option value=$w[id_kategori] selected>$w[kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[kategori]</option>";
            }
          }

    echo "</selectclass=><br>
    	<label>Judul</label>
        <input type='text'  value='$t[judul]' name='jd' class='form-control'/><br>
		<label>Isi</label>
       <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
			<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br><br />";
		if($t[gambar]!=0){echo"
		<img src='../foto/data/$t[gambar]' width='150' />";}
            echo"

            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>
    </div></div></div></div></div></div>
";
}
////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='viewartikel'){
$detail=mysql_query(" SELECT * FROM berita WHERE id_berita='$_GET[id_b]'");
$d=mysql_fetch_array($detail); 
echo"

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>
			
     
<a href='index.php?aksi=editartikel&id_b=$d[id_berita]' title='Edit' class='btn btn-info'>EDIT</a>
<a href='master/artikel.php?id_b=$d[id_berita]&act=hapus&gbr=$d[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $d[judul] ?')\" title='Hapus' class='btn btn-info'>HAPUS</a><br /><br />	    	  
 <h4>$d[judul]</h4><em>$d[tanggal] - $d[jam]</em><br />
    ";
if($d[gambar] !=0){echo"<img src=../foto/data/$d[gambar]  class=box-shadow2 width=200 height=130 align='left'/>";}else{echo"";}
echo"$d[isi]</div></div></div></div></div></div>";
}


elseif($aksi=='artikel'){
echo"			
	<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button>
			      <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Dilihat</th>
					    <th>Tanggal</th>
					     <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM berita,kategori WHERE id_kat=id_kategori ORDER BY id_berita DESC ");
while ($t=mysql_fetch_array($tebaru)){
$no++;  
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[judul]</td>
                                            <td>$t[kategori]</td>
                                            <td>$t[dilihat]</td>
					     <td>$t[tanggal]</td>
					     <td>
					     
					     <a href='index.php?aksi=editartikel&id_b=$t[id_berita]' title='Edit' class='icon-edit'>&nbsp;
				<a href='index.php?aksi=viewartikel&id_b=$t[id_berita]' title='Lihat' class='icon-eye-open'>&nbsp;
				<a href='master/artikel.php?id_b=$t[id_berita]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus' class='icon-trash '>
			
				</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>";
	  /// bagian input artikel form
	  echo"
	  <div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Artikel</h4>
                                        </div>
                                        <div class='modal-body'>
                                           
					   <form id='form1' enctype='multipart/form-data' method='post' action='master/artikel.php?act=inputberita'>
			<div class='form-group'>
       <label>Kategori</label>
		    <selectclass='form-control' name='kat'>
        	<option value=0 selected>----- Pilih Kategori -----</option>";
            $tampil=mysql_query("SELECT * FROM kategori ORDER BY kategori");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[kategori]</option>";
            }
              
        echo "</selectclass=><br>
    	<label>Judul</label>
        <input type='text' class='form-control' name='jd'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
	
    	<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br><br />
            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>
    </div></div></div></div></div>	
";
}
/////////////////////////////////////////////////////////////////////////////////////////////////


elseif($aksi=='viewpsb'){
$detail=mysql_query(" SELECT * FROM pendaftaran WHERE no_daftar='$_GET[id_b]'");
$d=mysql_fetch_array($detail); 
echo"<div class='grid_9'>
      <h1>$d[judul]</h1><br />
<a href='javascript:history.go(-1)' class='ok'><<< KEMBALI</a>

<table width='400' border='0' align='center' cellpadding='0'>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='3' rowspan='4'><img src='../foto/pendaftar/small_$d[gambar]' width=100></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width='109'>&nbsp;</td>
    <td width='13'>&nbsp;</td>
    <td width='101'>&nbsp;</td>
    <td width='8'>&nbsp;</td>
  </tr>
  <tr>
    <td>NO Daftar </td>
    <td>:</td>
    <td colspan='4'>$d[no_daftar]</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height='24'>Nama</td>
    <td>:</td>
    <td colspan='4'>$d[nama]</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td colspan='4'>$d[alamat]</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>No kontak </td>
    <td>:</td>
    <td colspan='4'>$d[alamat]</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Asal Sekolah </td>
    <td>:</td>
    <td colspan='4'>$d[sekolah_asl]</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Tanggal daftar </td>
    <td>:</td>
    <td colspan='3'>$d[tgl_daftar]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='3'>&nbsp;</td>
  </tr>
</table>

</div>";
}


elseif($aksi=='psb'){
			
	echo"<div class='grid_9'>
      <h1 class='content_edit'>Daftar Siswa Yang Mendaftar</h1>
    </div><br /><br /><br /><br />
<a href='master/export_psb.php' class='ok'>Export Excel</a><br /><br />
<table class='data display datatable' id='box-table-a' summary='Employee Pay Sheet'>
					<thead>
						<tr>
						    <th width=4% >No</th>
							<th width=10% >Nomor Daftar</th>
							<th width=15% >Nama</th>
							<th width=10%>Alamat</th>
							<th width=8% >Jumlah Nilai Un</th>
							<th width=8% >Jumlah Nilai US</th>
							<th width=8% >Fhoto </th>
							<th width=8%>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM pendaftaran ORDER BY no_daftar DESC ");
while ($t=mysql_fetch_array($tebaru)){
$no++;

					   echo"<tr class='gradeA' >
					        <td align=center >$no</td>
							<td>$t[no_daftar]</td>
							<td  >$t[nama]</td>
							<td align=center >$t[alamat], $t[rt], $r[rw]</td>
							<td align=center >$t[n_un]</td>
							<td align=center >$t[n_us]</td>
							<td align=center ><img src='../foto/pendaftar/small_$t[gambar]' width=50></td>
							<td class='options-width3'  >
					<center>
				<a href='index.php?aksi=viewpsb&id_b=$t[no_daftar]' title='Lihat' ><img src='images/detail.png'></a>&nbsp;
				<a href='master/psb.php?id_b=$t[no_daftar]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus'><img src='images/del.png'>
				</center>
					    </td></tr>";
					 	}						
						echo"</tbody>
				</table>"; 		
			
			
}



///////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='kategori'){
echo"

<div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
			Data Kategori Artikel
                        </div>
                        <div class='panel-body'>
                            <ul class='nav nav-pills'>
                                <li class='active'><a href='#home-pills' data-toggle='tab'>Data Kategori</a>
                                </li>
                                <li><a href='#profile-pills' data-toggle='tab'>Input Kategori</a>
                                </li>
                               
                            </ul>

                            <div class='tab-content'>
                                <div class='tab-pane fade in active' id='home-pills'>
                                    <h4>Data Kategori Artikel</h4>
                                   
				   <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                           
                                            
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM kategori ORDER BY id_kategori DESC ");
while ($t=mysql_fetch_array($tebaru)){
              
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[kategori]</td>
                                            
                                          
					     <td>
					     <a href='index.php?aksi=kategori&id_k=$t[id_kategori]&kat=edit' title='Edit' class='icon-edit'>
					     <a href='master/kategori.php?id_k=$t[id_kategori]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $d[kategori] ?')\" title='Hapus' class='icon-trash '>
					     
					  
			</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
				 </div>
				 
				 
                                <div class='tab-pane fade' id='profile-pills'>
                                    <h4>Input Kategori</h4>
                                   
<form id='form1' method='post' enctype='multipart/form-data' action='master/kategori.php?act=inputkategori'>
      <div class='col-lg-7'>
            <input name='kat' type='text' size='20' class='form-control' placeholder='nama kategori'>
         </div>
	  
	         
            <input name='gb' type='file' size='50' class='btn btn-default'>
       

          
            <input type='submit' name='Submit' value='Simpan kategori' class='btn btn-primary'>
    
    </form>  
				   
				   
				   
				           
				
				
				
				</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

";}







////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='profil'){
echo"			
	<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI PROFIL
                        </div>
                        <div class='panel-body'>
			
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Profil</th>
                                            <th>Isi</th>
                                            <th>Gambar</th>
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM profil ORDER BY id_profil DESC ");
while ($t=mysql_fetch_array($tebaru)){
                $isi_berita = strip_tags($t['isi']); 
                $isi = substr($isi_berita,0,70); 
                $isi = substr($isi_berita,0,strrpos($isi," ")); 
				if($t[aktif]=='Y'){$mk='<strong>Tampil</strong>';}else{$mk='Tidak';}
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[nama]</td>
                                            <td>$isi</td>
                                            <td>$mk</td>
					     <td>
					     <a href='index.php?aksi=editprofil&id_p=$t[id_profil]' class='icon-edit' title='Edit'></a>&nbsp;
						<a href='index.php?aksi=viewprofil&id_p=$t[id_profil]' title='Lihat' class='icon-eye-open'></a>&nbsp;
				</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>	
	";
}

/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='editprofil'){
$tebaru=mysql_query(" SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT PROFIL
                        </div>
                        <div class='panel-body'>
			
<form id='form1' enctype='multipart/form-data' method='post' action='master/profil.php?act=editpro&id_p=$_GET[id_p]'>
       
       <div class='form-grup'>
        <label>Judul</label>
        <input type='text' class='form-control' value='$t[nama]' name='jd'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
    	<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br>
		<label>Aktifkan Gambar</label>";
        if($t[aktif] =='Y'){$ab='checked';}
		if($t[aktif] =='N'){$ac='checked';}
        echo"<input type='radio' name='pi' value='Y' $ab >
		<strong>YA</strong>
		<input type='radio' name='pi' value='N' $ac >
        <strong>TIDAK</strong>
		<br /><br />
		";
		if($t[aktif]!='N'){echo"
		<img src='../foto/foto_profil/$t[foto]' width='215' height='160' class='box-shadow2'/><br /><br />";}
            echo"<div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form></div> </div></div> </div></div> </div>
";
}

elseif($aksi=='viewprofil'){
$tebaru=mysql_query(" SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
$t=mysql_fetch_array($tebaru);
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>$t[nama]
                        </div>
                        <div class='panel-body'>
		
<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>
";
if($t[aktif] =='Y'){echo"<img src=../foto/foto_profil/$t[foto]  class=box-shadow2 width=50% /><br /><br />";}
echo"$t[isi] </div></div></div></div></div>";
}
/////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='galeri'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI GALERI
                        </div>
                        <div class='panel-body'>
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
					<thead>
						<tr>
						    <th width=1% >No</th>
							<th width=20% >Jundul</th>
							<th width=5% >Foto</th>
							<th width=35%>Keterangan</th>
							<th width=5%>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM galeri ORDER BY id_galeri DESC");
while ($t=mysql_fetch_array($tebaru)){
$no++;

					   echo"<tr class='gradeA' >
					        <td align=center valign='top'>$no</td>
							<td valign='top'>$t[judul]</td>
							<td  valign='top' align='center'><img alt='galeri'  src='../foto/galleri/$t[gambar]' width=80 height=60 class='box-shadow2'/></td>
							<td  valign='top'>$t[keterangan]</td>
							<td>
					
				<a href='index.php?aksi=editgaleri&id_g=$t[id_galeri]' title='Edit' class='icon-edit'></a>&nbsp;
				<a href='master/galleri.php?id_g=$t[id_galeri]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus' class='icon-trash'>
				
					    </td></tr>";
					 	}						
						echo"</tbody>
				</table></div></div></div></div></div></div></div>";
				
				
				
				echo"
				<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Galeri</h4>
                                        </div>
                                        <div class='modal-body'>
				<form id='form1'  method='post' enctype='multipart/form-data' action='master/galleri.php?act=inputgalleri'>
       <div class='form-grup'>
       <label>Gambar</label>
        <input type='file' size='50'name='gambar'/>
    	<label>Judul</label>
        <input type='text' class='form-control'  name='jd'/>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>	
            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div>
	    </div>
    </form>
    </div></div></div></div></div> 
				
				
				
				";
}
/////////////////////////////////////////////////////////////////////////////////////////////////


elseif($aksi=='editgaleri'){
$tebaru=mysql_query(" SELECT * FROM galeri WHERE id_galeri=$_GET[id_g] ");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI GALERI
                        </div>
                        <div class='panel-body'>
<form id='form1' method='post' enctype='multipart/form-data' action='master/galleri.php?act=editgalleri&gb=$t[gambar]&id_g=$t[id_galeri]'>
       <div class='form-grup'>
       <img src='../foto/galleri/$t[gambar]' width='215' height='160' class='box-shadow2'/><br />
       <label>Gambar</label>
        <input type='file' size='50'name='gambar'/><br>
    	<label>Judul</label>
        <input type='text' class='form-control'  name='jd' value='$t[judul]'/><br>
		<label>Isi</label>
       <textarea id='text-ckeditor' class='form-control' name='isi'>$t[keterangan]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>		
            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div>
	    </div>
    </form>
    </div></div></div></div></div></div>
";
}
////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='agenda'){
echo"

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Data Agenda Kegiatan
                        </div>
                        <div class='panel-body'>
			
                            <div class='panel-group' id='accordion'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h4 class='panel-title'>
                                            <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>Agenda</a>
                                        </h4>
                                    </div>
                                    <div id='collapseOne' class='panel-collapse collapse in'>
                                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tema</th>
                                            <th>Isi</th>
                                            <th>Tanggal Mulai</th>
					    <th>Tanggal Selesai</th>
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM agenda ORDER BY id_agenda DESC ");
while ($t=mysql_fetch_array($tebaru)){
                
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[tema]</td>
                                            <td>$t[isi_agenda]</td>
                                            <td>$t[tgl_mulai]</td>
					      <td>$t[tgl_selesai]</td>
					     <td>
					     
					     <a href='index.php?aksi=editagenda&id_a=$t[id_agenda]' title='Edit' class='icon-edit'></a>&nbsp;
				<a href='index.php?aksi=lihat_agenda&id=$t[id_agenda]' title='Lihat' class='icon-eye-open'></a>&nbsp;
				<a href='master/agenda.php?id_a=$t[id_agenda]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[tema] ?')\" title='Hapus' class='icon-trash '></a>
			
					  
				</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                                    </div>
                                </div>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>
                                        <h4 class='panel-title'>
                                            <a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>Tambah Agenda</a>
                                        </h4>
                                    </div>
                                    <div id='collapseTwo' class='panel-collapse collapse'>
          
	  <div class='panel-body'>
                                        
	<form  method='post' action='master/agenda.php?act=inputagenda' >
	<label>Tema</label>
    	<input class='form-control' placeholder='Masukan Tema' name='tm' required>
		
		<label>Tanggal Mulai</label>
    
      <input type='text' class='form-control' id='datepicker' name='tglm' required/>
	
		<label>Tanggal Selesai</label>
       <input type='text' class='form-control' id='datepicker1' name='tgls' required/>
		
		<label>Jam</label>
        <input class='form-control timepicker-default' type='text' name='jm' required/>
		
		<label>Tempat</label>
        <input class='form-control' placeholder='Masukan Tema' name='tp' required>
		
		<label>Pengirim</label>
        <input class='form-control' placeholder='Masukan Tema' name='pg' required>
		<label>Isi Agenda</label>
		<textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
            <input type='submit' value='Simpan' class='btn btn-primary'  />
             <input type='reset' value='Ulangi' class='btn btn-default'  />
    </form>
					
					</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>

";
}
//////////////////////////////////////
elseif($aksi=='lihat_agenda'){
$tebaru=mysql_query(" SELECT * FROM agenda WHERE id_agenda=$_GET[id]  ");
$t=mysql_fetch_array($tebaru);
echo"<div class='row'>
                <div class='col-lg-6'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>$t[tema]
                        </div>
                        <div class='panel-body'>
		

";

echo"<h4>Tema Agenda</h4>
<p>$t[isi_agenda]</p>

<h4>Lokasi</h4>
<p>$t[tempat]</p>

<h4>Tanggal Mulai Dan Selesai</h4>
<p>$t[tgl_mulai] s/d $t[tgl_selesai]</p>

<h4>Tanggal Posting</h4>
<p>$t[tgl_posting]</p>

<h4>Pengirim</h4>
<p>$t[pengirim]</p>


<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>
</div></div></div></div></div>";
}

///////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='editagenda'){
$tebaru=mysql_query(" SELECT * FROM agenda WHERE id_agenda=$_GET[id_a] ");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Edit Kegiatan
                        </div>
                        <div class='panel-body'>

<form id='form1'  method='post' action='master/agenda.php?act=editagenda&id_a=$t[id_agenda]'>
    	<label>Tema</label>
        <input type='text' class='form-control'  name='tm' value='$t[tema]'/><br>
		
		<label>Tanggal Mulai</label>
        <input type='text' class='form-control'  size='50' name='tglm' id='pertg1' value='$t[tgl_mulai]' /><br>
		<script type='text/javascript'>
        // BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
        jQuery('#pertg1').datepicker()</script>
	   
		<label>Tanggal Selesai</label>
        <input type='text' class='form-control'  size='50' name='tgls' id='pertg2' value='$t[tgl_selesai]' /><br>
		<script type='text/javascript'>
        // BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
        jQuery('#pertg2').datepicker()</script>
		
		<label>Jam</label>
        <input type='text' class='form-control' size='50' name='jm' value='$t[jam]'/><br>
		
		<label>Tempat</label>
        <input type='text' class='form-control'  name='tp' value='$t[tempat]'/><br>
		
		<label>Pengirim</label>
        <input type='text' class='form-control'  name='pg' value='$t[pengirim]'/><br>
		
		<label>Isi Agenda Kegiatan</label>
       <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi_agenda]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script><br />	
            <input type='submit' value='Simpan' class='btn btn-primary'  />
             <input type='reset' value='Ulangi' class='btn btn-default'  />
    </form>
    </div> </div> </div> </div> </div>  </div> 
";
}
///////////////////////////lihat/////////////////////////////////////////////
elseif($aksi=='lihat_bukutamu'){
	$agenda2=mysql_query(" SELECT * FROM komentar WHERE id_tamu='$_GET[id_bk]'");
	$d2=mysql_fetch_array($agenda2); 
	$komen=wordwrap($d2['komentar'], 100, "<br />\n", 1);
	
	echo"
	
	<div class='row'>
                <div class='col-lg-7'>
		 <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI KOMENTAR
                        </div>
                        <div class='panel-body'>
			<h4>Nama</h4>
						<p>$d2[nama]</p>
						<h4>Waktu</h4>
						<p>$d2[tgl]&nbsp; $d2[jam]</p>
						<h4>Isi Komentar</h4>
						<p>$komen</p>
						<table><tr>
    <td valign='top'><strong>Jawab </strong></td>
    <td valign='top'><strong>:</strong></td>
    <td valign='top'>
	
<form id='edit'  method='post' action='master/bukutamu.php?act=balas&id_bk=$d2[id_tamu]' enctype='multipart/form-data'>
	        <textarea id='text-ckeditor' class='form-control' name='jw'>$d2[jawab]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
	            <input type='submit' name='Submit' value='Simpan' class='ok'>
            <input type='reset' name='Submit2' value='Reset' class='ok'>
    </form>
	</td>
  </tr></table>
						";
						
						 if($d2[status]=='N'){
				echo"<a href='master/bukutamu.php?act=status&id_bk=$d2[id_tamu]'
				title='publikasikan' class='btn btn-primary btn-xs'>Publikasi</a>";
				}else{echo"<a href='master/bukutamu.php?act=status&id_bk=$d2[id_tamu]&beku=beku' title='jangan publikasikan'class='btn btn-danger btn-xs'>Jangan Publikasi</a>";
				}
						echo"</div>
						</div>
						</div>
						</div></div></div>
						
	";		
			
}



elseif($aksi=='bukutamu'){
echo"<div class='row'>
                <div class='col-lg-12'>
		
			
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI KOMENTAR
                        </div>
                        <div class='panel-body'>	
			
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Waktu</th>
                                            <th>Isi</th>
					    <th>Status</th>
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM komentar ORDER BY id_tamu DESC");
while ($t=mysql_fetch_array($tebaru)){		
                $isi=substr($t['isi_buku'], 0, 50); 
                $isi_berita = strip_tags($isi); 
$no++;
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[nama]</td>
                                            <td>$t[tgl]&nbsp; $t[jam]</td>
                                            <td>$isi_berita</td>
					    <td>";
					    if($t[status]=='N'){
				echo"<a href='master/bukutamu.php?act=status&id_bk=$t[id_tamu]' title='publikasikan'> 
				<img src='assets/img/del.png'></a>";
				}else{echo"<a href='master/bukutamu.php?act=status&id_bk=$t[id_tamu]&beku=beku' title='jangan publikasikan'> 
				<img src='assets/img/oke.png'></a>";
				}
				echo"</td>
					     
					     <td>
					     <a href='index.php?aksi=lihat_bukutamu&id_bk=$t[id_tamu]' title='Lihat'><img src='assets/img/detail.png' ></a>&nbsp;
						
						<a href='master/bukutamu.php?id_bk=$t[id_tamu]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus'><img src='assets/img/del.png'>
				</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>

";			
			
			
			

}






elseif($aksi=='pegawai'){
echo"

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI DATA GURU
                        </div>
                        <div class='panel-body'>
			
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button>
							
							<a href='index.php?aksi=importpegawai' class='btn btn-info'>
                                Import data
                            </a> 
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NIP</th>
					    <th>Jabatan</th>
                                            <th>Status</th>
					    <th>Tamatan</th>
					    
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
$peg=mysql_query("SELECT * FROM pegawai ORDER BY id_gr ASC ");
while ($t=mysql_fetch_array($peg)){
                
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>";
					     if ($t['foto']!=''){
			echo "<img alt='galeri'  src='../foto/guru/$t[foto]' width=60 height=70 class='box-shadow2'/>";
		}else{ echo "<img alt='galeri'  src='../foto/guru.png' width=60 height=70 class='box-shadow2'/>"; }
							echo"</td>
							
                                           <td>$t[nama]</td>
                                            <td>$t[nip]</td>
					     <td>$t[jabatan]</td>
					      <td>$t[status]</td>
					       <td>$t[tamatan]</td>
					       
						
					     <td>
					        <a href='index.php?aksi=editpegawai&id_gr=$t[id_gr]' title='Edit' class='icon-edit '></a>&nbsp;
						<a href='master/pegawai.php?id_gr=$t[id_gr]&act=hapus&gbr=$t[foto]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus' class='icon-trash'>
				              </td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>";
	  
	  
//////////////////////////tampilan form modal//////

echo"
<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Guru</h4>
                                        </div>
                                        <div class='modal-body'>
                                           <form role='form' method='post' action='master/pegawai.php?act=inputpegawai' enctype='multipart/form-data'>
                                        <div class='form-group'>
                                            <label>Nama Lengkap</label>
                                            <input class='form-control' placeholder='Masukan Nama' name='nm'/>
					
					    <div class='form-group'>
					    <label>Foto :</label>
			                    <input type='file'  size='50'name='gambar'/>
					    </div>
					    
					    <div class='form-group'>
		 	                   <label>Jenis Kelamin :</label>
					   <div class='radio'>
			                   <label>
					   <input type='radio' name='kel' value='P'> PRIA</label>
					   </div>
					   <div class='radio'>
					   <label>
		                           <input type='radio' name='kel' value='W'> WANITA</label>
			                   </div>
					   </div>
					   
					   
			                 <div class='form-group'>
		                          <label>Status :</label>
					  <div class='radio'>
                                          <input type='radio' name='st' value='PNS'>PNS
					  </div>
					  
					  <div class='radio'>
		                          <input type='radio' name='st' value='Non PNS'>Non PNS
			                  </div>
					  </div>
					  
					  
					  <div class='form-group'>
		                         <label>Sertifikasi :</label>
					 <div class='radio'>
                                         <input type='radio' name='sk' value='SUDAH'> SUDAH
					 </div>
					 
					 <div class='radio'>
		                         <input type='radio' name='sk' value='BELUM'>BELUM		
					 </div>
					 </div>
					 
					 
					 
		                         <label>Jabatan :</label>
					 
                                         <input type='text' class='form-control'  placeholder='Masukan Jabatan' size='50' name='jb'/>
			                 
					  
					  
					  
					  <div class='form-group'>
		                         <label>NIP :</label>
					 <input type='text' class='form-control'  placeholder='Masukan NIP' size='50' name='nip'/>
					 </div>
					 
					 <div class='form-group'>
		                         <label>Tamatan :</label>
                                         <input type='text' class='form-control'  placeholder='Masukan Tamatan' name='tm'/>
			                  </div>
                                    
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div>
					</form>
                                    </div>
                                </div>
                            </div>
                    </div>
		    </div>
 
	  ";



}

///////////////////////////////////////////////////////////////////////////////////////


elseif($aksi=='editpegawai'){
$tebaru=mysql_query(" SELECT * FROM pegawai WHERE id_gr=$_GET[id_gr] ");
$t=mysql_fetch_array($tebaru);
		if($t[kelamin] =='P'){$ab='checked';}else{$ac='checked';}
		if($t[status] =='PNS'){$bb='checked';}else{$bc='checked';}
		if($t[sertifikasi] =='SUDAH'){$cb='checked';}else{$cc='checked';}
		
echo"<div class='col-lg-8'>
      <div class='modal-body'>

<form id='form1' method='post' action='master/pegawai.php?act=editpegawai&id_gr=$t[id_gr]&gb=$t[foto]' enctype='multipart/form-data'>
    	
	<div class='form-group'>
	<label>Nama :</label>
        <input type='text' class='form-control'  name='nm' value='$t[nama]'/><br>
	</div>
	
	
      <div class='form-group'>
	<label>Foto :</label>
    <input type='file' class='form-control' size='50'name='gambar'/><br>
	</div>";
							if($t[foto]!=''){
							echo"<br /><img alt='galeri'  src='../foto/guru/$t[foto]' width=170 height=180 class='box-shadow2'/>";
							}else{echo"<br /><img alt='galeri'  src='mos-css/img/nopic2.jpg' width=170 height=180 class='box-shadow2'/>";}
							echo"
  <div class='form-group'>
	    <label>Jenis Kelamin :</label>
	    <div class='radio'>
        <input type='radio' name='kel' value='P' $ab > PRIA</div>
	<div class='radio'>
	<input type='radio' name='kel' value='W' $ac > WANITA</div>
		
</div>

<div class='form-group'>
	
    	<label>Status :</label>
	<div class='radio'>
        <input type='radio' name='st' value='PNS' $bb >PNS </div>
	<div class='radio'>
        <input type='radio' name='st' value='Non PNS' $bc >Non PNS </div>
</div>

<div class='form-group'>
         <label>Sertifikasi :</label>
	 <div class='radio'>
        <input type='radio' name='sk' value='SUDAH' $cb > SUDAH </div>
	<div class='radio'>
        <input type='radio' name='sk' value='BELUM' $cc > BELUM</div>	
</div>

	
	<label>Jabatan :</label>
        <input type='text' class='form-control'   size='50' name='jb' value='$t[jabatan]' /><br>


       
    
        <label>NIP :</label>
        <input type='text' class='form-control'  size='50' name='nip' value='$t[nip]' /><br>
	
		
        <label>Tamatan :</label>
        <input type='text' class='form-control'  name='tm' value='$t[tamatan]' /><br><br />
	
            
	    
	    <input type='submit' name='Submit' value='Simpan' class='btn btn-primary'>
            <input type='reset' name='Submit2' value='Reset' class='btn btn-default' >
    </form>
    
    
                  </div>
                                </div></div></div>
                  
";
}

elseif($aksi=='importpegawai'){
		
		echo"<div class='panel panel-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Form Import Exel</h3>
			   <div class='box-header'>
				<a href='guru_contoh.xls' class='btn btn-info'>Download Template</a>
				</div>
            </div>
            <div class='box-body'>
			<form name='myForm' id='myForm' onSubmit='return validateForm()' action='index.php?aksi=importpegawai&act=importexel' method='post' enctype='multipart/form-data'>
     <div class='col-md-12'><div class='form-group'> <input class='form-control' type='file' id='filepegawaiall' name='filepegawaiall' /></div></div>
   <br/>
     <input class='btn btn-default' type='submit' name='submit' value='Import' />
		<input type='button' class='btn btn-default' value='Batal' onclick='self.history.back()'>
</form></br>";
if (isset($_POST['submit'])) {
	echo"
<div id='progress' style='width:500px;border:1px solid #ccc;'></div>
<div id='info'></div>";
}
require "excel_reader.php";
//jika tombol import ditekan
if(isset($_POST['submit'])){
    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    if($_POST['drop']==1){
//             kosongkan tabel pegawai
             $truncate ="TRUNCATE TABLE pegawai";
             mysql_query($truncate);
    };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//        menghitung jumlah real data. Karena kita mulai pada baris ke-2, maka jumlah baris yang sebenarnya adalah 
//        jumlah baris data dikurangi 1. Demikian juga untuk awal dari pengulangan yaitu i juga dikurangi 1
        $barisreal = $baris-1;
        $k = $i-1;
        
// menghitung persentase progress
        $percent = intval($k/$barisreal * 100)."%";

// mengupdate progress
        echo '<script language="javascript">
        document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.'; background-color:lightblue\">&nbsp;</div>";
        document.getElementById("info").innerHTML="'.$k.' data berhasil diinsert ('.$percent.' selesai).";
        </script>';

//       membaca data (kolom ke-1 sd terakhir)
   
      $nama          = $data->val($i, 1);
	  $nip          = $data->val($i, 2);
      $jabatan = $data->val($i, 3);
      $kelamin = $data->val($i, 4);
	  $status = $data->val($i, 5);
	  $tamatan = $data->val($i, 6);
	  $sertifikasi = $data->val($i, 7);
//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into pegawai (nama,nip,jabatan,kelamin,status,tamatan,sertifikasi)
	  values('$nama','$nip','$jabatan','$kelamin','$status','$tamatan','$sertifikasi')";
      $hasil = mysql_query($query);
      
      flush();

//      kita tambahkan sleep agar ada penundaan, sehingga progress terbaca bila file yg diimport sedikit
//      pada prakteknya sleep dihapus aja karena bikin lama hehe
      

    }
        
//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
	
}
	echo"  </div>
	 </div>

	 </div></div>
                  
";
}

///////////////////////////lihat/////////////////////////////////////////////
elseif($aksi=='link'){
echo"<div class='grid_9'>
      <h1 class='content_edit'>Link</h1>
    </div><br /><br /><br /><br />
<a href='index.php?aksi=tlink' class='ok'>TAMBAH LINK</a><br /><br />
<table class='data display datatable' id='box-table-a' summary='Employee Pay Sheet'>
					<thead>
						<tr>
						    <th width=1% >No</th>
							<th width=15% >Nama</th>
							<th width=30% >Link</th>
							<th width=3%>Icon</th>
							<th width=8%>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM link ORDER BY id DESC ");
while ($t=mysql_fetch_array($tebaru)){		
$no++;

					   echo"<tr class='gradeA' >
					        <td align=center >$no</td>
							<td>$t[nama]</td>
							<td  >$t[link]</td>
							<td align=center ><img src='../gambar/link/$t[icon]' width='24' height='24' ></td>
							<td class='options-width3'  >
					<center>
				<a href='index.php?aksi=elink&id_l=$t[id]' title='Edit'><img src='mos-css/img/edit.png'></a>&nbsp;&nbsp;&nbsp;
				<a href='master/link.php?id_l=$t[id]&act=hapus&gbr=$t[icon]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus'><img src='mos-css/img/del.png'>
				</center>
					    </td></tr>";
					 	}						
						echo"</tbody>
				</table>"; 
}
/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='tlink'){
echo"
<div class='grid_9'>
      <h1 class='content_edit'>Input Link</h1>
    </div><br /><br /><br /><br />
	
<a href='javascript:history.go(-1)' class='ok'>KEMBALI</a><br /><br />

<form id='form1' enctype='multipart/form-data' method='post' action='master/link.php?act=inputlink'>
        <label>Nama</label>
        <input type='text' class='smallInput wide'  name='nm'/><br>
		<label>Link</label>
        <input type='text' class='smallInput wide'  name='lk'/><br>
	<label>Deskripsi</label>
	<textarea name='isi' rows='7' cols='30' id='loko'></textarea>	
    	<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br><br />
            <input type='submit' name='Submit' value='Simpan' class='ok'>
            <input type='reset' name='Submit2' value='Reset' class='ok'>
    </form>
";
}
////////////////////////////////////////////////////////////////////
elseif($aksi=='elink'){
$detail=mysql_query(" SELECT * FROM link WHERE id='$_GET[id_l]'");
$d=mysql_fetch_array($detail); 
echo"
<div class='grid_9'>
      <h1 class='content_edit'>Edit Link</h1>
    </div><br /><br /><br /><br />
	
<a href='javascript:history.go(-1)' class='ok'>KEMBALI</a><br /><br />

<form id='form1' enctype='multipart/form-data' method='post' action='master/link.php?act=editlink&id_l=$_GET[id_l]&gb=$d[icon]'>
        <label>Nama</label>
        <input type='text' class='smallInput wide'  name='nm' value='$d[nama]' /><br>
		<label>Link</label>
        <input type='text' class='smallInput wide'  name='lk' value='$d[link]' /><br>
	<label>Deskripsi</label>
	<textarea name='isi' rows='7' cols='30' id='loko'>$d[isi]</textarea>		
    	<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br><br />
            <input type='submit' name='Submit' value='Simpan' class='ok'>
            <input type='reset' name='Submit2' value='Reset' class='ok'>
    </form>
";
}
////////////////////////////////////////////////////////////////////
elseif($aksi=='header'){
echo"<div class='grid_9'>
      <h1 class='content_edit'>Header</h1>
    </div><br /><br /><br /><br />";
    
echo"
<a href='index.php?aksi=inputheader' class='ok'>TAMBAH HEADER</a><br /><br />
<table class='data display datatable' id='box-table-a' summary='Employee Pay Sheet'>
					<thead>
						<tr>
						    <th width=5% >No</th>
							<th width=10% >Nama</th>
							<th width=20% >Keterangan</th>
							<th width=50% >Gambar</th>
							<th width=3%>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM header ORDER BY id_header ASC ");
$no=1;
while ($t=mysql_fetch_array($tebaru)){	

					   echo"<tr class='gradeA' >
					      <td valign='middle' >$no</td>
					        <td valign='middle' >$t[judul]</td>
						<td valign='middle' >$t[ket]</td>
							<td align=center ><img width='350' height='100' src='../foto/header/$t[gambar]'></td>
							<td class='options-width3' align=center valign='middle' >
					<center>
				<a href='index.php?aksi=editheader&id_g=$t[id_header]' title='Edit'><img src='mos-css/img/edit.png'></a>
				<a href='master/header.php?id_h=$t[id_header]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus'><img src='mos-css/img/del.png'>

				</center>
					    </td></tr>";
					    $no++;
					 	}						
						echo"</tbody>
				</table>"; 
}


elseif($aksi=='editheader'){
$gm=mysql_query(" SELECT * FROM header WHERE id_header='$_GET[id_g]' ");
$g=mysql_fetch_array($gm);

echo"	
<form id='form1' enctype='multipart/form-data' method='post' action='master/header.php?act=editheader&gb=$g[gambar]'>
        <label>Nama : $g[judul]</label>
	 <input type='file'class='form-control' size='50'name='gambar'/><br><br />
	<label>Keterangan :</label>
        <textarea id='loko' name='ket' class='smallInput wide' rows='7' cols='30' >$g[ket]</textarea><br><br />
	<label>Url :</label>
        <input type='text' value='$g[url]'class='form-control' size='50' name='gambar'/><br><br />
        <input type='submit' name='Submit' value='Update' class='ok'><br /><br />
            
    </form>";
}

elseif($aksi=='inputheader'){
echo"
<div class='grid_9'>
      <h1 class='content_edit'>Tambah Header</h1>
    </div><br /><br /><br /><br />
<form id='form1' enctype='multipart/form-data' method='post' action='master/header.php?act=inputheader'>
         <label>Nama : </label>
	 <input type='text'class='form-control' size='50' name='judul' ><br><br/>
        <label>Gambar :</label>
	 <input type='file' size='5' name='gambar' />
	<label>Keterangan :</label>
        <textarea id='loko' name='ket' class='smallInput wide' rows='7' cols='30'></textarea><br><br />
        <input type='submit' name='Submit' value='Simpan' class='ok'><br/><br/>
            
    </form>";
}

/////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////lihat/////////////////////////////////////////////
elseif($aksi=='banner'){
echo"<div class='grid_9'>
      <h1 class='content_edit'>Banner</h1>
    </div><br /><br /><br /><br />
<a href='index.php?aksi=inputbanner' class='ok'>TAMBAH BANNER</a><br /><br />
<table class='data display datatable' id='box-table-a' summary='Employee Pay Sheet'>
					<thead>
						<tr>
						    <th width=1% >No</th>
							<th width=25% >Gambar</th>
							<th width=30%>Link</th>
							<th width=8%>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM banner ORDER BY id_banner DESC ");
while ($t=mysql_fetch_array($tebaru)){		
$no++;

					   echo"<tr class='gradeA' >
					        <td align=center valign='top' >$no</td>
							<td align=center ><img src='../foto/foto_banner/$t[gambar]' width='300' height='100' ></td>
							<td  valign='top' >$t[url]</td>
							<td class='options-width3'  valign='top'>
					<center>
				<a href='index.php?aksi=editbanner&id_b=$t[id_banner]' title='Edit'><img src='mos-css/img/edit.png'></a>&nbsp;&nbsp;&nbsp;
				<a href='master/banner.php?id_b=$t[id_banner]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus ?')\" title='Hapus'><img src='mos-css/img/del.png'>
				</center>
					    </td></tr>";
					 	}						
						echo"</tbody>
				</table>"; 
}
/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='inputbanner'){
echo"
<div class='grid_9'>
      <h1 class='content_edit'>Input Banner</h1>
    </div><br /><br /><br /><br />
	
<a href='javascript:history.go(-1)' class='ok'>KEMBALI</a><br /><br />

<form id='form1' enctype='multipart/form-data' method='post' action='master/banner.php?act=inputbanner'>
		<label>Link</label>
        <input type='text' class='smallInput wide'  name='lk'/><br>
		
    	<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br><br />
            <input type='submit' name='Submit' value='Simpan' class='ok'>
            <input type='reset' name='Submit2' value='Reset' class='ok'>
    </form>
";
}
/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='editbanner'){
$tebaru=mysql_query(" SELECT * FROM banner WHERE id_banner='$_GET[id_b]' ");
$t=mysql_fetch_array($tebaru);	
echo"
<div class='grid_9'>
      <h1 class='content_edit'>Input Banner</h1>
    </div><br /><br /><br /><br />
	
<a href='javascript:history.go(-1)' class='ok'>KEMBALI</a><br /><br />
<img src='../foto/foto_banner/$t[gambar]' width='300' height='100' ><br />
<form id='form1' enctype='multipart/form-data' method='post' action='master/banner.php?act=editbanner&id_b=$t[id_banner]&gb=$t[gambar]'>
		<label>Link</label>
        <input type='text' class='smallInput wide'  name='lk' value='$t[url]'/><br>
		
    	<label>Gambar</label>
        <input type='file'class='form-control' size='50'name='gambar'/><br><br />
            <input type='submit' name='Submit' value='Simpan' class='ok'>
            <input type='reset' name='Submit2' value='Reset' class='ok'>
    </form>
";
}
///////////////////////////lihat/////////////////////////////////////////////
elseif($aksi=='admin'){
			
echo"<div class='row'>
                <div class='col-lg-12'>
		
			
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI KOMENTAR
                        </div>
                        <div class='panel-body'>	
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data Admin
                            </button>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>User</th>
                                            <th>Email</th>
					  
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				
$tebaru=mysql_query(" SELECT * FROM users ");
while ($t=mysql_fetch_array($tebaru)){	
$no++;
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[nama_lengkap]</td>
							<td>$t[username]</td>
							<td >$t[email]</td>
					    <td>
				<center>
				<a href='index.php?aksi=editadmin&id=$t[id]' title='Edit'><img src='assets/img/edit.png'></a>&nbsp;
				<a href='master/admin.php?id=$t[id]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama_lengkap] ?')\" title='Hapus'><img src='assets/img/del.png'>
				</center></td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>";			
			
////////////////input admin			
			
			
echo"			
<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Guru</h4>
                                        </div>
                                        <div class='modal-body'>
                                           <form role='form' method='post' action='master/admin.php?act=inputadmin'>
                                            <div class='form-group'>
                                            <label>Nama Lengkap</label>
						 <input type='text' class='form-control' name='nm'/><br>
			
						<label>Email</label>
						<input type='text' class='form-control' name='em'/><br>
		
						<label>User Name</label>
						 <input type='text' class='form-control'  name='um'/><br>
			
						<label>Password</label>
						<input type='text' class='form-control'  name='pw'/><br><br />
		
	
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div>
					</form>
                                    </div>
                                </div>
                            </div>
                    </div>
		    </div>			
			
"; 
}

/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='editadmin'){
$tebaru=mysql_query(" SELECT * FROM users WHERE id=$_GET[id]");
$t=mysql_fetch_array($tebaru);
echo"
<div class='col-lg-6'>
      <h4 class='modal-title' id='H3'>Edit Data Admin</h4>
 
    <div class='modal-body'>
<form id='form1'  method='post' action='master/admin.php?act=editadmin&id=$t[id]'>
    
     
    	<label>Nama Lengkap</label>
        <input type='text' class='form-control'  name='nm' value='$t[nama_lengkap]'/>
	
	
	<label>Email</label>
        <input type='text' class='form-control' name='em' value='$t[email]' />
	
	
	
	<label>User Name</label>
        <input type='text' class='form-control'  name='um' value='$t[username]'/>
        
	
	<label>Password</label>
        <input type='text' class='form-control'  name='pw'/> </br>
	
	 <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          <button type='submit' class='btn btn-primary'>Save </button>
    </form>  
      </div></div></div></div>
";
}


elseif($aksi=='siswa'){
echo"

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                           Data Siswa
                        </div>
                        <div class='panel-body'>
						<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button> 
							<a href='index.php?aksi=importesiswabaru' class='btn btn-info'>
                                import exel
                            </a>
						
                            <ul class='nav nav-tabs'>
							 <li class='active'><a href='#baru' data-toggle='tab'>Siswa Baru</a>
                                </li>
                                <li><a href='#beranda' data-toggle='tab'>Kelas X</a>
                                </li>
                                <li><a href='#kelas2' data-toggle='tab'>Kelas XI</a>
                                </li>
                                <li><a href='#kelas3' data-toggle='tab'>Kelas XII</a>
                                </li>
				  <li><a href='#alumni' data-toggle='tab'>Alumni</a>
                                </li>
                            </ul>

                            <div class='tab-content'>
                                <div class='tab-pane fade in active' id='baru'>
                                    <h4>Data Siswa Kelas I</h4>
				    
<div class='panel-body'>
<div class='table-responsive'>
 <table class='table table-striped table-bordered table-hover'>
 <thead>
    <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NISN</th>
					    <th>TTlhr</th>
                                            <th>Alamat</th>
					    <th>Status Kelas</th>				    
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
$peg=mysql_query("SELECT * FROM pendaftaran WHERE kelas='new'");
while ($p=mysql_fetch_array($peg)){
                
$no3++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no3</td>
                                            <td>
					    
						<img alt='galeri'  src='../foto/pendaftar/$p[gambar]' width=60 height=70 /></td>
							
                                           <td>$p[nama]</td>
                                            <td>$p[nisn]</td>
					     <td>$p[tmpt_l]</td>
					      <td>$p[alamat]</td>
					    	<th>
						
						<form method='post' action=master/naik_kelas.php?act=X&no_daftar=$p[no_daftar]>
						<select name='kelas'>
						<option value='X'>terima</option>
						
						</select>
						<input type='submit' value='proses'>
						</form>
						</th>				       
						
					     <td>
						<a href='cetak_daftar.php?id=$p[no_daftar]' title='Lihat' target='_blank' >Cetak</a>&nbsp;
						<a href='master/pendaftaran.php?id=$p[no_daftar]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $p[nama] ?')\" 
						title='Hapus' class='icon-trash'>
							<a href='index.php?aksi=editsiswabaru&nisn=$p[nisn]' title='edit'  class='icon-edit'></a>&nbsp;
				
				              </td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
 </div>
 </div>
</div>
		  <div class='tab-pane fade' id='beranda'>
                                    <h4>Kelas II</h4>
                            
			    <div class='panel-body'>
<div class='table-responsive'>
 <table class='table table-striped table-bordered table-hover'>
 <thead>
    <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NISN</th>
					    <th>TTlhr</th>
                                            <th>Alamat</th>
			                    <th>Kelas</th>				    
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";

$peg2=mysql_query("SELECT * FROM pendaftaran WHERE kelas='X'");
while ($p2=mysql_fetch_array($peg2)){
                
$no2++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no2</td>
                                            <td>
					    
						<img alt='galeri'  src='../foto/pendaftar/$p2[gambar]' width=60 height=70 /></td>
							
                                           <td>$p2[nama]</td>
                                            <td>$p2[nisn]</td>
					     <td>$p2[tmpt_l]</td>
					      <td>$p2[alamat]</td>
					    	<td>
						<form method='post' action=master/naik_kelas.php?act=XI&no_daftar=$p2[no_daftar]>
						<select name='kelas' >
						<option>$p2[kelas]</option>
						
						<option value=XI>XI</option>
						</select><input type='submit' value='proses'>
						</form></td>			       
						
					     <td>
						<a href='cetak_daftar.php?id=$p2[no_daftar]' title='Lihat' target='_blank' >Cetak</a>&nbsp;
						<a href='master/pendaftaran.php?id=$p2[no_daftar]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $p2[nama] ?')\" 
						title='Hapus' class='icon-trash'>
							<a href='index.php?aksi=editsiswabaru&nisn=$p2[nisn]' title='edit' class='icon-edit'></a>&nbsp;</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
 </div>
 </div>
</div>		
				
				
                                <div class='tab-pane fade' id='kelas2'>
                                    <h4>Kelas II</h4>
                            
			    <div class='panel-body'>
<div class='table-responsive'>
 <table class='table table-striped table-bordered table-hover'>
 <thead>
    <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NISN</th>
					    <th>TTlhr</th>
                                            <th>Alamat</th>
			                    <th>Kelas</th>				    
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";

$peg2=mysql_query("SELECT * FROM pendaftaran WHERE kelas='XI'");
while ($p2=mysql_fetch_array($peg2)){
                
$no2++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no2</td>
                                            <td>
					    
						<img alt='galeri'  src='../foto/pendaftar/$p2[gambar]' width=60 height=70 /></td>
							
                                           <td>$p2[nama]</td>
                                            <td>$p2[nisn]</td>
					     <td>$p2[tmpt_l]</td>
					      <td>$p2[alamat]</td>
					    	<td>
						<form method='post' action=master/naik_kelas.php?act=XII&no_daftar=$p2[no_daftar]>
						<select name='kelas' >
						<option>$p2[kelas]</option>
						
						<option value=XII>XII</option>
						</select><input type='submit' value='proses'>
						</form></td>			       
						
					     <td>
						<a href='cetak_daftar.php?id=$p2[no_daftar]' title='Lihat' target='_blank' >Cetak</a>&nbsp;
						<a href='master/pendaftaran.php?id=$p2[no_daftar]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $p2[nama] ?')\" 
						title='Hapus' class='icon-trash'>
							<a href='index.php?aksi=editsiswabaru&nisn=$p2[nisn]' title='edit' class='icon-edit'></a>&nbsp;</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
 </div>
 </div>
</div>
			    

				
				
                                <div class='tab-pane fade' id='kelas3'>
                                    <h4>KELAS 3</h4>
<div class='panel-body'>
<div class='table-responsive'>
 <table class='table table-striped table-bordered table-hover'>
 <thead>
    <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NISN</th>
					    <th>TTlhr</th>
                                            <th>Alamat</th>
			                     <th>Kelas</th>			    
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";

$peg1=mysql_query("SELECT * FROM pendaftaran WHERE kelas='XII'");
while ($p1=mysql_fetch_array($peg1)){
                
$no1++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no1</td>
                                            <td>
					    
						<img alt='galeri'  src='../foto/pendaftar/$p1[gambar]' width=60 height=70 /></td>
							
                                           <td>$p1[nama]</td>
                                            <td>$p1[nisn]</td>
					     <td>$p1[tmpt_l]</td>
					      <td>$p1[alamat]</td>
					    	<td>
						<form method='post' action=master/naik_kelas.php?act=Alumni&no_daftar=$p1[no_daftar]>
						<select name='kelas' >
						<option>$p1[kelas]</option>
						<option value='Alumni'>Alumni</option>
						
						</select><input type='submit' value='proses'>
						</form></td>			       
						
					     <td>
						<a href='cetak_daftar.php?id=$p1[no_daftar]' title='Lihat' target='_blank' >Cetak</a>&nbsp;
						<a href='master/pendaftaran.php?id=$p1[no_daftar]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $p1[nama] ?')\" 
						title='Hapus' class='icon-trash'>
							<a href='index.php?aksi=editsiswabaru&nisn=$p1[nisn]' title='edit'  class='icon-edit'></a>&nbsp;  </td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
 </div>
 </div>
</div>




				
                                <div class='tab-pane fade' id='alumni'>
                                    <h4>Data alumni</h4>
                            
			    <div class='panel-body'>
<div class='table-responsive'>
 <table class='table table-striped table-bordered table-hover'>
 <thead>
    <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NISN</th>
					    <th>TTlhr</th>
                                            <th>Alamat</th>
			                    <th>Kelas</th>				    
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
$alm=mysql_query("SELECT * FROM pendaftaran WHERE kelas='Alumni' ");
while ($a=mysql_fetch_array($alm)){
                
$no2++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no2</td>
                                            <td>
					    
						<img alt='galeri'  src='../foto/pendaftar/$a[gambar]' width=60 height=70 /></td>
							
                                           <td>$a[nama]</td>
                                            <td>$a[nisn]</td>
					     <td>$a[tmpt_l]</td>
					      <td>$a[alamat]</td>
					    	<td>$a[kelas]</td>			       
						
					     <td>
						<a href='cetak_daftar.php?id=$a[no_daftar]' title='Lihat' target='_blank' >Cetak</a>&nbsp;
						<a href='master/pendaftaran.php?id=$a[no_daftar]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $a[nama] ?')\" 
						title='Hapus' class='icon-trash'>
							<a href='index.php?aksi=editsiswabaru&nisn=$a[nisn]' title='edit'  class='icon-edit'></a>&nbsp;</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
 </div>
 </div>
</div>
			    





 </div>
</div>
</div>
</div>
</div>
</div>
</div>";
	  /// bagian input artikel form
	  echo"
	  <div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Siswa</h4>
                                        </div>
                                        <div class='modal-body'>
                                           
					   <form id='form1' enctype='multipart/form-data' method='post' action='../proses_daftaradm.php'>
			<div class='form-group'>
			 <table >
      <tr>
        <td colspan='2' valign='top'><div align='center'>
         $r3[nama]<br />

$r3[alamat]
          =======================================================<br/></br>
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
 

     
       echo" <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>A. Identitas Siswa </div></td>
      </tr>
      
           <tr>
        <td width='249' valign='middle'><strong>Nomor </strong></td>
        <td width='453' valign='top'><label>
	     <input type='text' value='MA-$i-$kode_jadi' size='11' maxlength='11'readonly style='border:1px solid #999999;background:#ebebeb;'/>
		 <input name='no_daftar' type='hidden' value='MA-$i-$kode_jadi'>
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
        <td valign='top'><input name='tgl_l'  type='text' size='10' id='datepicker'/></td>
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
        <td valign='middle'><strong>Tahun Ijasah</strong></td>
        <td valign='top'><label>
          <select name='th_ijasah' id='Validjk'>
		  <option value='0' selected='selected'>--Pilih Tahun--</option>
            <option value='2000'>2000</option>
            <option value='2001'>2001</option>
			<option value='2002'>2002</option>
			<option value='2003'>2003</option>
			<option value='2004'>2004</option>
			<option value='2005'>2005</option>
			<option value='2006'>2006</option>
			<option value='2007'>2007</option>
			<option value='2008'>2008</option>
				<option value='2009'>2009</option>
			<option value='2010'>2010</option>
			<option value='2012'>2012</option>
			<option value='2013'>2013</option>
			<option value='2014'>2014</option>
				<option value='2015'>2015</option>
			<option value='2016'>2016</option>
			<option value='2017'>2017</option>
                   </select>
        </label></td>
      </tr>
	  
    <tr>
        <td valign='middle'><strong>Tahun Ijasah</strong></td>
        <td valign='top'><input name='th_ijasah' type='text' size='5' /></td>
      </tr>
      

             
      <tr>
      <td valign='middle'><strong>Fhoto Pendaftar</strong></td>
      <td valign='top'><input type='file' name='fupload'>
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
        <td valign='top'><img src='../captcha.php'></td>
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
    </form>
    </div></div></div></div></div>	
		   
		       
";}

elseif($aksi=='editsiswabaru'){
$tebaru=mysql_query(" SELECT * FROM pendaftaran WHERE nisn=$_GET[nisn] ");
$t=mysql_fetch_array($tebaru);
		
echo"<div class='col-lg-12'>
                        
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Edit Data Siswa</h4>
                                        </div>
                                        <div class='modal-body'>
                                           
					   <form id='form1' enctype='multipart/form-data' method='post' action='master/pendaftaran.php?act=editwae&nisn=$t[nisn]&gb=$t[gambar]'>
			<div class='form-group'>
			 <table >
      <tr>
        <td colspan='2' valign='top'><div align='center'>
         $r3[nama]<br />

$r3[alamat]
          =======================================================<br/></br>
        </div></td>
      </tr>
	  <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>A. Identitas Siswa </div></td>
      </tr>
      
           
      <tr>
        <td width='249' valign='middle'><strong>NISN</strong></td>
        <td width='453' valign='top'>
	
	<label>
          <input name='nisn' type='text' value='$t[nisn]' size='10' id='ValidNisn' maxlength='10' />
        </label>
	</td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Nama Lengkap </strong></td>
        <td valign='top'><input name='nama' value='$t[nama]' type='text' size='40' id='Namalengkap'/></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Tempat Lahir</strong></td>
        <td valign='top'><input name='tmpt_l' value='$t[tmpt_l]' type='text' size='40' id='Validtempat' required/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Tanggal Lahir</strong></td>
        <td valign='top'><input name='tgl_l'  value='$t[tgl_l]' type='text' size='10' id='datepicker'/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Jenis Kelamin</strong></td>
        <td valign='top'><label>
          <select name='jk' id='Validjk'>
		  <option value='$t[jk]'  selected='selected'>$t[jk]</option>
            <option value='laki-laki'>Laki-Laki</option>
            <option value='perempuan'>perempuan</option>
                   </select>
        </label></td>
      </tr>
      <tr>
        <td valign='middle'><strong>Agama</strong></td>
        <td valign='top'>
	
	<select name='agama' id='Validagama'>
            <option value='$t[agama]' >$t[agama]</option>
            <option value='ISLAM'>ISLAM</option>
            <option value='PROTESTAN'>PROTESTAN</option>
            <option value='KATOLIK'>KATOLIK</option>
            <option value='HINDU'>HINDU</option>
            <option value='BUDHA'>BUDHA</option>
          </select>
	</td>
      </tr>
            
                  <tr>
        <td valign='middle'><strong>Kelas</strong></td>
        <td valign='top'>
	
	<select name='kelas' id='Validagama'>
            <option value='$t[kelas]'>$t[kelas]</option>
            <option value='VII'>VII</option>
            <option value='VIII'>VIII</option>
			<option value='IX'>IX</option>
          </select>
	</td>
      </tr>
       <tr>
        <td valign='top'><strong> </strong></td>
        <td valign='top'><label>
          RT <input name='rt' value='$t[rt]' type='text' size='2' id='ValidNumber'  /> / RW <input name='rw' value='$t[rw]' type='text' size='2' id='ValidNumber'  />
        </label></td>
      </tr>
      
    
      
      <tr>
        <td valign='middle'><strong>Desa / Kelurahan</strong></td>
        <td valign='top'><input name='desa' value='$t[desa]' type='text' size='40' id='ValidField' /></td>
      </tr>
      
       <tr>
        <td valign='middle'><strong>Kecamatan</strong></td>
        <td valign='top'><input name='kec' value='$t[kec]' type='text' size='30' id='ValidField'/></td>
      </tr>
      
      <tr>
        <td valign='middle'><strong>Kabupaten</strong></td>
        <td valign='top'><input name='kab' value='$t[kab]' type='text' size='30' id='ValidField'/></td>
      </tr>
      
            <tr>
        <td valign='middle'><strong>Kode Pos</strong></td>
        <td valign='top'><input name='kodepos' value='$t[kodepos]' type='text' size='10' maxlength='5' id='Validkodepos'/></td>
      </tr>
      
         <tr>
        <td valign='middle'><strong>Telephone</strong></td>
        <td valign='top'><input name='tlp' value='$t[tlp]' type='text' size='30' maxlength='12'/></td>
      </tr>
      
 <tr>
        <td valign='middle'><strong>Tahun Ijasah</strong></td>
        <td valign='top'><label>
          <select name='th_ijasah' id='Validjk'>
		  <option value='$t[th_ijasah]' selected='selected'>$t[th_ijasah]</option>
            <option value='2000'>2000</option>
            <option value='2001'>2001</option>
			<option value='2002'>2002</option>
			<option value='2003'>2003</option>
			<option value='2004'>2004</option>
			<option value='2005'>2005</option>
			<option value='2006'>2006</option>
			<option value='2007'>2007</option>
			<option value='2008'>2008</option>
				<option value='2009'>2009</option>
			<option value='2010'>2010</option>
			<option value='2012'>2012</option>
			<option value='2013'>2013</option>
			<option value='2014'>2014</option>
				<option value='2015'>2015</option>
			<option value='2016'>2016</option>
			<option value='2017'>2017</option>
                   </select>
        </label></td>
      </tr>
	  


             
      <tr>
      <td valign='middle'><strong>Fhoto Pendaftar</strong></td>
      <td valign='top'><input type='file' name='fupload'>
	  ";
							if($t[gambar]!=''){
							echo"<br /><img alt='galeri'  src='../foto/pendaftar/$t[gambar]' width=170 height=180 class='box-shadow2'/>";
							}else{echo"<br /><img alt='galeri'  src='mos-css/img/nopic2.jpg' width=170 height=180 class='box-shadow2'/>";}
							echo"
       </tr>
    <tr>
      <td colspan='2' valign='middle' ><div style='font-weigth:bold; font-size:15px; border-bottom: 1px solid #000000; margin-bottom:5px;'>B. 
      Identitas Orang Tua / wali Peserta Didik </div></td>
      
    </tr> 

  <tr>
        <td valign='middle'><strong>Nama Ayah</strong></td>
        <td valign='top'><input name='ayah' value='$t[ayah]' type='text' size='40' id='Ayah' /></td>
      </tr>

  <tr>
        <td valign='middle'><strong>Pekerjaan Ayah</strong></td>
        <td valign='top'><input name='payah' value='$t[payah]' type='text' size='40' id='payah' /></td>
  </tr>


   <tr>
        <td valign='middle'><strong>Nama Ibu</strong></td>
        <td valign='top'><input name='ibu' value='$t[ibu]' type='text' size='40' id='ibu' /></td>
      </tr>

  <tr>
        <td valign='middle'><strong>Pekerjaan Ibu</strong></td>
        <td valign='top'><input name='pibu' value='$t[pibu]' type='text' size='40' id='pibu' /></td>
  </tr>
      
      <tr>
        <td valign='top'><strong>Alamat Orang Tua wali</strong></td>
        <td valign='top'><label>
          <textarea name='alamat' cols='32' rows='6' id='ValidField' >$t[alamat]</textarea>
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

                                </div></div></div></div>
                  
";
}

elseif($aksi=='importesiswabaru'){
		
		echo"<div class='panel panel-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Form Import Exel</h3>
			   <div class='box-header'>
				<a href='siswa_contoh.xls' class='btn btn-info'>Download Template</a>
				</div>
            </div>
            <div class='box-body'>
			<form name='myForm' id='myForm' onSubmit='return validateForm()' action='index.php?aksi=importesiswabaru&act=importexel' method='post' enctype='multipart/form-data'>
     <div class='col-md-12'><div class='form-group'> <input class='form-control' type='file' id='filependaftaranall' name='filependaftaranall' /></div></div>
   <br/>
     <input class='btn btn-default' type='submit' name='submit' value='Import' />
		<input type='button' class='btn btn-default' value='Batal' onclick='self.history.back()'>
</form></br>";
if (isset($_POST['submit'])) {
	echo"
<div id='progress' style='width:500px;border:1px solid #ccc;'></div>
<div id='info'></div>";
}
require "excel_reader.php";
//jika tombol import ditekan
if(isset($_POST['submit'])){
    $target = basename($_FILES['filependaftaranall']['name']) ;
    move_uploaded_file($_FILES['filependaftaranall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filependaftaranall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    if($_POST['drop']==1){
//             kosongkan tabel pendaftaran
             $truncate ="TRUNCATE TABLE pendaftaran";
             mysql_query($truncate);
    };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//        menghitung jumlah real data. Karena kita mulai pada baris ke-2, maka jumlah baris yang sebenarnya adalah 
//        jumlah baris data dikurangi 1. Demikian juga untuk awal dari pengulangan yaitu i juga dikurangi 1
        $barisreal = $baris-1;
        $k = $i-1;
        
// menghitung persentase progress
        $percent = intval($k/$barisreal * 100)."%";

// mengupdate progress
        echo '<script language="javascript">
        document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.'; background-color:lightblue\">&nbsp;</div>";
        document.getElementById("info").innerHTML="'.$k.' data berhasil diinsert ('.$percent.' selesai).";
        </script>';

//       membaca data (kolom ke-1 sd terakhir)
   
      $no_daftar          = $data->val($i, 1);
	  $nisn          = $data->val($i, 2);
      $pass = $data->val($i, 3);
      $nama = $data->val($i, 4);
	  $tmpt_l = $data->val($i, 5);
	  $tgl_l = $data->val($i, 6);
	  $jk = $data->val($i, 7);
	  $tlp = $data->val($i, 8);
	  $kelas = $data->val($i, 9);
	 

//      setelah data dibaca, masukkan ke tabel pendaftaran sql
	 $pass=md5($pass);
      $query = "INSERT into pendaftaran (no_daftar,nisn,pass,nama,tmpt_l,tgl_l,jk,tlp,kelas)
	  values('$no_daftar','$nisn','$pass','$nama','$tmpt_l','$tgl_l','$jk','$tlp','$kelas')";
      $hasil = mysql_query($query);
      
      flush();

//      kita tambahkan sleep agar ada penundaan, sehingga progress terbaca bila file yg diimport sedikit
//      pada prakteknya sleep dihapus aja karena bikin lama hehe
      

    }
        
//    hapus file xls yang udah dibaca
    unlink($_FILES['filependaftaranall']['name']);
	
}
	echo"  </div>
	 </div>

	 </div></div>
                  
";
}

elseif($aksi=='pendaftaran'){
echo"

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI DATA PENDAFTAR
                        </div>
                        <div class='panel-body'>
			<a href='master/export_psb.php' class='btn btn-info'>
                                Export Data Pendaftar
				</a>
                            
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Fhoto</th>
                                            <th>Nama</th>
					    <th>NISN</th>
					    <th>TTlhr</th>
                                            <th>Alamat</th>
					    <th>Sekolah Asal</th>
					    
					    <th>Proses</th>
                                        </tr>
										    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
$peg=mysql_query("SELECT * FROM pendaftaran WHERE kelas='new' ORDER BY nisn ASC ");
while ($t=mysql_fetch_array($peg)){
                
$no++;     
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>
					    
							<img alt='galeri'  src='../foto/pendaftar/$t[gambar]' width=60 height=70 class='box-shadow2'/></td>
							
                                           <td>$t[nama]</td>
                                            <td>$t[nisn]</td>
					     <td>$t[tmpt_l]</td>
					      <td>$t[alamat]</td>
					       <td>$t[sekolah_asl]</td>
					       
						<td>

                        
                        <form method='post' action=master/naik_kelas.php?act=VII&no_daftar=$t[no_daftar]>
                        <select name='kelas' required>
                        <option value='0'>Siswa Baru</option>
                        <option value='VII'>Diterima</option>
                        
                        </select><input type='submit' value='proses'>
                        </form>
                        </td>
					     <td>
						 
					        <a href='cetak_daftar.php?id=$t[no_daftar]' title='Lihat' target='_blank'  class='icon-eye-open '></a>&nbsp;
						<a href='master/pendaftaran.php?id=$t[no]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus' class='icon-trash'>
				
				              </td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>";



}


######kelulusan Siswa####

elseif($aksi=='kelulusan'){
echo"

			<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>Informasi Kelulusan Siswa
                        </div>
                        <div class='panel-body'>";
			$sql=mysql_query("SELECT * FROM tbl_nilai");
			$r=mysql_num_rows($sql);
			if($r > 0)
			{			
			echo"<a href='master/export_ujian.php' class='btn btn-info'>
                                Export Data Ujian Online
				</a>";
			}
                            
                        echo"<div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>												
                                               <tr>
                                               <td rowspan='2' valign='middle'><div align='center'>No</div></td>
			                       <td rowspan='2' valign='middle'><div align='center'>Fhoto</div></td>
					       <td rowspan='2' valign='middle'><div align='center'>NISN</div></td>
					       <td rowspan='2' valign='middle'><div align='center'>Nama Lengkap</div></td>
					       <td rowspan='2' valign='middle'><div align='center'>Waktu Ujian</div></td>
					       
					       <td colspan='4' valign='middle'><div align='center'>Informasi Hasil Ujian </div></td>
						<td rowspan='2' colspan='2' valign='middle'><div align='center'>Aksi</div></td>
						</tr>
						
						<tr>
						<td><div align='center'>Benar</div></td>
						 <td><div align='center'>Salah</div></td>
						 <td><div align='center'>Kosong</div></td>
						 <td><div align='center'>Score</div></td>
						 </tr>
						
                                    </thead>
				    ";
$peg=mysql_query("SELECT * FROM pendaftaran,tbl_nilai WHERE pendaftaran.nisn=tbl_nilai.nisn");
while ($t=mysql_fetch_array($peg)){
                
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td><img alt='galeri'  src='../foto/pendaftar/$t[gambar]' width=60 height=70 class='box-shadow2'/></td>
					   <td>$t[nisn]</td>
                                            <td>$t[nama]</td>
					     <td>$t[tanggal]</td>
					     
					      <td>$t[benar]</td>
					       <td>$t[salah]</td>
                                            <td>$t[kosong]</td>
					     <td>$t[score]</td>
					      
					       <td>";
					      if($t[tampil]=='N'){
				echo"<a href='master/kelulusan.php?act=status&id_bk=$t[id_nilai]' title='publikasikan'> 
				<img src='assets/img/del.png'></a> &nbsp | &nbsp";
				}else{echo"<a href='master/kelulusan.php?act=status&id_bk=$t[id_nilai]&beku=beku' title='jangan publikasikan'> 
				<img src='assets/img/oke.png'></a> &nbsp | &nbsp";
				}
				echo"<a href='master/kelulusan.php?id_bk=$t[id_nilai]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus Data'><img src='assets/img/del.png'>
						</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>		
	 </div>
	  </div>";



}



elseif($aksi=='soal'){
$aksi="master/mod_soal/aksi_soal.php";
switch($_GET[act]){
  // Tampil Soal
  default:
  
	// Tombol Tambah Soal
	echo"
	
	<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>Informasi Soal
                        </div>
                        <div class='panel-body'>
			<a href='?aksi=soal&act=tambahsoal' class='btn btn-info'>
                               Tambah Soal
			</a>
                   
			    
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
          <tr><th>No</th><th>Pertanyaan</th><th>Status</th><th>Aksi</th><th>Status</th></tr>"; 
    $tampil=mysql_query("SELECT * FROM tbl_soal ORDER BY id_soal DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
	  $soal=substr($r[soal],0,78);
       echo "<tr><td>$no</td>
             <td>$soal..</td>
	  
			 <td align='center'>$r[aktif]</td>
                         <td>
			  <a href=?aksi=soal&act=editsoal&id=$r[id_soal]><img src='assets/img/edit.png' title='Edit Data'></a> | 
			  <a href=master/aksi_soal.php?&act=hapus&aksi=soal&id=$r[id_soal]><img src='assets/img/del.png' title='Hapus Data'></a></td>";
			 if ($r[aktif]=="Y") {
					echo"<td><input type=button value='Non Aktifkan' onclick=\"window.location.href='master/aksi_soal.php?aksi=soal&act=nonaktif&id=$r[id_soal]';\"></td>";

				}else {
					echo"<td align='center'><input type=button value='Aktifkan' onclick=\"window.location.href='master/aksi_soal.php?aksi=soal&act=aktif&id=$r[id_soal]';\"></td>";
				}
			  
        echo"   </td>
		</tr>";
      $no++;
    }
    echo "</table> </div></div></div></div></div></div></div>";
    break;
  
  // Form Tambah Soal
  case "tambahsoal":
    echo "
    
    <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>Informasi Kelulusan Siswa
                        </div>
                        <div class='panel-body'>
			<h3>Tambah Soal</h3>
			
			
			
          <form method=POST action='master/aksi_soal.php?&act=input&aksi=soal' enctype='multipart/form-data'>
         
	   <textarea id='text-ckeditor' class='form-control' name='soal'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script></td></tr>
          <tr><td>Gambar</td>      <td> : <input type=file name='fupload' size=40 > 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px </br></td></tr>
          <tr><td>Jawaban A</td><td> : <input type=text name='a' size=80 required class='form-control'/></td></tr>
          <tr><td>Jawaban B</td><td> : <input type=text name='b' size=80 required class='form-control'/></td></tr>
          <tr><td>Jawaban C</td><td> : <input type=text name='c' size=80 required class='form-control'/></td></tr>
          <tr><td>Jawaban D</td><td> : <input type=text name='d' size=80 required class='form-control'/></td></tr>
		  <tr><td>Kunci Jawaban</td><td> : <select name='knc_jawaban' class='form-control'>
		  									<option value='a'>A</option>
											<option value='b'>B</option>
											<option value='c'>C</option>
											<option value='d'>D</option>
											</select></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn btn-primary'>
                            <input type=button value=Batal onclick=self.history.back() class='btn btn-default'></td></tr>
          </form></div></div></div></div></div></div>";
     break;
  
  // Form Edit Soal  
  case "editsoal":
    $edit=mysql_query("SELECT * FROM tbl_soal WHERE id_soal='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h2>Edit Soal</h2>
          <form method=POST action=master/aksi_soal.php?&act=update&aksi=soal enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id_soal]'>
          <table>
		  <tr><td>Pertanyaan</td><td> :  <textarea id='text-ckeditor' class='form-control' name='soal'>$r[soal]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script></td></tr>
          <tr><td>Gambar</td>       <td> :  ";
          if ($r[gambar]!=''){
              echo "<img src='../foto/soal/$r[gambar]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gambar</td>    <td> :<input type=file name='fupload' size=40> </td></tr>
          <tr><td>Jawaban A</td><td> : <input type=text name='a' value='$r[a]' size=80 required/></td></tr>
          <tr><td>Jawaban B</td><td> : <input type=text name='b' value='$r[b]' size=80 required/></td></tr>
          <tr><td>Jawaban C</td><td> : <input type=text name='c' value='$r[c]' size=80 required/></td></tr>
          <tr><td>Jawaban D</td><td> : <input type=text name='d' value='$r[d]' size=80 required/></td></tr>
		  <tr><td>Kunci Jawaban</td><td> : <select name='knc_jawaban'>
		  									<option value='a'>A</option>
											<option value='b'>B</option>
											<option value='c'>C</option>
											<option value='d'>D</option>
											</select></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
	
	case "viewsoal":
		$view=mysql_query("SELECT * FROM tbl_soal WHERE id_soal='$_GET[id]'");
		$t=mysql_fetch_array($view);
		echo "<h2>Soal :</h2>
		$t[soal]</br>";
          if ($t[gambar]!=''){
              echo "<img src='../foto/soal/$t[gambar]'>";  
          }
		echo"<h2>Jawaban :</h2>
		a. $t[a] </br>
		b. $t[b] </br>
		c. $t[c] </br>
		d. $t[d] </br>";
	break;
	
	case "carisoal":
	     echo"<h2>Berikut adalah  Hasil Pencarian Yang ditemukan</h2>
		 <table>
          <tr><th>no</th><th>Pertanyaan</th><th>Status</th><th>aksi</th><th>Status</th><th>View</th></tr>"; 
    $tampil=mysql_query("SELECT * FROM tbl_soal WHERE soal LIKE '%$_POST[cari]%'");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[soal]</td>
			 <td align='center'>$r[aktif]</td>
             <td>
			  <a href=?module=soal&act=editsoal&id=$r[id_soal]>Edit</a>|
			  <a href=$aksi?module=soal&act=hapus&id=$r[id_soal]><img src='images/2.png' title='Hapus Data'></a></td>";
				if ($r[aktif]=="Y") {
					echo"<td><input type=button value='Non Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=nonaktif&id=$r[id_soal]';\"></td>";

				}else {
					echo"<td align='center'><input type=button value='Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=aktif&id=$r[id_soal]';\"></td>";
				}
			  
        echo"   </td>
		<td><a href=?module=soal&act=viewsoal&id=$r[id_soal]><img src='images/3.gif' title='View'></a></a></td>

		</tr>";
      $no++;
    }
    echo "</table>";
    break;

	
	}		
			
			
}



#####end Kelulusan siswa####







elseif($aksi=='download'){



			
			
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI DOWNLOAD
                        </div>
                        <div class='panel-body'>
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button>
                            <div class='table-responsive'>
 <table class='table table-striped table-bordered table-hover'>
					<thead>
						<tr>
						    <th width=4% >No</th>
							<th width=25% >Nama</th>
							<th width=15% >Kategori</th>
							<th width=10%>Di Unduh</th>
							<th width=10%>File</th>
							<th width=25% >Video</th>
							<th width=8%>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM download,kat_download WHERE download.kategori=kat_download.no ORDER BY id_d DESC ");
while ($t=mysql_fetch_array($tebaru)){
$no++;

					   echo"<tr class='gradeA' >
					        <td align=center >$no</td>
							<td>$t[nama]</td>
							<td  >$t[kategori]</td>
							<td align=center >$t[downloading]</td>
							<td align=center >$t[file]</td>
							<td align=center ><section style='text-align:center'>
		<video width='120' controls='controls' autoplay='true'>
<source src='video/$t[video]' type='video/mp4'>

</video>	
	</td>
							<td>
					
				<a href='index.php?aksi=editdw&id_d=$t[id_d]' title='Edit' class='icon-edit'></a>&nbsp;
				<a href='master/ipdw.php?id_d=$t[id_d]&act=hapus&gbr=$t[file]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus' class='icon-trash'>
				
					    </td></tr>";
					 	}						
						echo"</tbody>
				</table></div></div></div></div></div></div>";
				
echo"
<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Download MAteri</h4>
                                        </div>
                                        <div class='modal-body'>
					
				<form id='form1' enctype='multipart/form-data' method='post' action='master/ipdw.php?act=inputdw'>
       
       <div class='form-grup'>
        <label>Kategori</label>
		    <select class='form-control' name='kat'>
        	<option value=0 selected>----- Pilih Kategori -----</option>";
            $tampil=mysql_query("SELECT * FROM kat_download ORDER BY no");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[no]>$r[kategori]</option>";
            }
              
        echo "</select><br>
	<label>Kelas</label>
        <select name='kelas'class='form-control'>
	<option value='0'>--Pilih Kelas--</option>
	<option value='X'>X</option>
	<option value='XI'>XI</option>
	<option value='XII'>XII</option>
	</select>
	<br>
    	<label>Judul</label>
        <input type='text' class='form-control'  name='jd'/><br>
    	<label>File</label>
		<input type='file' size='50'name='gambar'/>
        <label>Video Tutorial</label>
		<input name='MAX_FILE_SIZE' value='50000000' type='hidden'/>
<input type='file' name='video' class='form-control'/>
		<label>Link Alternatif</label>
        <input type='text' class='form-control' name='lk'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>
				
		</div> </div></div> </div></div> </div>		
";
}


elseif($aksi=='editdw'){
$tebaru=mysql_query(" SELECT * FROM download WHERE id_d=$_GET[id_d]");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
			 <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI EDIT MATERI
                        </div>
                        <div class='panel-body'>

<form id='form1' enctype='multipart/form-data' method='post' action='master/ipdw.php?act=editdw&id_d=$_GET[id_d]'>
       <div class='form-grup'>
       
        <label>Kategori</label>
		    
        	 <selectclass='form-control' name='kat'>";

             $tampil=mysql_query("SELECT * FROM kat_download ORDER BY no DESC");
          if ($t[kategori]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($t[kategori]==$w[no]){
              echo "<option value=$w[no] selected>$w[kategori]</option>";
            }
            else{
              echo "<option value=$w[no]>$w[kategori]</option>";
            }
          }

    echo "</selectclass=><br>
    	<label>Nama</label>
        <input type='text' class='form-control' value='$t[nama]' name='jd'/><br>
    	<label>File</label>
		<input type='file' size='50'name='gambar'/>
		$t[file]
		    	<label>Video</label>
		<input type='file' class='form-control' size='50'name='video'/>
		$t[video]
		<label>Link Alternatif</label>
        <input type='text' class='form-control' value='$t[link]' name='lk'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'>$t[keterangan]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div>
	    </div>
    </form></div></div></div></div></div></div>
";
}

elseif($aksi=='kat_d'){
			
echo"
<div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
			Data Kategori Download
                        </div>
                        <div class='panel-body'>
                            <ul class='nav nav-pills'>
                                <li class='active'><a href='#home-pills' data-toggle='tab'>Data Kategori</a>
                                </li>
                                <li><a href='#profile-pills' data-toggle='tab'>Input Kategori</a>
                                </li>
                               
                            </ul>

                            <div class='tab-content'>
                                <div class='tab-pane fade in active' id='home-pills'>
                                    <h4>Data Kategori Download</h4>
                                   
				   <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            
					    <th>Pilihan</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM kat_download ORDER BY no DESC ");
while ($t=mysql_fetch_array($tebaru)){
              
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[kategori]</td>
                                            <td><img src='../foto/admin/$t[gb]' width='60'></td>
                                          
					     <td>
					     <a href='master/dw.php?id_d=$d[no]&act=hapus&gb=$d[gb]'  onclick=\"return confirm ('Apakah yakin ingin menghapus $d[kategori] ?')\" title='Hapus' class='icon-trash '>&nbsp; &nbsp;
					     <a href='index.php?aksi=kat_d&id_d=$d[no]&kat=edit' class='icon-edit' title='Edit'>
			</td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
				 </div>
				 
				 
                                <div class='tab-pane fade' id='profile-pills'>
                                    <h4>Input Kategori Download</h4>
                                   
<form id='form1' method='post' enctype='multipart/form-data' action='master/dw.php?act=inputkategori'>
      <div class='col-lg-7'>
            <input name='kat' type='text' size='20' class='form-control' placeholder='nama kategori'>
         </div>
	  
	         
            <input name='gb' type='file' size='50' class='btn btn-default'>
       

          
            <input type='submit' name='Submit' value='Simpan kategori' class='btn btn-primary'>
    
    </form>  
				   
				   
				   
				           
				
				
				
				</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

";}

elseif($aksi=='buku_tamu'){
echo"<div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
			Buku Tamu
                        </div>
                        
    </div>";
if($_GET[lihat]=='v'){

	$agenda2=mysql_query(" SELECT * FROM bukutamu WHERE id_bukutm='$_GET[id_bk]'");
	$d2=mysql_fetch_array($agenda2); 
	$komen=wordwrap($d2['isi_buku'], 100, "<br />\n", 1);

if($d2[status]=='N'){
				echo"<a href='master/buku_tamu.php?act=status&id_bk=$d2[id_bukutm]' title='publikasikan' class='ok' > 
				Publikasikan</a>";
				}else{echo"<a href='master/buku_tamu.php?act=status&id_bk=$d2[id_bukutm]&beku=beku' title='jangan publikasikan' class='ok'>jangan Publikasikan</a><br />";
				}

echo"
<div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
  <tr>
    <td width='107' valign='top'><strong>Nama</strong></td>
    <td width='12' valign='top'><strong>:</strong></td>
    <td width='502' valign='top'><strong>$d2[nama]</strong></td>
  </tr>
  <tr>
    <td valign='top'><strong>Waktu</strong></td>
    <td valign='top'><strong>:</strong></td>
    <td valign='top'>$d2[tanggal] &nbsp;&nbsp; $d2[jam]</td>
  </tr>
  <tr>
    <td valign='top'><strong>Email</strong></td>
    <td valign='top'><strong>:</strong></td>
    <td valign='top'>$d2[email]</td>
  </tr>
  <tr>
    <td valign='top'><strong>Http</strong></td>
    <td valign='top'><strong>:</strong></td>
    <td valign='top'>$d2[http]</td>
  </tr>
  <tr>
    <td valign='top'><strong>Isi Buku </strong></td>
    <td valign='top'><strong>:</strong></td>
    <td valign='top'>$komen</td>
  </tr>
  <tr>
    <td valign='top'><strong>Jawab </strong></td>
    <td valign='top'><strong>:</strong></td>
    <td valign='top'>
	
<form id='edit'  method='post' action='master/buku_tamu.php?act=balas&id_bk=$d2[id_bukutm]' enctype='multipart/form-data'>
	        <textarea id='text-ckeditor' class='form-control' name='jw'>$d2[jawab]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
	            <input type='submit' name='Submit' value='Simpan' class='ok'>
            <input type='reset' name='Submit2' value='Reset' class='ok'>
    </form>
	</td>
  </tr>


</table><br /></div></div>
";
  }	
echo"<div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
					<thead>
						<tr>
						    <th>No</th>
							 <th>Nama</th>
							 <th>Isi</th>
							 <th>Tanggal</th>
							 <th>Status</th>
							 <th>Pilihan</th>
					    </tr>
					</thead>
					<tbody>";
$tebaru=mysql_query(" SELECT * FROM bukutamu ORDER BY id_bukutm DESC");
while ($t=mysql_fetch_array($tebaru)){		
                $isi=substr($t['isi_buku'], 0, 50); 
                $isi_berita = strip_tags($isi); 
$no++;

					   echo"<tr>
					        <td>$no</td>
							<td>$t[nama]</td>
							<td  >$isi_berita</td>
							<td align=center >$t[tanggal]</td>
							<td align=center >";
				if($t[status]=='N'){
				echo"<a href='master/buku_tamu.php?act=status&id_bk=$t[id_bukutm]' title='publikasikan'> 
				<img src='assets/img/del.png'></a>";
				}else{echo"<a href='master/buku_tamu.php?act=status&id_bk=$t[id_bukutm]&beku=beku' title='jangan publikasikan'> 
				<img src='assets/img/oke.png'></a>";
				}
				echo"
							
							</td>
							<td>
					<center>
				<a href='index.php?aksi=buku_tamu&lihat=v&id_bk=$t[id_bukutm]' title='Lihat'><img src='assets/img/detail.png'></a>&nbsp;
				<a href='master/buku_tamu.php?id_bk=$t[id_bukutm]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama] ?')\" title='Hapus'><img src='assets/img/del.png'>
				</center>
					    </td></tr>";
					 	}						
						echo"</tbody>
				</table></div></div></div></div></div>"; 
}








?>