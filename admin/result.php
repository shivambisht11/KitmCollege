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

// main starts here...
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM result WHERE result_id = '$id' ");
    header("Location:result.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kitm - Result</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Student Cornor</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="schedule.php">Exam Schedule</a></li>
                                <li><a href="exam.php">Exam Form</a></li>
                                <li class="active"><a href="result.php">Results</a></li>
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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Result</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Result</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Result</h3>
                                        </div>
                                        <div class="col-auto text-end float-end ms-auto download-grp">
                                            <a href="add-result.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>S.No</th>
                                                <th>Result Name</th>
                                                <th>Url</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select = "SELECT * FROM result";
                                            $run = mysqli_query($conn, $select);
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i; ?>
                                                    </td>
                                                    <td>
                                                        <h2>
                                                            <a><?php echo $row['result_name']; ?></a>
                                                        </h2>
                                                    </td>
                                                    <td><?php echo $row['result_url']; ?></td>
                                                    <td><?php echo $row['created_at']; ?></td>
                                                    <td><?php if ($row['status'] == 1) {
                                                            echo '<a href="config/status_result.php?id=' . $row['result_id'] . '&status=0" class="btn btn-success status">Active</a>';
                                                        } else {
                                                            echo '<a href="config/status_result.php?id=' . $row['result_id'] . '&status=1" class="btn btn-danger status">Deactive</a>';
                                                        }
                                                        ?></td>
                                                    <td class="text-end">
                                                        <div class="actions">
                                                            <a href="result.php?id=<?php echo $row['result_id']; ?>" class="btn btn-sm bg-success-light me-2">
                                                                <i class="feather-delete"></i>
                                                            </a>
                                                            <a href="edit-result.php?id=<?php echo $row['result_id']; ?>" class="btn btn-sm bg-danger-light">
                                                                <i class="feather-edit"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <p>Copyright © 2024 KitmCollege.</p>
            </footer>

        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>