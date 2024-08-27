<?php
$pageTitle = 'Variabel';
include 'layout/header.php'
?>

<?php

$nama_barang = "Kopi C++";
$harga = 4000;
$stok = 40;

echo "<p>$nama_barang dengan stok $stok dan harga Rp " . number_format($harga, 0, ',', '.');
"</p>"
?>

<?php

// tipe data char (karakter)
$jenis_kelamin = 'L';

// tipe data string (teks)
$nama_lengkap = "Rahmat Rafli";

// tipe data integer
$umur = 26;

// tipe data float
$berat = 101.3;

// tipe data float
$tinggi = 175.3;

// tipe data boolean
$menikah = false;

echo "<br><br>Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur tahun<br>";
echo "berat badan: $berat kg<br>";
echo "tinggi badan: $tinggi cm<br>";
echo "menikah: $menikah";
?>

<?php include 'layout/footer.php' ?>