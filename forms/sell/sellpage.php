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
    <title>carbonX</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../carbonicon.jpg" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="preload" as="image" href="../../forms/homepage/img/green-bg7.jpg">

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
                    <h1>ตลาดสำหรับการซื้อคาร์บอนเครดิต</h1>
                    <a href="#faq">
                        <h2>เลื่อนลงด้านล่างเพื่อเริ่มการสั่งซื้อได้เลย <i class="bi bi-arrow-down-circle-fill"></i></h2>
                    </a>
                </div>
            </div>
        </div>
    </section> <!-- End Hero -->


    <!-- ======= About Us Section ======= -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="card text-center">
                <div class="card-header" id="sellhead">
                    <h3 data-formrun-hide-if-confirm>ขณะนี้มี retailCC พร้อมจำหน่าย <?php echo $_SESSION["ccbalance"]; ?> retailCC</h3>
                    <h3 data-formrun-show-if-confirm>ตรวจเช็คช้อมูล</h3>
                </div>
                <div class="card-body">
                    <h5 class="alert pt-3" data-formrun-hide-if-confirm>*** เรทราคาวันนี้ 1 reatailCC = 500 บาท ***</h5>
                    <h2 class="card-title py-3" data-formrun-hide-if-confirm><u>บริษัท <b><?php echo $_SESSION["Name_Company"]; ?></b> มี retailCC อยู่ <?php echo $_SESSION["oldhavecc"]; ?> retailCC</u></h2>
                    <div class="row content">
                        <h5 data-formrun-hide-if-confirm>จำนวน retailCC ที่ต้องการซื้อ</h5>
                        <div class="card-block">
                            <form class="formrun" action="sell_pro.php" method="get" data-formrun-confirm data-formrun-alert-dialog>
                                <div class="row py-3">
                                    <div class="col-sm"></div>
                                    <div class="col-sm" data-formrun-hide-if-confirm>
                                        <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="cc">
                                            <input type="number" id="needcc" onkeyup="changeprice()" min="0" max="<?php echo $_SESSION["ccbalance"]; ?>" class="form-control" name="CC" placeholder="เหลือ <?php echo $_SESSION["ccbalance"]; ?> RetailCC" data-formrun-required data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                            <div class="text-danger" data-formrun-show-if-error="CC">กรุณาใส่จำนวน retailCC ที่จะซื้อ</div>
                                        </div>
                                        <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="price">
                                        </div>
                                    </div>
                                    <div class="col-sm"></div>
                                </div>
                                <div class="" data-formrun-show-if-confirm>
                                    <br>
                                    <h5>ชื่อบริษัท <b><?php echo $_SESSION["Name_Company"]; ?></b></h5>
                                    <h5>จำนวน RetailCC ที่ต้องการซื้อ <b><span data-formrun-confirm-value="CC"> </span> </b>RetailCC</h5>
                                    <h5>ราคาต่อหน่วย <b>500</b> บาท / 1 RetailCC</h5>
                                </div>
                                <div>
                                    <h5 style="display:inline">ราคาการสั่งซื้อ </h5>
                                    <h5 style="display:inline"><b><span id="pricetotal"></b></h5>
                                    <h5 style="display:inline" data-formrun-hide-if-confirm>บาท</h5>
                                    <br>
                                </div>
                                <div data-formrun-show-if-confirm>
                                    <br>
                                    <br>
                                    <a href="javascript:void(0)" class="btn-cancel" data-formrun-back-button>ย้อนกลับ</a>
                                    <button type="submit" class="btn-sell" data-formrun-error-text="การตกลงซื้อไม่สำเร็จ" data-formrun-send-text="บันทึก" data-formrun-submitting-text="กำลังบันทึก...">ตกลงซื้อ</button>
                                    <br>
                                    <br>
                                </div>
                                <div class="py-3" data-formrun-hide-if-confirm>
                                    <button type="submit" class="btn-sell" data-formrun-error-text="การตกลงซื้อไม่สำเร็จ">ตกลงซื้อ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    ราคาอัพเดทครั้งล่าสุดเมื่อ 31-7-2566
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