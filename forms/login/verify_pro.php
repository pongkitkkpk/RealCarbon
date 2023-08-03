<?php
session_start();
if (isset($_SESSION["id"])) {
    header("location:../homepage/home.php");
    die();
}
?>
<?php
$email = $_POST['email'];
$p = $_POST['pswd'];
// *************************************
$conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
// *************************************
$sql = " SELECT * FROM member WHERE Email='$email' and password = sha1('$p') ";
$result = $conn->query($sql);

if ($result->rowCount() == 1) {
    date_default_timezone_set('Asia/Bangkok');
    $time = date("Y-m-d H:i:s");
    $transec = "INSERT INTO transectionlogin (Email,time) VALUES ('$email','$time')";
    $conn->exec($transec);
    $data = $result->fetch(PDO::FETCH_ASSOC);
    $_SESSION["ID_Company"] = $data["ID_Company"];
    $_SESSION["Name_Company"] = $data["Name_Company"];
    $_SESSION["Email"] = $data["Email"];
    $_SESSION["Phone"] = $data["Phone"];
    $_SESSION["Detail_Company"] = $data["Detail_Company"];
    $_SESSION["time"] = $data["time"];

    $_SESSION["id"] = session_id();
    // import market database
    $account =  " SELECT * FROM account ORDER BY ID_Transection DESC LIMIT 1 ";
    $result_acc = $conn->query($account);
    $dataacc = $result_acc->fetch(PDO::FETCH_ASSOC);
    $_SESSION["moneybalance"] = $dataacc["moneybalance"];
    $_SESSION["ccbalance"] = $dataacc["ccbalance"];
    $_SESSION["ccalluser"] = $dataacc["ccalluser"];
    // import old cc user
    $sqlstore = "SELECT * FROM store ORDER BY id_store DESC LIMIT 1";
    $result_sqlstore = $conn->query($sqlstore);
    $dataacc = $result_sqlstore->fetch(PDO::FETCH_ASSOC);
    $_SESSION["oldhavecc"] = $dataacc["havecc"];

    header("Location:../homepage/home.php");
    die();
} else {
    $_SESSION["add_login"] = "error";
    header("Location:login_page.php");
    die();
}

$conn = null;
?>
</body>

</html>