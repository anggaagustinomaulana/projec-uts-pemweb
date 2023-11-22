<?php
require 'koneksi.php';

$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO login (id, username, email, password) 
            VALUES ('$id', '$username', '$email', '$password')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: index.html");
}
 else {
    echo "Pendafaran Gagal : " . mysqli_error($koneksi);
}
?>