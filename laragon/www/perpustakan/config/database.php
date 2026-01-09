<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "teknikal_gttc";

$conn = mysqli_connect($host, $user, $password, $db);
if(!$conn){
    die("Koneksi gagal:" . mysqli_connect_error());
} 