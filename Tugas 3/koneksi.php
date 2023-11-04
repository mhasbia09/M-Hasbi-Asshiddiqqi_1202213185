<?php
$host = "localhost:3308";
$username = "root";
$password = "";
$database = "crud";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>