<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Kitm - Time Table</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>

        <ul class="nav user-menu">
            <li class="nav-item dropdown noti-dropdown language-drop me-2">
                <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                    <img src="assets/img/icons/header-icon-01.svg" alt="">
                </a>
                <div class="dropdown-menu ">
                    <div class="noti-content">
                        <div>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="flag flag-lr me-2"></i>English</a>
                            <a class="dropdown-item" href="javascript:;"><i class="flag flag-in me-2"></i>Hindi</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item zoom-screen me-2">
                <a href="#" class="nav-link header-nav-list win-maximize">
                    <img src="assets/img/icons/header-icon-04.svg" alt="">
                </a>
            </li>

            <li class="nav-item dropdown has-arrow new-user-menus">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31"
                            alt="Soeng Souy">
                        <div class="user-text">
                            <h6>Nikhil Dhouni</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                                class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>Nikhil Dhouni</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="inbox.php">Inbox</a>
                    <a class="dropdown-item" href="index.php">Logout</a>
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
                    <li class="submenu">
                        <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="dashboard.php" >Admin Dashboard</a></li>
                        </ul>
                    </li>
<!-- enable department menu -->
                    <!-- <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="departments.php">Department List</a></li>
                            <li><a href="add-department.php">Department Add</a></li>
                            <li><a href="edit-department.php">Department Edit</a></li>
                        </ul>
                    </li> -->
<!-- enable course section -->
                    <!-- <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="courses.php">Course List</a></li>
                            <li><a href="add-course.php">Course Add</a></li>
                            <li><a href="edit-course.php">Course Edit</a></li>
                        </ul>
                    </li> -->
                    <li class="submenu">
                        <a href="#"><i class="fas fa-graduation-cap"></i> <span> Syllabus</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="syllabus.php">Syllabus List</a></li>
                            <li><a href="add-syllabus.php">Syllabus Add</a></li>
                            <li><a href="edit-syllabus.php">Syllabus Edit</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-graduation-cap"></i> <span>Previous Papers</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="pyq.php">PYQs List</a></li>
                            <li><a href="add-pyq.php">PYQs Add</a></li>
                            <li><a href="edit-pyq.php">PYQs Edit</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="blog.php">All Blogs</a></li>
                            <li><a href="add-blog.php">Add Blog</a></li>
                            <li><a href="edit-blog.php">Edit Blog</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa fa-pen"></i> <span>Carrer</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="carrer.php">All Carrer</a></li>
                            <li><a href="add-carrer.php">Add Carrer</a></li>
                            <li><a href="edit-carrer.php">Edit Carrer</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa fa-building"></i> <span>Sports Activity</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="sports-activity.php">All Sports Activity</a></li>
                            <li><a href="add-s-activity.php">Add Sports Activity</a></li>
                            <li><a href="edit-s-activity.php">Edit Sports Activity</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                    </li>
                    <li>
                        <a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam </span></a>
                    </li>
                    <li>
                        <a href="result.php"><i class="fas fa-bullhorn"></i> <span>Result</span></a>
                    </li>
                    <li>
                        <a href="admit-card.php"><i class="fas fa-book"></i><span>Admit Card</span></a>
                    </li>
<!-- time table section -->
                    <!-- <li class="active">
                        <a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                    </li> -->
                    <li>
                        <a href="contact.php"><i class="fas fa-table"></i> <span>Contact</span></a>
                    </li>
                    
                    <!-- enable settings for website -->
                    <!-- <li>
                        <a href="settings.php"><i class="fas fa-cog"></i> <span>Settings</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Time Table</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="time-table.php">Time Table</a></li>
<li class="breadcrumb-item active">Add Time Table</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Time Table</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Teacher Id <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Name <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Section <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Start Time <span class="login-danger">*</span></label>
<input type="time" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>End Time <span class="login-danger">*</span></label>
<input type="time" class="form-control">
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
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

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>