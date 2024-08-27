<?php
$pageTitle = 'Konstanta';
include 'layout/header.php'
?>
<?php
// membuat konstanta
define('VERSION', '1.0.0');

const SITE_NAME  = "Rahmat";
const BASE_URL    = "http://10.1.11.226";

// cetak nilai konstanta
echo "<br><br>Site name: " . SITE_NAME . "<br/>";
echo "URL: " . BASE_URL . "<br/>";
echo "Version: " . VERSION . "<br/>";
?>

<?php include 'layout/footer.php' ?>