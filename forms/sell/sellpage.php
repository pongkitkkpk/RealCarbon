<?php
session_start();
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
    <section id="hero" class="bg hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>ขาย RetaillCC หน้านี้คร้าบบบ </h1>
                    <h1>.....?</h1>
                    <h2>ตอนนี้มี Retaill Carbon Credit เหลือ <?php echo $_SESSION["ccbalance"]; ?> Retail CC แล้ว</h2>

                </div>
            </div>
        </div>
    </section> <!-- End Hero -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">

                <div class="row content">
                    <h2>ขาย carbon ค้าบบ</h2>

                    <div class="card-block">
                        <form class="formrun" action="sell_pro.php" method="get" data-formrun-alert-dialog>
                            <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="cc">
                                <label class="form-control-label" >การขาย CC</label>
                                <input type="number" min="0" max="<?php echo $_SESSION["ccbalance"]; ?>" class="form-control" name="CC" placeholder="เหลือ <?php echo $_SESSION["ccbalance"]; ?> RetailCC" 
                                data-formrun-required data-formrun-class-if-success="form-control-success" 
                                data-formrun-class-if-error="form-control-danger"
                                onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                <div class="text-danger" data-formrun-show-if-error="CC">กรุณาใส่จำนวน retailCC ที่จะซื้อ</div>
                            </div>
                            <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="price">
                                <label class="form-control-label">ราคา</label>
                                <input type="number"  min="0"class="form-control" name="price" placeholder="ราคา สมมติ" 
                                data-formrun-required data-formrun-class-if-success="form-control-success" 
                                data-formrun-class-if-error="form-control-danger"
                                onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                <div class="text-danger" data-formrun-show-if-error="price">กรุณาใส่ราคาที่จะซื้อ</div>
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn-learn-more" data-formrun-error-text="ซื้อไม่ได้">ตกลงซื้อ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->



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