<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}
?>

<?php
$cc = $_GET['CC'];
$price = $_GET['price'];
$oldcc = $_SESSION["ccbalance"];
$oldmoney = $_SESSION["moneybalance"];
$id_com = $_SESSION["ID_Company"];

$currentcc = $oldcc - $cc;
$currentmoney = $oldmoney + $price;
if ($currentcc < 0) {
    $_SESSION["ccnot"] = "error";
} else {
    $conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
    date_default_timezone_set('Asia/Bangkok');
    $time = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `account` (`ccspent`,`ccbalance`,`price`,`moneybalance`,`id_com`,`time`)
                        VALUES('$cc','$currentcc','$price','$currentmoney','$id_com','$time')";
    $conn->exec($sql);
    $_SESSION["ccbalance"] = $currentcc;
    $_SESSION["moneybalance"]=$currentmoney;
    $conn = null;
    header("location:../homepage/home.php");
    die();
}
?>

