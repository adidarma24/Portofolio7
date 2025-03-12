<?php
// Deklarasi variabel dan mengambil data dari form
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$harga = isset($_POST['harga']) ? (int)$_POST['harga'] : 0;
$deskripsi = isset($_POST['deskripsi']) ? trim($_POST['deskripsi']) : '';

// Validasi input tidak boleh kosong
if (empty($nama) || empty($harga) || empty($deskripsi)) {
    echo "<h2>Error</h2>";
    echo "<p>Semua kolom harus diisi!</p>";
    exit;
}

// Menampilkan hasil
echo "<h2>Hasil Form</h2>";
echo "<p>Nama Produk: $nama</p>";
echo "<p>Harga: Rp $harga</p>";
echo "<p>Deskripsi: $deskripsi</p>";

// Disini Anda dapat menambahkan kode untuk menyimpan data ke database
?>
