<?php
// session
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

// main starts

if (isset($_POST['update'])) {


    if ($_FILES['new_image']['name'] != '') {

        $errors = array();
        $file_name = $_FILES['new_image']['name'];
        $file_size = $_FILES['new_image']['size'];
        $file_tmp = $_FILES['new_image']['tmp_name'];
        $file_type = $_FILES['new_image']['type'];;

        if ($file_size > 2097152) {
            $errors = "File size must be lower than 2MB";
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/testimonials/" . $file_name);
        } else {
            print_r($errors);
            die();
        }
    } else {
        $file_name = $_POST['old_image'];
    }


    $id = $_GET['id'];
    $t_name = $_POST["t_name"];
    $t_desgination = $_POST["t_desgination"];
    $t_msg = $_POST["t_msg"];

    $sql = " UPDATE `testimonials` SET `t_name`='$t_name',`t_msg`='$t_msg',`t_image`= '$file_name',`created_at`= current_timestamp()  WHERE `t_id` = '$id' ";

    $result = $conn->query($sql);
    if ($result) {
        echo '<script>alert(" Testimonial Update sucessfully");</script>';
        echo '<script>window.location.assign("testimonials.php");</script>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
                    Not Updated try again later !
            </div>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kitm - Testimonials</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/ckeditor.css">

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
                        <li class="submenu ">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="dashboard.php">Admin Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Home Page</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="slider.php">Slider</a></li>
                                <li><a href="governing.php">Governing Bodies</a></li>
                                <li><a href="scrolling.php">Scrolling Links</a></li>
                                <li><a href="discover.php">Discover More</a></li>
                                <li class="active"><a href="testimonials.php">Testimonials</a></li>
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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Edit Testimonials</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body">
                                <!-- form starts... -->
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <?php

                                            $id = $_GET['id'];
                                            $select_query = "SELECT * FROM testimonials WHERE t_id = '$id'";
                                            $result = $conn->query($select_query);

                                            $t = $result->fetch_assoc();
                                            $t_name =  $t["t_name"];
                                            $t_desgination =  $t["t_desgination"];
                                            $t_msg =  $t["t_msg"];
                                            $t_image =  $t["t_image"];

                                            ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="t_name" value="<?php echo $t_name; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Designation<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="t_desgination" value="<?php echo $t_desgination; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Message<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="t_msg" value="<?php echo $t_msg; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label> Image <span class="text-danger">(Dimension: 1446 x 1746)*</span></label>
                                                    <div class="change-photo-btn">

                                                        <input type="file" name="new_image">
                                                        <img src="./uploads/testimonials/<?php echo $t_image; ?>" alt="image" height="150px">
                                                        <input type="hidden" name="old_image" value="<?php echo $t_image; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" blog-categories-btn pt-0">
                                        <div class="bank-details-btn ">
                                            <button type="submit" class="btn bank-cancel-btn me-2" name="update">Edit</button>
                                        </div>
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


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/ckeditor.js"></script>

    <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script src="assets/js/script.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#blog_description'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>