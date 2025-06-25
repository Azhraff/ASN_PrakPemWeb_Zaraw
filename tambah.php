<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Form Tambah Data Pelanggan</h2>

<form method="POST" action="">
    Nama Pelanggan: <input type="text" name="nama_pelanggan" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    No. Telepon: <input type="text" name="notelp_pelanggan" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp_pelanggan'];

    $query = "INSERT INTO pelanggan (nama_pelanggan, alamat, notelp_pelanggan) 
              VALUES ('$nama', '$alamat', '$notelp')";
    
    if (mysqli_query($conn, $query)) {
        echo "<p style='color:blue;'>✅ Data berhasil ditambahkan!</p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . $query . "<br>" . mysqli_error($conn) . "</p>";
    }
}
?>

</body>
</html>

