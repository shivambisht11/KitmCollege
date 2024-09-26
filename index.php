<?php
include('config/db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>KITM - Home</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
    <link rel="stylesheet" href="css/testi.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        /* Additional CSS */
        .parent-div {
            padding: 20px;
        }

        .child-div {
            margin-bottom: 30px;
            text-align: center;
        }

        .child-heading {
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 2px;
            letter-spacing: 7px;
            text-decoration: underline;
        }

        .logo-img {
            width: 30%;
            /* Adjust size as needed */
            height: auto;
            /* Maintain aspect ratio */
            margin: 10px;
        }

        /* responsive governing bodies */
        @media only screen and (max-width: 600px) {
            .full-width-section {
                display: block;
            }
        }

        /* responsive scrolling links */
        @media only screen and (max-width: 600px) {
            .scrolling-links {
                display: none;
            }
        }

        .scrolling-links {
            white-space: nowrap;
            overflow: hidden;
            animation: hscroll linear 7s infinite;
            color: blue;
        }

        @keyframes hscroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0%);
            }
        }

        /* responsive of links section */
        @media only screen and (max-width: 600px) {
            #stLinks>#stCard {
                margin: 20px;
                display: block;
                width: 100%;
            }

            #stLinks>#stCard>.CCards {
                width: 95%;
                margin: 6px;
                padding: 22px;
            }
        }

        /* responsive of floating link modal */
        @media only screen and (max-width: 600px) {
            .icon-float {
                display: none;
            }
        }
    </style>
</head>

