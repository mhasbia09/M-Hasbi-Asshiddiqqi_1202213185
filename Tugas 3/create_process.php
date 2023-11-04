<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO users (nim, nama, email, jurusan, angkatan, alamat) VALUES ('$nim', '$nama', '$email', '$jurusan', $angkatan, '$alamat')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
