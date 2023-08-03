<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}
$id_tran = $_GET['idtran'];
// *************************************
$conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
// *************************************
$sql = " SELECT * FROM account WHERE ID_Transection='$id_tran'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$ccspent = $row['ccspent'];
$price = $row['price'];
$time = $row['time'];
$id_com = $row['id_com'];

$sqlname = " SELECT * FROM member WHERE ID_Company='$id_com'";
$resultname = $conn->query($sqlname);
$row2 = $resultname->fetch(PDO::FETCH_ASSOC);

$namecom = $row2['Name_Company'];
?>

<html>

<head>
    <style type='text/css'>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }

        .container {
            border: 20px solid tan;
            width: 750px;
            height: 563px;
            display: table-cell;
            vertical-align: middle;
        }

        .logo {
            color: tan;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }

        .reason {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            An Organization
        </div>

        <div class="marquee">
            Certificate of Completion
        </div>

        <div class="assignment">
            This certificate is presented to
        </div>

        <div class="person">
            <?php echo $id_tran; ?>
            ชื่อ
            <?php echo $namecom; ?>
            ซื้อจำนวน
            <?php echo $ccspent; ?>
            ราคา
            <?php echo $price; ?>
            เวลา

            <?php echo $time; ?>
        </div>
        <div class="reason">
            For deftly defying the laws of gravity<br />
            and flying high
        </div>
    </div>
</body>

</html>

