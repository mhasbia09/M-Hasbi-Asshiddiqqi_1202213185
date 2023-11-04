<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $NOMORINDUKMAHASISWA = $_POST["NOMORINDUKAMAHASISWA"];
    $NAMA = $_POST["NAMA"];
    $EMAIL = $_POST["EMAIL"];
    $MAJOR = $_POST["MAJOR"];
    $ANGKATAN = $_POST["ANGKATAN"];
    $ALAMAT = $_POST["alamat"];

    $query = "UPDATE users SET NOMORINDUKMAHASISWA='$NOMORINDUKMAHASISWA', NAMA='$NAMA', EMAIL='$EMAIL', MAJOR='$MAJOR', ANGKATAN=$ANGKATAN, ALAMAT='$ALAMAT' WHERE id=$id";

    if (mysqli_query($connection, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
} else {
    echo "Request note valid.";
}
?>
