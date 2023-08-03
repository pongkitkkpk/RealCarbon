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
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">
    <style type='text/css'>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        * {
            font-family: 'Pridi', serif;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }

        .container {
            border: 20px solid #678566;
            background-color: rgba(233, 233, 182, 0.3);
            width: 750px;
            height: 563px;
            display: table-cell;
            vertical-align: middle;
        }

        .logo {
            color: tan;
        }

        .marquee {
            color: #678566;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 30px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }

        .reason {
            margin: 20px;
        }

        #detail_cer {
            font-size: 20px;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        #detail_date {
            font-size: 20px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <div class="logo">
            CARBONX
        </div> -->

        <div class="marquee">
            CARBONX
        </div>

        <div class="assignment">
            ขอมอบใบรับรองการซื้อขายนี้เพื่อแสดงว่า
        </div>

        <div class="person">
            บริษัท <?php echo $namecom; ?>
            <br>
            เลขการจัดซื้อที่ <?php echo $id_tran; ?>
            <br>
            <div id="detail_cer">
            ได้ทำการสั่งซื้อ RetailCC รวมทั้งสิ้น <?php echo $ccspent; ?> RetailCC</div>
            <div id="detail_date">
            ในวันที่ <?php echo $time; ?></div>
        </div>
        <div class="reason">
            <b>ออกใบรับรองโดย</b>
            <br>
            CARBONX
        </div>
    </div>
</body>

</html>

