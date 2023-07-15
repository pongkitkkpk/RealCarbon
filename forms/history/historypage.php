<?php
session_start();
// if (!isset($_SESSION["Email"])) {
//     header("location:tableCC.php");
//     die();
// }else {
$id = $_GET['id'];
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php include "../../navbar.php" ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>KnightOne - Create Bootstrap Website Template</h1>
                    <h2>We are team of designers making websites with Bootstrap</h2>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <div class="container fluid">

        <br>
        <section id="faq" class="faq">
            <div style="overflow-x:auto;">
                <table class="table table table-hover align-cc mb-0 table accordion">
                    <thead>
                        <tr>
                            <th>Transection number</th>
                            <!-- <th>&nbsp;</th> -->
                            <th>Namecompany</th>
                            <th>Status</th>
                            <th>price</th>
                            <th>totleCC</th>
                            <th>time</th>
                        </tr>
                    </thead>
                    <tbody class="content">

                        <?php
                        $conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
                        $conn->exec("SET CHARACTER SET utf8");
                        $data = $conn->query("SELECT a.ID_transection , a.ccspent , a.price , a.id_com , a.time ,a.status,
                                         m.ID_Company,m.Name_Company
                              FROM account a , member m 
                              WHERE a.id_com=m.ID_Company 
                              ORDER BY a.ID_transection ;");
                        $test = "";
                        if ($data !== false) {
                            while ($row = $data->fetch()) {
                                    echo "<tr data-bs-toggle=\"collapse\" data-bs-target=\"#r" . $row['0'] . "\"><th>";
                                    echo  $row['0'];
                                    echo "</th><td>";
                                    echo  $row['7'];
                                    echo "</td>";
                                    if ($row['5'] == 1) {
                                        echo "<td class=\"status\"><span class=\"activebuy\">Buy</span></td>";
                                    } else if ($row['5'] == 2) {
                                        echo "<td class=\"status\"><span class=\"activesell\">Sell</span></td>";
                                    } else {
                                        echo "<td class=\"status\"><span class=\"waiting\">wantted</span></td>";
                                    }
                                    echo "<td>";
                                    echo  $row['2'];
                                    echo "</td><td>";
                                    echo $row['1'];
                                    echo "</td><td> ".$row['4']."</td>";
                                    echo "</tr>";
                                    echo "<tr><td colspan=\"6\">";
                                    echo "<div class=\"collapse \" id=\"r" . $row['0'] . "\" data-bs-parent=\".table\" data-toggle=\"collapse\">";

                                    echo "<div class=\"card\">";
                                    if ($row['5'] == 1) {
                                        echo "<div class=\"card-header\" style=\"color: #23bd5a;\">";
                                    } else if ($row['5'] == 2) {
                                        echo "<div class=\"card-header\" style=\"color: #a73a1f;\">";
                                    } else {
                                        echo "<div class=\"card-header\" style=\"color: #cfa00c;\">";
                                    }
                                    echo "รายละเอียดเจ้าของ transection";
                                    echo "</div>";

                                    echo "<div class=\"card-body\">";
                                    echo "<h5 class=\"card-title\">asdfdsf</h5> ";
                                    echo "<p class=\"card-text\"> ชื่อบริษัท " . $row['0'] . " <br></p>";
                                    echo "</div>";

                                    echo "</div>";
                                    echo "</div>";

                                    echo "</td></tr>";
                                
                                $test = $row['3'];
                            }
                        }
                        $conn = null;
                        ?>

                    </tbody>
                </table>
            </div>
    </div>
    </section>
    <!-- ======= Faq Section ======= -->
    <section id="faq" class="faq">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Frequently Asked <strong>Questions</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapse">Non consectetur a
                                    erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                                        gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Feugiat scelerisque
                                    varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                                        id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                                        pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt
                                        dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Dolor sit amet
                                    consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                                        elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                                        eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                                        sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
            </div>

        </div>
    </section><!-- End Faq Section -->



</body>

</html>