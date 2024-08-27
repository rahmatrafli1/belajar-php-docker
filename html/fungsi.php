<?php
$pageTitle = 'Fungsi';
include 'layout/header.php'
?>

<h1>Fungsi</h1>

<ul>
    <li><a href="/fungsi/fungsi-echo">echo()</a></li>
    <li><a href="/fungsi/fungsi-print">print()</a></li>
    <li><a href="/fungsi/fungsi-printf">printf()</a></li>
</ul>

<?php
// mmbuat fungsi
function perkenalan()
{
    echo "Assalamulaikmu, ";
    echo "Perkenalkan, nama saya Rahmat<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan();

echo "<hr>";

?>

<?php
// mmbuat fungsi
function perkenalan1($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan1("Murni", "Hi");

echo "<hr>";

$saya = "Indry";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi
perkenalan1($saya, $ucapanSalam);
?>

<?php
echo "<br>";
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(1994, 2015) . " tahun";
?>

<?php
echo "<br><br>";
function perkenalan2($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    // memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(1994, 2015) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}


// memanggil fungsi perkenalan
perkenalan2("Ardianta");

?>

<?php
echo "<br>";
function faktorial($angka)
{
    if ($angka < 2) {
        return 1;
    } else {
        // memanggil dirinya sendiri
        return ($angka * faktorial($angka - 1));
    }
}

// memanggil fungsi
echo "faktorial 5 adalah " . faktorial(5);

?>

<?php include 'layout/footer.php' ?>