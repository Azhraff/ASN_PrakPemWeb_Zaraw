<?php include 'koneksi.php'; // koneksi ke database ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Data Pelanggan</h2>
<a href="tambah.php">Tambah Data</a><br><br>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM `pelanggan`");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row['id_pelanggan']."</td>
            <td>".$row['nama_pelanggan']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['notelp_pelanggan']."</td>
            <td>
                <a href='edit.php?id=".$row['id_pelanggan']."'>Edit</a> |
                <a href='hapus.php?id=".$row['id_pelanggan']."' onclick=\"return confirm('Yakin hapus data pelanggan ini?');\">Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>

</body>
</html>
