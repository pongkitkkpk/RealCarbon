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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php include "../../navbar.php" ?>
    <!-- ======= Hero Section ======= -->
    <section id="herosell" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>ตลาดคาร์บอนเครดิต </h1>
                    <h1>การซื้อคาร์บอนเครดิต</h1>
                    <h2 style="font-size : 5vw"> Retaill Carbon Credit พร้อมจำหน่าย <?php echo $_SESSION["ccbalance"]; ?> Retail CC </h2>

                </div>
            </div>
        </div>
    </section> <!-- End Hero -->


    <!-- ======= About Us Section ======= -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    <h3>ขณะนี้ carbonx มี retailCC พร้อมจำหน่าย <?php echo $_SESSION["ccbalance"]; ?> retailCC</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title pt-3" > <b>เรทราคาวันนี้ 1 reatailcc = 500 บาท</b> </h5>
                    <p class="card-title py-2 pb-1">บริษัท <?php echo $_SESSION["Name_Company"]; ?> มี retailCC อยู่ <?php echo $_SESSION["oldhavecc"]; ?> retailCC</ย>
                    <div class="row content">
                        <h2>จำนวน retailCC ที่ต้องการซื้อ</h2>
                        <div class="card-block">
                            <form class="formrun" action="sell_pro.php" method="get" data-formrun-alert-dialog>
                                <div class="row py-3">

                                    <div class="col-sm"></div>
                                    <div class="col-sm">
                                        <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="cc">
                                            <input type="number" id="needcc" onkeyup="changeprice()" min="0" max="<?php echo $_SESSION["ccbalance"]; ?>" class="form-control" name="CC" placeholder="เหลือ <?php echo $_SESSION["ccbalance"]; ?> RetailCC" data-formrun-required data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                            <div class="text-danger" data-formrun-show-if-error="CC">กรุณาใส่จำนวน retailCC ที่จะซื้อ</div>
                                        </div>
                                        <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="price">
                                        </div>
                                    </div>
                                    <div class="col-sm"></div>

                                </div>
                                <!-- <p> เรท 1 Retailcc = 500 บาท</p> -->
                                <p style="display:inline">ราคาการสั่งซื้อ </p>
                                <p style="display:inline"><span id="pricetotal"></p>
                                <p style="display:inline">บาท</p>
                                <br>
                                <div class="py-3">
                                    <button type="submit" class="btn-learn-more " data-formrun-error-text="ซื้อไม่ได้">ตกลงซื้อ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    ราคาอัพเดทเมื่อ 2 วันก่อน
                </div>
            </div>
            
        </div>
    </section>
    <!-- End About Us Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>CARBONX</h3>
            <p>ผลงานการส่งประกวดของกลุ่ม Steve จากนักศึกษามหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ กทม.</p>
            <div class="social-links">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>2023, Group Steve From KMUTNB</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>
    <script src="../../assets/vendor/formrun.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>

<script>
    function changeprice() {
        var x = document.getElementById("needcc").value;
        x = x * 500;
        document.getElementById("pricetotal").innerHTML = x;
    }
</script>