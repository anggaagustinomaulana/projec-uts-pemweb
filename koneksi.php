<?php

$host="localhost";
$user="root";
$pass="";
$database="db_uts";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi){
    $buka=mysqli_select_db ($koneksi, $database);
    echo "Database dapat terhubung";
    if (!$buka) {
        echo "Database tidak dapat terhubung";
    }
}else {
    echo "MySQL tidak Terhubung";

}
?>