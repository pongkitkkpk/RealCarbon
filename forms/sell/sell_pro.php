<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}
?>

<?php
$peronecc = 500;
$cc = $_GET['CC'];
$price = $cc * $peronecc;
$id_com = $_SESSION["ID_Company"];

$oldcc = $_SESSION["ccbalance"];
$oldmoney = $_SESSION["moneybalance"];
$ccalluser = $_SESSION["ccalluser"];
// สถานะเป็นแค่ซื้ออย่างเดียว
$status = 1;

$currentccalluser = $ccalluser + $cc;
$currentcc = $oldcc - $cc;
$currentmoney = $oldmoney + $price;
// ********************************* //
$conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
// ********************************* //
//ปรับเป็น ไทม์โซน ไทย
date_default_timezone_set('Asia/Bangkok');
$time = date("Y-m-d H:i:s");
// market cc database
$sql = "INSERT INTO account (`ccspent`,`ccbalance`,`price`,`moneybalance`,`id_com`,`time`,`status`,`ccalluser`)
                        VALUES('$cc','$currentcc','$price','$currentmoney','$id_com','$time',$status,$currentccalluser)";
$conn->exec($sql);
$_SESSION["ccbalance"] = $currentcc;
$_SESSION["moneybalance"] = $currentmoney;
$_SESSION["ccalluser"] = $currentccalluser;

// user cc

$currenthavecc = $_SESSION["oldhavecc"] + $cc;
$_SESSION["oldhavecc"] = $currenthavecc;
$sqlstore2 = "UPDATE store SET havecc='$currenthavecc',time='$time' WHERE id_store='$id_com'";
$conn->exec($sqlstore2);

$conn = null;
header("location:../history/historypage.php");
die();

?>