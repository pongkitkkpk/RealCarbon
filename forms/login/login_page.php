<?php
session_start();
$_SESSION["Islogin"] = "true";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Webleb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/login_styles.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="bg">
    <div class="section">
        <div class="container">
            <?php
            if (isset($_SESSION['add_login'])) {
                if ($_SESSION['add_login'] == "error") {
                    echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
                    echo "<strong>เกิดข้อผิดพลาด กรุณากรอกข้อมูลใหม่อีกครั้ง";
                    echo "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"> </button>";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-success alert-dismissible fade show' role=\"alert\"> เปิดบัญชีเรียบร้อยแล้ว!!</div>";
                    echo "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>";
                }
                unset($_SESSION['add_login']);
            }
            ?>
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="bgtxtheader mb-0 pb-3"><span>ลงชื่อเข้าใช้</span><span> สมัครสมาชิก</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">ลงชื่อเข้าใช้</h4>
                                            <form action="verify_pro.php" method="POST">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style" placeholder="อีเมลล์" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="pswd" class="form-style" placeholder="รหัสผ่าน" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">เข้าสู่ระบบ</button>
                                                <p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">ลืมรหัสผ่านของคุณหรือไม่?</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">สมัครสมาชิก</h4>
                                            <form action="create_pro.php" method="POST">
                                                <div class="form-group">
                                                    <input type="text" name="name_com" class="form-style" placeholder="ชื่อบริษัท" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="tel" name="phone" class="form-style" placeholder="เบอร์ติดต่อของบริษัท" required>
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style" placeholder="อีเมลล์สำหรับเข้าสู่ระบบ" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="pwd" class="form-style" placeholder="รหัสผ่านสำหรับเข้าสู่ระบบ" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">ลงทะเบียน</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <h1 class="mb-0 mt-4 text-center"><a href="../homepage/home.php" class="bach-to-home"><i class="bi bi-arrow-left-short"></i></a></h1>
                </div>

            </div>

        </div>

    </div>


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

<!-- <?php
        // session_destroy();
        // die();
        ?> -->