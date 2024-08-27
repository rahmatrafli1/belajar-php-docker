<?php
$pageTitle = 'Operator Aritmatika';
include 'layout/header.php'
?>

<?php

$a = 6;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "<br><br>$a > $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

// variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a, $b, $c);
echo "<hr>";

// variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a, $b, $c);
echo "<hr>";

// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";

// bitwise AND
$c = $a & $b;
echo "$a & $b = $c";
echo "<hr>";

// bitwise OR
$c = $a | $b;
echo "$a | $b = $c";
echo "<hr>";

// bitwise XOR
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<hr>";

// Shift Left
$c = $a << $b;
echo "$a << $b = $c";
echo "<hr>";

// Shift Right
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<hr>";

$suka = true;

// menggunakan operator ternary
$jawab = $suka ? "iya" : "tidak";

// menampilkan jawaban
echo $jawab;

?>

<?php include 'layout/footer.php' ?>