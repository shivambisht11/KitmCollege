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
    <title>Kitm - Settings</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
                        <li class="submenu ">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="dashboard.php">Admin Dashboard</a></li>
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
                        <div class="col">
                            <h3 class="page-title">Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="settings.php">Settings</a></li>
                                <li class="breadcrumb-item active">General Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="settings-menu-links">
                    <ul class="nav nav-tabs menu-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="settings.php">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="localization-details.php">Localization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="payment-settings.php">Payment Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="email-settings.php">Email Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="social-settings.php">Social Media Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="social-links.php">Social Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seo-settings.php">SEO Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="others-settings.php">Others</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Website Basic Details</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Website Name <span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Website Name">
                                        </div>
                                        <div class="form-group">
                                            <p class="settings-label">Logo <span class="star-red">*</span></p>
                                            <div class="settings-btn">
                                                <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
                                                <label for="file" class="upload">
                                                    <i class="feather-upload"></i>
                                                </label>
                                            </div>
                                            <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
                                            <div class="upload-images">
                                                <img src="assets/img/logo.png" alt="Image">
                                                <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                    <i class="feather-x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="settings-label">Favicon <span class="star-red">*</span></p>
                                            <div class="settings-btn">
                                                <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
                                                <label for="file" class="upload">
                                                    <i class="feather-upload"></i>
                                                </label>
                                            </div>
                                            <h6 class="settings-size">
                                                Recommended image size is <span>16px x 16px or 32px x 32px</span>
                                            </h6>
                                            <h6 class="settings-size mt-1">Accepted formats: only png and ico</h6>
                                            <div class="upload-images upload-size">
                                                <img src="assets/img/favicon.png" alt="Image">
                                                <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                    <i class="feather-x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6">
                                                <div class="form-group">
                                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">RTL</p>
                                                        <input type="checkbox" id="status_1" class="check">
                                                        <label for="status_1" class="checktoggle">checkbox</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
                                                <button type="submit" class="btn btn-grey">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Address Details</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form>
                                    <div class="settings-form">
                                        <div class="form-group">
                                            <label>Address Line 1 <span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Address Line 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Address Line 2 <span class="star-red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Address Line 2">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City <span class="star-red">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State/Province <span class="star-red">*</span></label>
                                                    <select class="select form-control">
                                                        <option selected="selected">Select</option>
                                                        <option>California</option>
                                                        <option>Tasmania</option>
                                                        <option>Auckland</option>
                                                        <option>Marlborough</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Zip/Postal Code <span class="star-red">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country <span class="star-red">*</span></label>
                                                    <select class="select form-control">
                                                        <option selected="selected">Select</option>
                                                        <option>India</option>
                                                        <option>London</option>
                                                        <option>France</option>
                                                        <option>USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="settings-btns">
                                                <button type="submit" class="btn btn-orange">Update</button>
                                                <button type="submit" class="btn btn-grey">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>