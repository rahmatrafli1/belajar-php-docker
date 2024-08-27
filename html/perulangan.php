<?php
$pageTitle = 'Perulangan';
include 'layout/header.php'
?>

<?php
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Ini perulangan ke-$i</br>";
}

?>

<?php

$ulangi = 1;

echo "<br>";
while ($ulangi <= 10) {
    echo "Ini adalah perulangan ke-$ulangi<br>";
    $ulangi++;
}

?>

<?php

$ulangi = 10;

echo "<br>";
do {
    echo "ini adalah perulangan ke-$ulangi<br>";
    $ulangi--;
} while ($ulangi >= 1);

?>

<?php
echo "<br>";
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";

?>

<?php

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
}

?>

<?php

$i = 1;
echo "<br>";
while ($i <= 10) {
    for ($j = 1; $j <= 10; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }

    $i++;
}
?>

<?php include 'layout/footer.php' ?>