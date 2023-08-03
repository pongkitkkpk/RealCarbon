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
$servername = "localhost";
$database = "dbbscarbon";
$username = "root";
$passworddb = "";
$conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $passworddb);
// *************************************
$sql = " SELECT * FROM member WHERE Email='$email' and password = sha1('$p') ";
$result = $conn->query($sql);

if ($result->rowCount() == 1) {
    date_default_timezone_set('Asia/Bangkok');
    $time = date("Y-m-d H:i:s");
    $transec = "INSERT INTO transectionlogin (Email,time) VALUES ('$email','$time')";
    $conn->exec($transec);
    $data = $result->fetch(PDO::FETCH_ASSOC);

    $idstore = $data["ID_Company"];

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
    $sqlstore = "SELECT * FROM store WHERE id_store=$idstore ";
    $result_sqlstore = $conn->query($sqlstore);
    if ($result_sqlstore->rowCount() == 1) {
        $dataacck = $result_sqlstore->fetch(PDO::FETCH_ASSOC);
        $_SESSION["oldhavecc"] = $dataacck["havecc"];
    }

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