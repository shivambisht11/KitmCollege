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
    <title>Kitm - Pending-Blog</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

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
                        <li class="active">
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
                    <div class="col-md-9">
                        <ul class="list-links mb-4">
                            <li><a href="blog.php">Active Blog</a></li>
                            <li class="active"><a href="pending-blog.php">Pending Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="add-blog.php" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> Add New</a>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-6.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 225
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-01.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Vincent</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">Learning is an objective, Lorem Ipsum
                                        is not </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i>Edit</a>

                                        <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">

                                            <i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                    <div class="status-toggle">
                                        <input id="rating_4" class="check" type="checkbox" checked>
                                        <label for="rating_4" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-2.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 533
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-02.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Lois A</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">Discussion Increase student
                                        learning</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.php" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i>
                                            Delete</a>
                                    </div>
                                    <div class="status-toggle">
                                        <input id="rating_5" class="check" type="checkbox" checked>
                                        <label for="rating_5" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-3.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 132
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-03.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Levell Scott</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">Music reduces stress,Lorem Ipsum is
                                        not</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.php" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i>
                                            Delete</a>
                                    </div>
                                    <div class="status-toggle">
                                        <input id="rating_6" class="check" type="checkbox" checked>
                                        <label for="rating_6" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-4.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 156
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-04.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Calvin</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">Sports reduced risk of obesity, Lorem
                                        Ipsum is not </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.php" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i>
                                            Delete</a>
                                    </div>
                                    <div class="status-toggle">
                                        <input id="rating_7" class="check" type="checkbox" checked>
                                        <label for="rating_7" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-5.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 321
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Aaliyah </span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">Yoga can ease arthritis symptoms</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.php" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i>
                                            Delete</a>
                                    </div>
                                    <div class="status-toggle">
                                        <input id="rating_8" class="check" type="checkbox" checked>
                                        <label for="rating_8" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.php"><img class="img-fluid" src="assets/img/category/blog-1.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 754
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.php">
                                                <img src="assets/img/profiles/avatar-06.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Malynne</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec
                                                        2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.php">Education gives Greater Sense of
                                        Disciplinet</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.php" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.php" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i>
                                            Delete</a>
                                    </div>
                                    <div class="status-toggle">
                                        <input id="rating_9" class="check" type="checkbox" checked>
                                        <label for="rating_9" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row ">
                    <div class="col-md-12">
                        <div class="pagination-tab  d-flex justify-content-center">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="feather-chevron-left mr-2"></i>Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next<i class="feather-chevron-right ml-2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content doctor-profile">
                        <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                        </div>
                        <div class="modal-body pt-0">
                            <div class="delete-wrap text-center">
                                <div class="del-icon"><i class="feather-x-circle"></i></div>
                                <h2>Sure you want to delete</h2>
                                <div class="submit-section">
                                    <a href="pending-blog.php" class="btn btn-success me-2">Yes</a>
                                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
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

    <script src="assets/js/script.js"></script>
</body>

</html>