<body>

    <?php
    include("config/header.php");
    ?>

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>KITM College</span></h2>
                        <p>Nurturing minds, fostering innovation, and sxhaping the leaders of tomorrow. Where knowledge
                            meets inspiration, and dreams take flight</p>
                        <a href="all-courses.php" class="bann-btn-1">All Courses</a><a href="contact-us.php" class="bann-btn-2">Contact Us</a>
                    </div>
                </div>
                <?php
                $sql = "SELECT * FROM slider WHERE  status='1' ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="item">
                            <img src="admin/uploads/slider/<?php echo $row['slider_image'] ?>" alt="">
                            <div class="carousel-caption slider-con">
                                <h2> <?php echo $row['slider_t1'] ?><span><?php echo $row['slider_t2'] ?></span></h2>
                                <p><?php echo $row['slider_line'] ?></p>
                                <a href="admission.php" class="bann-btn-1">Admission</a><a href="contact-us.php" class="bann-btn-2">Contact Us</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>
    <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="awards.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic1.png" alt=""> History</a>
                        </li>
                        <li>
                            <a href="admission.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic2.png" alt=""> Admission</a>
                        </li>
                        <li>
                            <a href="all-courses.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="seminar.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic3.png" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Governing Bodies -->
    <div class="container-fluid">
        <div class="full-width-section">
            <!-- governor -->
            <?php
            $sql = "SELECT * FROM governing WHERE g_type ='1' ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- governor-->
                    <div class="image-card">
                        <img src="admin/uploads/governing/<?php echo $row['g_image'] ?>" alt="Governor">
                        <div class="overlay">
                            <h5><?php echo $row['g_name'] ?>
                            </h5>
                            <p>Hon'ble Governor Uttarakhand</p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- CM-->
            <?php
            $sql = "SELECT * FROM governing WHERE g_type ='2' ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="image-card">
                        <img src="admin/uploads/governing/<?php echo $row['g_image'] ?>" alt="CM">
                        <div class="overlay">
                            <h5><?php echo $row['g_name'] ?>
                            </h5>
                            <p>Hon'ble Chief Minister Uttarakhand</p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- Edu Minstr-->
            <?php
            $sql = "SELECT * FROM governing WHERE g_type ='3' ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="image-card">
                        <img src="admin/uploads/governing/<?php echo $row['g_image'] ?>" alt="EM">
                        <div class="overlay">
                            <h5><?php echo $row['g_name'] ?>
                            </h5>
                            <p>Hon'ble Education Minister Uttarakhand</p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- VC of SSJU-->
            <?php
            $sql = "SELECT * FROM governing WHERE g_type ='4' ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="image-card">
                        <img src="admin/uploads/governing/<?php echo $row['g_image'] ?>" alt="VC">
                        <div class="overlay">
                            <h5><?php echo $row['g_name'] ?>
                            </h5>
                            <p>Hon'ble Vice-Chancellor</p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <!-- scrolling links  -->
    <?php
    $sql = "SELECT * FROM scrolling_link WHERE  status='1' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container mt-5">

            <?php while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="row">
                    <div class="col-12">
                        <div class="scrolling-links">
                            <?php echo $row['sl_name'] ?> 🔗<a href="<?php echo $row['sl_url'] ?>">Click Here</a>
                        </div>
                        <hr>
                    <?php } ?>
                <?php } ?>
                    </div>
                </div>

        </div>
        <!-- DISCOVER MORE -->
        <section>
            <div class="container com-sp pad-bot-70">
                <div class="row">
                    <div class="con-title">
                        <h2>Discover <span>More</span></h2>
                        <p>"Empowering Minds, Nurturing Futures: Welcome to KITM, where knowledge meets innovation, and
                            dreams take flight. Join us on a journey of academic excellence, creativity, and holistic
                            development. Together, let's build a future that's bright, inspired, and filled with endless
                            possibilities."</p>
                    </div>
                </div>
                <div class="row">
                    <div class="ed-course">
                        <?php
                        $sql = "SELECT * FROM discover_more WHERE status ='1' LIMIT 8 ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                            <?php while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="ed-course-in">
                                        <a class="course-overlay" href="<?php echo $row['d_link'] ?>">
                                            <img src="admin/uploads/discover/<?php echo $row['d_image'] ?>" alt="">
                                            <span><?php echo $row['d_name'] ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT KITM -->
        <section>
            <div class="container com-sp pad-bot-70">
                <div class="row">
                    <div class="con-title">
                        <h2>About <span>KITM</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Welcome to KITM College</h2>
                        <p>Soban Singh Jeena University (hereafter referred to as SSJ University), Almora, a residential cum
                            affiliating University, came into existence on 14 August, 2020,vide notification No.
                            168/XXXVI(3)/2020/77/2019 dated June 22, 2020 under the Uttarakhand Act No. 19 of 2020,as a
                            result of persistent demands from the residents of the interior regions for a seperate
                            University. It was carved out of Kumaun University,Nainital of which it had been a campus for
                            more than four decades, with colleges of districts Almora, Bageshwar, Champawat and Pithoragarh
                            falling under its jurisdiction. It has been named after renowned lawyer turned political leader
                            and social reformer of the region, Sri Soban Singh Jeena.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM governing WHERE g_type ='1' ";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <!-- Governor-->
                                    <div class="col-md-6 profile">
                                        <img src="admin/uploads/governing/<?php echo $row['g_image'] ?>" alt="Governor">
                                        <h4><?php echo $row['g_name'] ?></h4>
                                        <p>Hon'ble Chancellor</p>
                                        <p><?php echo $row['time_period'] ?></p>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <?php
                            $sql = "SELECT * FROM governing WHERE g_type ='4' ";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <!-- VC-->
                                    <div class="col-md-6 profile">
                                        <img src="admin/uploads/governing/<?php echo $row['g_image'] ?>" alt="Profile 2">
                                        <h4><?php echo $row['g_name'] ?></h4>
                                        <p>Hon'ble Vice-Chancellor</p>
                                        <p><?php echo $row['time_period'] ?></p>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Links section -->
        <div id="stLinks">
            <h2>Student Important Links</h2>
            <div id="stCard">
                <div class="CCards">
                    <?php
                    $sql = "SELECT * FROM admission WHERE status='1' ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <h3>Online Admission</h3>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href="<?php echo $row['a_link'] ?>">🔴 <?php echo $row['a_name'] ?></a>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="CCards">
                    <?php
                    $sql = "SELECT * FROM exam_form WHERE status='1' ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <h3>Online Examination</h3>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href="<?php echo $row['exam_url'] ?>">🔴 <?php echo $row['exam_name'] ?></a>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="CCards">
                    <?php
                    $sql = "SELECT * FROM result WHERE status='1' ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <h3>Download Results</h3>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href="<?php echo $row['result_url'] ?>">🔴 <?php echo $row['result_name'] ?></a>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="CCards">
                    <?php
                    $sql = "SELECT * FROM admit_card WHERE status='1' ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <h3>Admit Cards</h3>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href="<?php echo $row['admit_card_url'] ?>">🔴 <?php echo $row['admit_card_name'] ?></a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- POPULAR COURSES -->
        <section class="pop-cour">
            <div class="container com-sp pad-bot-70">
                <div class="row">
                    <div class="con-title">
                        <h2>Our <span>Courses</span></h2>
                        <p>Our Featured Programs are selected through a rigorous process and uniquely created for each
                            semester.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/jpeg-optimizer_KRN06941.jpg" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Bachelor of Science in Information Technology (B.Sc IT)</h3>
                                    </a>
                                    <h4>Technology / IT / UG</h4>
                                    <!-- <p>Classes started from coming friday(21 jun 2017),total seats 50 and available seats 20
                            </p>  -->
                                    <span class="home-top-cour-rat">4.5</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="bsc.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>Apply Now</a> </li>
                                            <li><a href="bsc.php"><i class="fa fa-eye" aria-hidden="true"></i>60 Seats</a> </li>
                                            <li><a href="bsc.php">3 years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/jpeg-optimizer_KRN06906 (1).jpg" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Bachelor of Computer Applications (BCA)</h3>
                                    </a>
                                    <h4>Application / IT / UG</h4>
                                    <span class="home-top-cour-rat">4.5</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="bca.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="bca.php"><i class="fa fa-eye" aria-hidden="true"></i>30 Seats</a> </li>
                                            <li><a href="bca.php"></i>3 Years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/banking.jpg" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Banking & Financial Management (BFM)
                                        </h3>
                                    </a>
                                    <h4>Banking / Finance / UG</h4>
                                    <span class="home-top-cour-rat">4.2</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="banking.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="banking.php"><i class="fa fa-eye" aria-hidden="true"></i>60 Seats</a></li>
                                            <li><a href="banking.php"> 3 Years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/banking.jpg" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Diploma in Hotel Management</h3>
                                    </a>
                                    <h4>Management / Hotel Skills </h4>
                                    <span class="home-top-cour-rat">4.2</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="diploma.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="diploma.php"><i class="fa fa-eye" aria-hidden="true"></i>40 Seats</a> </li>
                                            <li><a href="diploma.php">1 Years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/HM.JPG" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Hotel Management & Catering Technology (CTHM)</h3>
                                    </a>
                                    <h4>Frontoffice / Service / UG</h4>
                                    <span class="home-top-cour-rat">4.2</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="hm.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="hm.php"><i class="fa fa-eye" aria-hidden="true"></i>60 Seats</a> </li>
                                            <li><a href="hm.php">3 Years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/mj.JPG" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Journalism & Mass Communication (JMC)</h3>
                                    </a>
                                    <h4>Communication / Journalism / UG</h4>
                                    <span class="home-top-cour-rat">4.2</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="Mass_communication.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="Mass_communication.php"><i class="fa fa-eye" aria-hidden="true"></i>60 Seats</a> </li>
                                            <li><a href="Mass_communication.php">3 Years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="images/all cource/bar.JPG" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Bar Tending</h3>
                                    </a>
                                    <h4>Bar / Hotel / Management</h4>
                                    <span class="home-top-cour-rat">4.2</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="bar_tending.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="bar_tending.php"><i class="fa fa-eye" aria-hidden="true"></i>60 Seats</a></li>
                                            <li><a href="bar_tending.php">1 Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- POPULAR COURSES-->
                            <div class="home-top-cour">
                                <div class="col-md-3"> <img src="images/all cource/mj.JPG" alt=""> </div>
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h3>Bachelor of Commerce (B.Comm)</h3>
                                    </a>
                                    <h4>Commerce / UG</h4>
                                    <span class="home-top-cour-rat">NEW*</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="bcomm.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Apply Now</a> </li>
                                            <li><a href="bcomm.php"><i class="fa fa-eye" aria-hidden="true"></i>60 Seats</a> </li>
                                            <li><a href="bcomm.php"><i class="fa fa-eye" aria-hidden="true"></i>3 Years</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- UPCOMING EVENTS & Latest Blogs -->
        <section>
            <div class="container com-sp pad-bot-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ho-ev-latest ho-ev-latest-bg-1 ">
                            <div class="ho-lat-ev">
                                <h4>Upcoming Event</h4>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                            </div>
                        </div>
                        <div class="ho-event ho-event-mob-bot-sp ">
                            <!-- scrolling-list  add this class to make them scrollable -->
                            <ul>
                                <?php
                                $sql = "SELECT * FROM news_event WHERE n_type='2' && status='1'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <li>
                                            <!-- ye puchna h sir se ... -->
                                            <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                            </div>
                                            <div class="ho-ev-link">
                                                <a href="events.php">
                                                    <h4><?php echo $row['n_title'] ?></h4>
                                                </a>
                                                <p><?php echo $row['n_description'] ?></p>
                                                <span><?php echo $row['n_start_date'] ?> – <?php echo $row['n_start_date'] ?></span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="ho-ev-latest ho-ev-latest-bg-2 ">
                            <div class="ho-lat-ev">
                                <h4>Latest Blogs</h4>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                            </div>
                        </div>
                        <div class="ho-event ho-event-mob-bot-sp">
                            <ul>
                                <?php
                                $sql = "SELECT * FROM blog WHERE status='1' LIMIT 4 ";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <li>
                                            <div class="ho-ev-img"><img src="admin/uploads/blog/<?php echo $row['blog_image'] ?>" alt="">
                                            </div>
                                            <div class="ho-ev-link">
                                                <a href="#">
                                                    <h4><?php echo $row['blog_title'] ?></h4>
                                                </a>
                                                <p><?php echo $row['blog_description'] ?></p>
                                                <span> Date & Time: <?php echo $row['created_at'] ?></span>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS AND EVENTS -->
        <section>
            <div class="container com-sp">
                <div class="row">
                    <div class="con-title">
                        <h2>News and <span>Events</span></h2>
                        <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec
                            pharetra augue.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bot-gal h-gal ho-event-mob-bot-sp">
                            <h4>Photo Gallery</h4>
                            <ul>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/8.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/9.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/1.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/2.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/1.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/2.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/3.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/10.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/5.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/6.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/9.jpg" alt="">
                                </li>
                                <li><img class="materialboxed" data-caption="Fresher Party 2022" src="images/ami/8.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bot-gal h-vid ho-event-mob-bot-sp">
                            <h4>Video Gallery</h4>
                            <iframe src="https://www.youtube.com/embed/videoseries?si=YeeZbQa6G2Gnv8ot&amp;list=PLiujAWTNNm-YhgBkcste_-Wq396eguNtR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <h5>KITM OFFICIAL YOUTUBE CHANNEL</h5>
                            <p>"Explore the vibrant world of KITM College through our Video Gallery, showcasing dynamic campus life, academic excellence, and memorable events captured in vivid detail.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bot-gal h-blog ho-event">
                            <h4>News & Event</h4>
                            <div class="ho-event  ho-event-mob-bot-sp ">
                                <!-- scrolling-list  add this class to make them scrollable -->
                                <ul>
                                    <?php
                                    $sql = "SELECT * FROM news_event WHERE n_type='1' LIMIT 3 ";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                    ?>
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <li>
                                                <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                                </div>
                                                <div class="ho-ev-link">
                                                    <a href="events.php">
                                                        <h4><?php echo $row['n_title'] ?></h4>
                                                    </a>
                                                    <p><?php echo $row['n_description'] ?></p>
                                                    <span><?php echo $row['n_start_date'] ?> – <?php echo $row['n_end_date'] ?></span>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------- Testimonial HTML Starts --------->
        <!-- new -->
        <div class="container">
            <div class="con-title">
                <h2>What Students Say's About <span>College</span></h2>
            </div>
        </div>
        <section class="spacer">
            <div class="testimonial-section">
                <div class="testi-user-img">
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <?php
                            $sql = "SELECT * FROM testimonials WHERE status='1' LIMIT 4";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="swiper-slide">
                                        <img class="u3" src="admin/uploads/testimonials/<?php echo $row['t_image'] ?>" alt="testimonial-image">
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="user-saying">
                    <div class="swiper-container testimonial">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper ">
                            <!-- Slides -->
                            <?php
                            $sql = "SELECT * FROM testimonials WHERE status='1' LIMIT 4";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="quote">
                                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
                                            <p>
                                                “<?php echo $row['t_msg'] ?>“
                                            </p>
                                            <div class="name">-<?php echo $row['t_name'] ?>-</div>
                                            <div class="designation"><?php echo $row['t_desgination'] ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <!-- <div class="swiper-slide">
                                <div class="quote">
                                    <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                                    <p>
                                        “This is best and biggest unified platform
                                        for instant online admission. We can easily
                                        take admission for any course in any institute..“
                                    </p>
                                    <div class="name">-Verma-</div>
                                    <div class="designation">University Student</div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quote">
                                    <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                                    <p>
                                        “This is best and biggest unified platform
                                        for instant online admission. We can easily
                                        take admission for any course in any institute..“
                                    </p>
                                    <div class="name">-Ram Verma-</div>
                                    <div class="designation">University Student</div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quote">
                                    <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
                                    <p>
                                        “This is best and biggest unified platform
                                        for instant online admission. We can easily
                                        take admission for any course in any institute..“
                                    </p>
                                    <div class="name">-kishor Verma-</div>
                                    <div class="designation">University Student</div>

                                </div>
                            </div> -->

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination swiper-pagination-white"></div>

                    </div>
                </div>
            </div>
        </section>

        <!---------- Our Regulators & Affiliaters  --------->
        <div class="container mt-4">
            <section class="affiliation-section con-title">
                <h2>Our <span>Regulators</span> / <span>Affiliations</span></h2>
                <div class="affiliation-logoos">
                    <!-- regulator and affiliation logos here -->
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/ssju-cvs-logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:141,h:100,cg:true" alt="Regulator 1" class="affiliation-logo">
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/nsdc-logo-3860E50C78-seeklogo.com.png/:/rs=w:233,h:100,cg:true,m/cr=w:233,h:100" alt="Regulator 2" class="affiliation-logo">
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/images%20-%202020-07-16T222813.315.jpeg/:/rs=w:100,h:100,cg:true,m/cr=w:100,h:100" alt="Affiliation 1" class="affiliation-logo">
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/hgu-logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:88,h:100,cg:true" alt="Affiliation 2" class="affiliation-logo">
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/slick8.webp/:/rs=w:284,h:100,cg:true,m/cr=w:284,h:100" alt="Affiliation 2" class="affiliation-logo">
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/ugc-logo.jpg/:/rs=w:126,h:100,cg:true,m/cr=w:126,h:100" alt="Affiliation 2" class="affiliation-logo">
                    <img src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/samarth-logo-min.png/:/rs=h:100,cg:true,m" alt="Affiliation 2" class="affiliation-logo">

                </div>
            </section>
        </div>

        <!---------- Our Placement  & tie ups--------->
        <div class="container mt-4">
            <section class="affiliation-section con-title">
                <h2><span>Training</span> And <span>Placements</span></h2>
                <br>
                <div class="container">
                    <div class="row parent-div">
                        <!-- Child divs with logos -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="child-div bg-light p-3">
                                <h3 class="child-heading">IT & BCA</h3>
                                <img class="logo-img" src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/1143px-Taj_Hotels_logo.svg.png/:/rs=w:112,h:100,cg:true,m/cr=w:112,h:100" alt="TCS">
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/images%20-%202020-07-16T223214.910.jpeg/:/rs=w:247,h:100,cg:true,m/cr=w:247,h:100" alt="Wipro">
                                <img class="logo-img" src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" alt="Microsoft">
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/sparsh.jpg/:/rs=h:100,cg:true,m" alt="Infosys">
                                <img class="logo-img" src="https://www.hcltech.com/themes/custom/hcltech/images/hcltech-new-logo.svg" alt="HCL">
                                <!-- Add more logos as needed -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="child-div bg-light p-3">
                                <h3 class="child-heading">HM</h3>
                                <img class="logo-img" src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/1143px-Taj_Hotels_logo.svg.png/:/rs=w:112,h:100,cg:true,m/cr=w:112,h:100" alt="Taj">
                                <img class="logo-img" src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/1200px-JWMarriott.svg.png/:/rs=w:284,h:100,cg:true,m/cr=w:284,h:100" alt="Logo 4">
                                <img class="logo-img" src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/hyatt-hotels-1-logo.png/:/rs=w:133,h:100,cg:true,m/cr=w:133,h:100" alt="Logo 4">
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/sarovar-hotels-and-resorts-vector-logo.png/:/rs=w:180,h:100,cg:true,m/cr=w:180,h:100" alt="Logo 4">
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/1519865713940.png/:/rs=w:100,h:100,cg:true,m/cr=w:100,h:100" alt="Logo 4">
                                <!-- Add more logos as needed -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="child-div bg-light p-3">
                                <h3 class="child-heading">Mass Comm.</h3>
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/oberoi-hotelspng.png/:/rs=w:160,h:100,cg:true,m/cr=w:160,h:100" alt="Logo 5">
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/download%20(1).png/:/rs=w:148,h:100,cg:true,m/cr=w:148,h:100" alt="Logo 6">
                                <img src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/radisson-logo-png-transparent.png/:/rs=w:100,h:100,cg:true,m/cr=w:100,h:100" alt="Affiliation 2" class="affiliation-logo">
                                <img src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/589a47955aa6293a4aac48b6.png/:/rs=w:143,h:100,cg:true,m/cr=w:143,h:100" alt="Affiliation 2" class="affiliation-logo">
                                <!-- Add more logos as needed -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="child-div bg-light p-3">
                                <h3 class="child-heading">B & FM</h3>
                                <img class="logo-img" src="https://img1.wsimg.com/isteam/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/club-mahindra-logo-95D973A6C9-seeklogo.com%20(1).png/:/rs=w:162,h:100,cg:true,m/cr=w:162,h:100" alt="Logo 7">
                                <img class="logo-img" src="https://isteam.wsimg.com/ip/7945b5c1-b84f-4d18-a881-6890c11f8ade/1143px-Taj_Hotels_logo.svg.png/:/rs=w:112,h:100,cg:true,m/cr=w:112,h:100" alt="Logo 8">
                                <!-- Add more logos as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Knowledge Resourses Section -->
        <div class="container">
            <h2 class="heading-text mt-50">KNOWLEDGE RESOURSES</h2>
            <span class="heading-border"></span>
        </div>
        <section>
            <div class="full-bot-book">
                <div class="logo-container">
                    <marquee behavior="scroll" direction="left" scrollamount="15" loop="infinite"> <!-- Adjust scrollamount as needed -->
                        <!-- Add your logo images here -->
                        <img src="https://strapi.ssju.ac.in/uploads/slick1_74beb3a5a3.webp" alt="Logo 2" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick6_af4e2e05d9.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick12_ee3d256031.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick6_af4e2e05d9.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick11_3efb6e3a5b.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick2_075d75ae12.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick13_12e2beaf54.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick7_77a9cbab72.webp" alt="Logo 3" class="logo">
                        <img src="https://strapi.ssju.ac.in/uploads/slick3_244da19e44.webp" alt="Logo 3" class="logo">
                        <!-- Add more logos as needed -->
                    </marquee>
                </div>
            </div>
        </section>
        <br><br>

        <?php
        include("config/footer.php");
        ?>

        <!--Import jQuery before materialize.js-->
        <script src="js/main.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/script.js"></script>
        <script src="https://md-aqil.github.io/images/swiper.min.js"></script>
        <script>
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: '2',
                // coverflowEffect: {
                //   rotate: 50,
                //   stretch: 0,
                //   depth: 100,
                //   modifier: 1,
                //   slideShadows : true,
                // },

                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 50,
                    modifier: 6,
                    slideShadows: false,
                },

            });


            var galleryTop = new Swiper('.swiper-container.testimonial', {
                speed: 400,
                spaceBetween: 50,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                direction: 'vertical',
                pagination: {
                    clickable: true,
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
                thumbs: {
                    swiper: galleryThumbs
                }
            });
        </script>
        <!-- <script>
            document.onkeypress = function(event) {
                event = (event || window.event);
                return keyFunction(event);
            }
            document.onmousedown = function(event) {
                event = (event || window.event);
                return keyFunction(event);
            }
            document.onkeydown = function(event) {
                event = (event || window.event);
                return keyFunction(event);
            }

            //Disable right click script 
            var message = "Sorry, right-click has been disabled";

            function clickIE() {
                if (document.all) {
                    (message);
                    return false;
                }
            }

            function clickNS(e) {
                if (document.layers || (document.getElementById && !document.all)) {
                    if (e.which == 2 || e.which == 3) {
                        (message);
                        return false;
                    }
                }
            }
            if (document.layers) {
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown = clickNS;
            } else {
                document.onmouseup = clickNS;
                document.oncontextmenu = clickIE;
            }
            document.oncontextmenu = new Function("return false")

            function keyFunction(event) {
                //"F12" key
                if (event.keyCode == 123) {
                    return false;
                }

                if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                    return false;
                }
                //"J" key
                if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {
                    return false;
                }
                //"S" key
                if (event.keyCode == 83) {
                    return false;
                }
                //"U" key
                if (event.ctrlKey && event.keyCode == 85) {
                    return false;
                }
                //F5
                if (event.keyCode == 116) {
                    return false;
                }
            }
        </script> -->


</body>

</html>