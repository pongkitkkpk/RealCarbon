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

</head>

<body class="bg">
    <div class="section">
        <div class="container">
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
                                                    <input type="email" name="email" class="form-style" placeholder="อีเมลล์">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="pswd" class="form-style" placeholder="รหัสผ่าน">
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
                                                    <input type="text" name="name_com" class="form-style" placeholder="ชื่อบริษัท">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="tel" name="phone" class="form-style" placeholder="เบอร์ติดต่อของบริษัท">
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style" placeholder="อีเมลล์สำหรับเข้าสู่ระบบ">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="pwd" class="form-style" placeholder="รหัสผ่านสำหรับเข้าสู่ระบบ">
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- <?php
        // session_destroy();
        // die();
        ?> -->