<?php
$pageTitle = 'Operator Percabangan';
include 'layout/header.php'
?>

<?php

$nilai = 88;

if ($nilai > 90) {
    $grade = "A+";
} elseif ($nilai > 80) {
    $grade = "A";
} elseif ($nilai > 70) {
    $grade = "B+";
} elseif ($nilai > 60) {
    $grade = "B";
} elseif ($nilai > 50) {
    $grade = "C+";
} elseif ($nilai > 40) {
    $grade = "C";
} elseif ($nilai > 30) {
    $grade = "D";
} elseif ($nilai > 20) {
    $grade = "E";
} else {
    $grade = "F";
}

echo "<br><br>Nilai anda: $nilai<br>";
echo "Grade: $grade";
?>

<?php

$level = 3;

switch ($level) {
    case 1:
        echo "<br><br>Pelajari HTML";
        break;
    case 2:
        echo "<br><br>Pelajari CSS";
        break;
    case 3:
        echo "<br><br>Pelajari Javascript";
        break;
    case 4:
        echo "<br><br>Pelajari PHP";
        break;
    default:
        echo "<br><br>Kamu bukan programmer!";
}
?>

<?php

$suka = true;

echo $suka ?  "<br><br>Aku juga suka kamu" : "<br><br>Baiklah!";

?>

<?php

$umur = 17;
$menikah = false;

if ($umur > 18) {
    if ($menikah) {
        echo "<br><br>Selamat datang pak!";
    } else {
        echo "<br><br>Selamat datang wahai pemuda!";
    }
} else {
    echo "<br><br>Maaf website ini hanya untuk yang sudah berumur 18+";
}
?>

<?php include 'layout/footer.php' ?>