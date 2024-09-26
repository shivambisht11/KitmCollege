<?php
session_start();
include('config/db_connection.php');

$adminprofile = $_SESSION['email'];
if ($adminprofile == true) {
} else {
    header('location: index.php');
}
$sql = "SELECT * FROM admin WHERE email = '$adminprofile'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> KITM - Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <a href="dashboard.php" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="dashboard.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="<?php echo $result['profile_source']; ?>" width="31" alt="Soeng Souy">
                            <div class="user-text">
                                <h6><?php echo $result['username']; ?></h6>
                                <!-- <p class="text-muted mb-0">Administrator</p> -->
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="<?php echo $result['profile_source']; ?>" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6><?php echo $result['username']; ?></h6>
                                <!-- <p class="text-muted mb-0">Administrator</p> -->
                            </div>
                        </div>
                        <a class="dropdown-item" href="admin.php">All Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="dashboard.php" class="active">Admin Dashboard</a></li>
                            </ul>
                        </li>
                            <li class="submenu">
                                <a href="#"><i class="feather-grid"></i> <span> Home Page</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="slider.php">Slider</a></li>
                                    <li><a href="governing.php">Governing Bodies</a></li>
                                    <li><a href="scrolling.php">Scrolling Links</a></li>
                                    <li><a href="discover.php">Discover More</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php"><i class="fas fa-table"></i> <span>Contact</span></a>
                            </li>
                        <li class="submenu">
                            <a href="#"><i class="feather-grid"></i> <span> Student Cornor</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="schedule.php">Exam Schedule</a></li>
                                <li><a href="exam.php">Exam Form</a></li>
                                <li><a href="result.php">Results</a></li>
                                <li><a href="admit-card.php">Admit Card</a></li>
                                <li><a href="admission.php">Admission</a></li>
                                <li><a href="syllabus.php">Syllabus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="pyq.php"><i class="fas fa-graduation-cap"></i> <span>Previous Papers</span></a>
                        </li>
                        <li>
                            <a href="blog.php"><i class="fa fa-newspaper"></i> <span>Blogs</span></a>
                        </li>
                        <li>
                            <a href="sports-activity.php"><i class="fa fa-building"></i> <span>Sports Activity</span></a>
                        </li>
                        <li>
                            <a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome <?php echo $result['username']; ?>!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Students</h6>
                                        <h3>600+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Courses</h6>
                                        <h3>6+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Department</h6>
                                        <h3>5+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Toppers</h6>
                                        <h3>50+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Overview</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Teacher</li>
                                            <li><span class="circle-green"></span>Student</li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apexcharts-area"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Number of Students</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Girls</li>
                                            <li><span class="circle-green"></span>Boys</li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Star Students</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Marks</th>
                                                <th class="text-center">Percentage</th>
                                                <th class="text-end">Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.php">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-02.jpg" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-end">
                                                    <div>2019</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1245</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.php">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-01.jpg" width="25"
                                                            alt="Star Students">
                                                        Jolie Hoskins
                                                    </a>
                                                </td>
                                                <td class="text-center">1195</td>
                                                <td class="text-center">99.5%</td>
                                                <td class="text-end">
                                                    <div>2018</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1625</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.php">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-03.jpg" width="25"
                                                            alt="Star Students">
                                                        Pennington Joy
                                                    </a>
                                                </td>
                                                <td class="text-center">1196</td>
                                                <td class="text-center">99.6%</td>
                                                <td class="text-end">
                                                    <div>2017</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2516</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.php">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-04.jpg" width="25"
                                                            alt="Star Students">
                                                        Millie Marsden
                                                    </a>
                                                </td>
                                                <td class="text-center">1187</td>
                                                <td class="text-center">98.2%</td>
                                                <td class="text-end">
                                                    <div>2016</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.php">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-05.jpg" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-end">
                                                    <div>2015</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title ">Student Activity </h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="activity-groups">
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-01.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>1st place in "Chess”</h4>
                                            <h5>John Doe won 1st place in "Chess"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>1 Day ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-02.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Participated in "Carrom"</h4>
                                            <h5>Justin Lee participated in "Carrom"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-03.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Internation conference in "St.John School"</h4>
                                            <h5>Justin Leeattended internation conference in "St.John School"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2 Week ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards mb-0">
                                        <div class="award-boxs">
                                            <img src="assets/img/icons/award-icon-04.svg" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Won 1st place in "Chess"</h4>
                                            <h5>John Doe won 1st place in "Chess"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>3 Day ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill fb sm-box">
                            <div class="social-likes">
                                <p>Like us on facebook</p>
                                <h6>50,095</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill twitter sm-box">
                            <div class="social-likes">
                                <p>Follow us on twitter</p>
                                <h6>48,596</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill insta sm-box">
                            <div class="social-likes">
                                <p>Follow us on instagram</p>
                                <h6>52,085</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill linkedin sm-box">
                            <div class="social-likes">
                                <p>Follow us on linkedin</p>
                                <h6>69,050</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <footer style="margin-top: 200px;">
                <p>Copyright © 2024 kitmcollege.</p>
            </footer>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>