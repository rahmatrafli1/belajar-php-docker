<?php
$pageTitle = 'Array';
include 'layout/header.php'
?>

<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

echo "<br><br>";
// menampilkan isi array
echo $barang[0] . "<br>";
echo $barang[1] . "<br>";
echo $barang[2] . "<br>";

echo "<br>";
// menampilkan isi array dengan perulangan for
for ($i = 0; $i < count($barang); $i++) {
    echo $barang[$i] . "<br>";
}

echo "<br>";
// menampilkan isi array dengan perulangan foreach
foreach ($barang as $isi) {
    echo $isi . "<br>";
}

echo "<br>";

// menampilkan isi array dengan perulangan while
$i = 0;
while ($i < count($barang)) {
    echo $barang[$i] . "<br>";
    $i++;
}

echo "<br>";

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// menghapus kucing
unset($hewan[1]);

// Reindex the array
$hewan = array_values($hewan);

// Safely output the elements
echo isset($hewan[0]) ? $hewan[0] . "<br>" : "Index 0 does not exist<br>";
echo isset($hewan[1]) ? $hewan[1] . "<br>" : "Index 1 does not exist<br>";
echo isset($hewan[2]) ? $hewan[2] . "<br>" : "Index 2 does not exist<br>";

echo "<hr>";

echo "<pre>";
print_r($hewan);
echo "</pre>";

?>

<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach ($hobi as $hobiku) {
    echo $hobiku . "<br>";
}
?>

<?php
// membuat array
$user = [
    "Rahmat",
    "muhar",
    "kode"
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "Rafli";

// mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";
?>

<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "Rahmat Rafli",
    "view" => 128
];

// mencetak isi array asosiatif
echo "<h2>" . $artikel["judul"] . "</h2>";
echo "<p>oleh: " . $artikel["penulis"] . "</p>";
echo "<p>View: " . $artikel["view"] . "</p>";

?>

<?php
$email["subjek"] = "Apa Kabar?";
$email["pengirim"] = "rahmatrafli@mail.com";
$email["isi"] = "Apa kabar? sudah lama tidak berjumpa";

echo "<pre>";
print_r($email);
echo "</pre>";

?>

<?php
// ini adalah array dua dimensi
$matrik = [
    [2, 3, 4],
    [7, 5, 0],
    [4, 3, 8],
];

// cara mengakses isinya
echo $matrik[1][0]; //-> output: 7
?>

<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "Rahmat Rafli"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "Rahmat Rafli"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "Rahmat Rafli"
    ]
];

// menampilkan array
foreach ($artikel as $post) {
    echo "<h2>" . $post["judul"] . "</h2>";
    echo "<p>" . $post["penulis"] . "<p>";
    echo "<hr>";
}
?>

<?php include 'layout/footer.php' ?>