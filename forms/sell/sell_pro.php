<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}
?>

<?php
$peronecc=500;
$cc = $_GET['CC'];
$_SESSION["cc"]=$cc;
$price = $cc*$peronecc;
$id_com = $_SESSION["ID_Company"];

$oldcc = $_SESSION["ccbalance"];
$oldmoney = $_SESSION["moneybalance"];
$ccalluser = $_SESSION["ccalluser"];
// สถานะเป็นแค่ซื้ออย่างเดียว
$status = 1;

$ccalluser = $ccalluser+$cc;
$currentcc = $oldcc - $cc;
$currentmoney = $oldmoney + $price;

$conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
//ปรับเป็น ไทม์โซน ไทย
date_default_timezone_set('Asia/Bangkok');
$time = date("Y-m-d H:i:s");
// market cc database
$sql = "INSERT INTO account (`ccspent`,`ccbalance`,`price`,`moneybalance`,`id_com`,`time`,`status`,`ccalluser`)
                        VALUES('$cc','$currentcc','$price','$currentmoney','$id_com','$time',$status,$ccalluser)";
$conn->exec($sql);
$_SESSION["ccbalance"] = $currentcc;
$_SESSION["moneybalance"] = $currentmoney;
$_SESSION["ccalluser"] = $ccall;
// 
// user cc
$sqlstore1 = "SELECT * FROM store ORDER BY id_store DESC LIMIT 1";
$result_sqlstore1 = $conn->query($sqlstore1);
$dataacc = $result_sqlstore1->fetch(PDO::FETCH_ASSOC);
$_SESSION["oldhavecc"] = $dataacc["havecc"];

$currenthavecc = $_SESSION["oldhavecc"]+$cc;
$_SESSION["oldhavecc"] = $currenthavecc ;
$sqlstore2 = "UPDATE store SET havecc='$currenthavecc',time='$time' WHERE id_store='$id_com'";
$conn->exec($sqlstore2);
// 
$conn = null;
header("location:../homepage/home.php");
// header("location:addcc_pro.php");
die();

?>