<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}
?>

<?php 
$storecc=$_SESSION["storecc"];
$cc=$_SESSION["cc"];

header("location:../homepage/home.php");
die();
?>
