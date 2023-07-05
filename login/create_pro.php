<?php
session_start();
// Database credentials
$name_com = $_POST['name_com'];
$email = $_POST['email'];
$passw = $_POST['pwd'];
$phone = $_POST['phone'];
$detail_com = $_POST['detail_com'];



// Connection
$connection = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");

// เข้ารหัส sha1
$passwd = sha1($passw);
// Check if not connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//เก็บเข้าไปในอีเมลที่ตรงกัน
$sql = "SELECT * FROM member WHERE Email = '$email'";
//แสดงผลข้อมูลในตาราง
$result = $connection->query($sql); 
if ($result->rowCount() == 1) {
    $_SESSION["add_login"] = "error";
} else {
    //ปรับเป็น ไทม์โซน ไทย
    date_default_timezone_set('Asia/Bangkok');
    $time = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `member`(`Name_Company`, `Email`, `password`, `Phone`, `Detail_Company`, `time`) 
            VALUES('$name_com','$email','$passwd','$phone','$detail_com','$time')";
    $connection->exec($sql);  //นำเข้าข้อมูลเข้าฐานข้อมูล
    $_SESSION['add_login'] = 'success';
}
$connection = null;
header("location:login_page.php");
die();
?>
