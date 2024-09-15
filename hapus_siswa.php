<?php
include("koneksi.php");

// Ambil id dari URL
$id = $_GET['nis'];

// Siapkan dan eksekusi query untuk menghapus data
$hapus = $koneksi->prepare("DELETE FROM tbsiswa WHERE nis = ?");
$hapus->bind_param("i", $id);
$success = $hapus->execute();

// Cek apakah penghapusan berhasil
if ($success) {
    // Arahkan kembali ke halaman siswa
    header("Location: siswa.php");
    exit;
} else {
    // Tampilkan pesan error jika gagal
    echo "Gagal menghapus data: " . $hapus->error;
}

// Tutup statement dan koneksi
$hapus->close();
$koneksi->close();
?>

