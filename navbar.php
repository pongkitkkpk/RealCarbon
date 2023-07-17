<!-- ยังไม่เข้าสู่ระบบ -->
<?php if (!isset($_SESSION["ID_Company"])) { ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <h1 class="logo me-auto me-lg-0"><a href="templatcopy.php">CARBONX</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">หน้าหลัก</a></li>
                            <li><a class="nav-link scrollto" href="#about">เกี่ยวกับเรา</a></li>
                            <!-- <li><a class="nav-link scrollto" href="#services">บริการของเรา</a></li> -->
                            <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
                            <li class="dropdown"><a href="#services"><span>บริการของเรา</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li class="dropdown"><a href="#"><span>ตลาดคาร์บอนเครดิต</span> <i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="../sell/sellpage.php">การซื้อคาร์บอนเครดิต</a></li>
                                            <li aria-disabled="true"><a href="#">การขายคาร์บอนเครดิต</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../history/historypage.php">ประวัติการซื้อของบริษัท</a></li>
                                    <li><a href="#">คำนวนคาร์บอนเครดิต</a></li>
                                    <li><a href="#">ข้อมูลส่วนตัวของบริษัท</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="#contact2">คณะผู้จัดการประกวดและผู้สนับสนุนหลัก</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                    <a href=""></a>
                    <a class="get-started-btn scrollto" href="../login/login_page.php"><i class="bi bi-person-circle"></i> ลงชื่อเช้า / สมัครสมาชิก</a>


                </div>
            </div>

        </div>
    </header><!-- End Header -->

<?php } else {

?>
    <!-- /*--------------------------------------------------------------
        # notification
    --------------------------------------------------------------*/ -->
    <style>
        .notification {

            color: white;
            text-decoration: none;
            padding: 15px 26px;
            position: relative;
            display: inline-block;
        }

        .notification:hover {
            color: #009961;
        }

        .notification .badge {
            position: absolute;
            top: 10px;
            right: px;
            padding: 5px 10px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }
    </style>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <h1 class="logo me-auto me-lg-0"><a href="templatcopy.php">CARBONX</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">หน้าหลัก</a></li>
                            <li><a class="nav-link scrollto" href="#about">เกี่ยวกับเรา</a></li>
                            <!-- <li><a class="nav-link scrollto" href="#services">บริการของเรา</a></li> -->
                            <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
                            <li class="dropdown"><a href="#services"><span>บริการของเรา</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li class="dropdown"><a href="#"><span>ตลาดคาร์บอนเครดิต</span> <i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="../sell/sellpage.php">การซื้อคาร์บอนเครดิต</a></li>
                                            <li><a href="#">การขายคาร์บอนเครดิต</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../history/historypage.php">ประวัติการซื้อของบริษัท</a></li>
                                    <li><a href="#">คำนวนคาร์บอนเครดิต</a></li>
                                    <li><a href="#">ข้อมูลส่วนตัวของบริษัท</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="#contact2">คณะผู้จัดการประกวดและผู้สนับสนุนหลัก</a></li>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                        <!-- <li><a class="nav-link scrollto" href="../sell/sellpage.php">test sell</a></li> -->
                        <!-- <li><a class="nav-link scrollto" href="../history/historypage.php">test history</a></li> -->
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                    <a href="#about" class="get-started-btn scrollto">Get Started</a>
                    <a href="#" class="notification">
                        <span><i class="bi bi-bell " style="font-size: 20px"></i></span>
                        <span class="badge">3</span>
                    </a>
                    <a href="../login/logout_pro.php" class="get-started-btn scrollto">logout</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->
<?php  } ?>
