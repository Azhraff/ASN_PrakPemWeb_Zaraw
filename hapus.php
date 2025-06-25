<?php include 'koneksi.php'; ?>

<?php
$id = $_GET['id']; // Ambil id_pelanggan dari URL
$query = "DELETE FROM pelanggan WHERE id_pelanggan='$id'"; // Hapus berdasarkan id_pelanggan

if (mysqli_query($conn, $query)) {
    header("Location: index.php"); // Redirect kembali ke halaman utama
    exit();
} else {
    echo "❌ Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
