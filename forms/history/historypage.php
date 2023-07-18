<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:../login/login_page.php");
    die();
}
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
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">

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
                    <h2>ตอนนี้คุณมี <?php echo $_SESSION["oldhavecc"] ?> Retailcc</h2>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <div class="container fluid content">

        <br>
        <section id="faq" class="faq">
            <div style="overflow-x:auto;" class="table-responsive">
                <table class="table table table-hover align-cc mb-0 ">
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
                        $id_com = $_SESSION["ID_Company"];
                        $conn = new PDO("mysql:host=localhost;dbname=dbbscarbon;charset=utf8", "root", "");
                        $conn->exec("SET CHARACTER SET utf8");
                        $data = $conn->query("SELECT a.ID_transection , a.ccspent , a.price , a.id_com , a.time ,a.status,
                                         m.ID_Company,m.Name_Company
                              FROM account a , member m 
                              WHERE a.id_com=$id_com and m.ID_Company=a.id_com
                              ORDER BY a.ID_transection ;");
                        if ($data !== false) {
                            while ($row = $data->fetch()) {
                                echo "<tr data-bs-toggle=\"collapse\" data-bs-target=\"#r" . $row['0'] . "\"><th>";
                                echo  $row['0'];
                                echo "</th><td class=\"center \">";
                                echo  $row['7'];
                                echo "</td>";
                                if ($row['5'] == 1) {
                                    echo "<td class=\"status center\"><span class=\"activebuy\">Buy</span></td>";
                                } else if ($row['5'] == 2) {
                                    echo "<td class=\"status center\"><span class=\"activesell\">Sell</span></td>";
                                } else {
                                    echo "<td class=\"status center\"><span class=\"waiting\">wantted</span></td>";
                                }
                                echo "<td class=\"center \">";
                                echo  $row['2'];
                                echo "</td><td class=\"center \">";
                                echo $row['1'];
                                echo "</td><td class=\"center \"> " . $row['4'] . "</td>";
                                echo "</tr>";
                                echo "<tr><td colspan=\"6\">";
                                echo "<div class=\"collapse \" id=\"r" . $row['0'] . "\" data-bs-parent=\".table\" data-toggle=\"collapse\">";

                                echo "<div class=\"card \">";
                                if ($row['5'] == 1) {
                                    echo "<div class=\"card-header center\" style=\"color: #23bd5a;\">";
                                } else if ($row['5'] == 2) {
                                    echo "<div class=\"card-header center\" style=\"color: #a73a1f;\">";
                                } else {
                                    echo "<div class=\"card-header center\" style=\"color: #cfa00c;\">";
                                }
                                echo "Transection number  " . $row['0'] . "";
                                echo "</div>";

                                echo "<div class=\"card-body\">";


                                echo "<div class=\"container\">";

                                echo "<div class=\"row align-items-start\">";
                                echo "<div class=\"col\"></div>";
                                echo "<div class=\"col\">";
                                echo "</div>";
                                echo "<div class=\"col\"></div>";
                                echo "</div>";

                                echo "<div class=\"row align-items-center\">";
                                echo "<div class=\"col\">";
                                echo "<p class=\"card-text\" style=\"margin-bottom:0.25%;\"><i class=\"bi bi-cash-stack\"></i>ปริมาณการซืื้อ cc " . $row['1'] . " Retailcc<br></p>";
                                echo "<p class=\"card-text\" style=\"margin-bottom:0.25%;\"><i class=\"bi bi-cash-stack\"></i>  ราคา " . $row['2'] . " Retailcc<br></p>";
                                echo "</div>";
                                echo "<div class=\"col\"></div>";
                                echo "<div class=\"col\"></div>";
                                echo "</div>";

                                echo "<div class=\"row align-items-end\">";

                                echo "<div class=\"col\"></div>";
                                echo "<div class=\"col\"></div>";
                                echo "<div class=\"col\">";
                                echo "<a href=\"#\" class=\"btn-learn-more\">Learn More</a>";
                                echo "</div>";
                                echo "</div>";




                                // echo "<p class=\"card-text\" style=\"margin-bottom:0.25%;\">  <br></p>";


                                echo "</td></tr>";
                            }
                        }
                        $conn = null;
                        ?>

                    </tbody>
                </table>
            </div>
    </div>
    </section>
    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>



</body>

</html>