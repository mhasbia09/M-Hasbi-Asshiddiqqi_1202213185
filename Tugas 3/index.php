<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP & MySQL</title>
</head>
<body>
    <h1>CRUD PHP & MySQL</h1>
    <h2>Create Data Mahasiswa</h2>
<form action="create_process.php" method="post">
    <table>
        <tr>
            <td><label for="nim">NIM:</label></td>
            <td><input type="text" id="nim" name="nim" required></td>
        </tr>
        <tr>
            <td><label for="nama">Nama:</label></td>
            <td><input type="text" id="nama" name="nama" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan:</label></td>
            <td><input type="text" id="jurusan" name="jurusan"></td>
        </tr>
        <tr>
            <td><label for="angkatan">Angkatan:</label></td>
            <td><input type="text" id="angkatan" name="angkatan"></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><textarea id="alamat" name="alamat"></textarea></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Simpan">
</form>

    <br><br>
    <h2>Read Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Alamat</th>
            <th>Aksi</th> 
        </tr>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM users";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["nim"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["jurusan"] . "</td>";
                echo "<td>" . $row["angkatan"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>";
                echo "<a href='update.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='delete_process.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data.";
        }
        ?>
    </table>
    <script>

</body>
</html>
