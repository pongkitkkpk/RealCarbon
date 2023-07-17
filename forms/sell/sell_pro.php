<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}


?>

<?php
$cc = $_GET['CC'];
$_SESSION["cc"]=$cc;
$price = $_GET['price'];
$oldcc = $_SESSION["ccbalance"];
$oldmoney = $_SESSION["moneybalance"];
$id_com = $_SESSION["ID_Company"];
// สถานะเป็นแค่ซื้ออย่างเดียว
$status = 1;


$currentcc = $oldcc - $cc;
$currentmoney = $oldmoney + $price;
$conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
//ปรับเป็น ไทม์โซน ไทย
date_default_timezone_set('Asia/Bangkok');
$time = date("Y-m-d H:i:s");
$sql = "INSERT INTO account (`ccspent`,`ccbalance`,`price`,`moneybalance`,`id_com`,`time`,`status`)
                        VALUES('$cc','$currentcc','$price','$currentmoney','$id_com','$time',$status)";
$conn->exec($sql);
$_SESSION["ccbalance"] = $currentcc;
$_SESSION["moneybalance"] = $currentmoney;
$conn = null;
header("location:addcc_pro.php");
die();

?>