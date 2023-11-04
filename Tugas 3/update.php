<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
    ?>
    <form action="update_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <table>
        <tr>
            <td><label for="NOMORINDUKMAHASISWA">NOMORINDUKMAHASISWA:</label></td>
            <td><input type="text" id="NOMORINDUKMAHASISWA" name="NOMORINDUKMAHASISWA" value="<?php echo $row["NOMORINDUKMAHASISWA"]; ?>" required></td>
        </tr>
        <tr>
            <td><label for="NAMA">NAMA:</label></td>
            <td><input type="text" id="NAMA" name="NAMA" value="<?php echo $row["NAMA"]; ?>" required></td>
        </tr>
        <tr>
            <td><label for="EMAIL">EMAIL:</label></td>
            <td><input type="EMAIL" id="EMAIL" name="EMAIL" value="<?php echo $row["EMAIL"]; ?>" required></td>
        </tr>
        <tr>
            <td><label for="MAJOR">MAJOR:</label></td>
            <td><input type="text" id="MAJOR" name="MAJOR" value="<?php echo $row["MAJOR"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="ANGKATAN">ANGKATAN:</label></td>
            <td><input type="text" id="ANGKATAN" name="ANGKATAN" value="<?php echo $row["ANGKATAN"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="ALAMAT">ALAMAT:</label></td>
            <td><textarea id="ALAMAT" name="ALAMAT"><?php echo $row["ALAMAT"]; ?></textarea></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Save Changes">
</form>

    <?php
        } else {
            echo "Data is Missing";
        }
    } else {
        echo "Request not valid.";
    }
    ?>
</body>
</html>
