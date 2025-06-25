<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link ke CSS gemoy -->
</head>
<body>

<h2>Edit Data Pelanggan</h2>

<form method="POST" action="">
    Nama: <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']; ?>" required><br>
    Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>
    No. Telepon: <input type="text" name="notelp_pelanggan" value="<?php echo $row['notelp_pelanggan']; ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp_pelanggan'];

    $query = "UPDATE pelanggan SET 
              nama_pelanggan='$nama', 
              alamat='$alamat', 
              notelp_pelanggan='$notelp' 
              WHERE id_pelanggan='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<p style='color:green;'>✅ Data berhasil diupdate! <a href='index.php'>Kembali</a></p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . $query . "<br>" . mysqli_error($conn) . "</p>";
    }
}
?>

</body>
</html>
