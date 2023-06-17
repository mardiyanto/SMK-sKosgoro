<?php
//siswa
function Uploadsiswa($fupload_name){
  //direktori gambar
  $vdir_upload = "foto/pendaftar/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}



//siswa
function Uploadkk($fupload_name){
  //direktori gambar
  $vdir_upload = "foto/pendaftar/kk/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["kk"]["tmp_name"], $vfile_upload);
 
}


//siswa
function Uploadijasah($fupload_name){
   //direktori gambar
  $vdir_upload = "foto/pendaftar/ijasa/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["ijasah"]["tmp_name"], $vfile_upload);
}




//siswa
function Uploadakte($fupload_name){
   //direktori gambar
  $vdir_upload = "foto/pendaftar/akte/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["akte"]["tmp_name"], $vfile_upload);
}




//siswa
function Uploadskhu($fupload_name){
     //direktori gambar
  $vdir_upload = "foto/pendaftar/skhu/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["skhu"]["tmp_name"], $vfile_upload);
}

?>
