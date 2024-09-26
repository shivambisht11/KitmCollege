<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kitm - Blog</title>

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
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">

                        <div class="blog-view">
                            <div class="blog-single-post">
                                <a href="blog.php" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
                                <div class="blog-image">
                                    <a href="javascript:void(0);"><img alt="" src="assets/img/category/blog-detail.jpg" class="img-fluid"></a>
                                </div>
                                <h3 class="blog-title">Contrary to popular belief, Lorem Ipsum is not simply random text</h3>
                                <div class="blog-info">
                                    <div class="post-list">
                                        <ul>
                                            <li>
                                                <div class="post-author">
                                                    <a href="profile.php"><img src="assets/img/profiles/avatar-14.jpg" alt="Post Author"> <span>by Prof. Lester </span></a>
                                                </div>
                                            </li>
                                            <li><i class="feather-clock"></i> Dec 6, 2017</li>
                                            <li><i class="feather-message-square"></i> 40 Comments</li>
                                            <li><i class="feather-grid"></i> Set Theory, Mathematician</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                </div>
                            </div>

                            <div class="card author-widget clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">About Author</h4>
                                </div>
                                <div class="card-body">
                                    <div class="about-author">
                                        <div class="about-author-img">
                                            <div class="author-img-wrap">
                                                <a href="profile.php"><img class="img-fluid" alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <a href="profile.php" class="blog-author-name">Prof. Darren Elder <span>Biologist, Male, 40 Years Old</span></a>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card blog-comments">
                                <div class="card-header">
                                    <h4 class="card-title">Comments (5)</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <ul class="comments-list">
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/profiles/avatar-13.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-by">
                                                        <h5 class="blog-author-name">Michelle Fairfax <span class="blog-date"> <i class="feather-clock me-1"></i>Dec 6, 2017</span></h5>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fa fa-reply me-2"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="comments-list reply">
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img class="avatar" alt="" src="assets/img/profiles/avatar-06.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-by">
                                                                <h5 class="blog-author-name">Gina Moore <span class="blog-date"> <i class="feather-clock me-1"></i> 6 Dec 2022</span></h5>
                                                            </div>
                                                            <p>gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur</p>
                                                            <a class="comment-btn" href="#">
                                                                <i class="fa fa-reply me-2"></i> Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img class="avatar" alt="" src="assets/img/profiles/avatar-05.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-by">
                                                                <h5 class="blog-author-name">Carl Kelly <span class="blog-date"> <i class="feather-clock me-1"></i> 7 Dec 2022</span></h5>
                                                            </div>
                                                            <p> pellentesque urna varius vitae, gravida pellentesque urna consectetur adipiscing elit. Nam viverra euismod.</p>
                                                            <a class="comment-btn" href="#">
                                                                <i class="fa fa-reply me-2"></i> Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/profiles/avatar-09.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-by">
                                                        <h5 class="blog-author-name">Elsie Gilley <span class="blog-date"> <i class="feather-clock me-1"></i> 7 Dec 2022</span></h5>
                                                    </div>
                                                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fa fa-reply me-2"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/profiles/avatar-11.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-by">
                                                        <h5 class="blog-author-name">Joan Gardner <span class="blog-date"> <i class="feather-clock me-1"></i> 12 Dec 2022</span></h5>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fa fa-reply me-2"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="card new-comment clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Leave Comment</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Enter your name">
                                            <label for="floatingInput">Name<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Your Email address<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control bg-grey" placeholder="Comments"></textarea>
                                        </div>
                                        <div class="submit-section">
                                            <button class="submit-btn btn-primary btn-blog" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card blog-share clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Share the post</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="social-share">
                                        <li><a href="#"><i class="feather-twitter"></i></a></li>
                                        <li><a href="#"><i class="feather-facebook"></i></a></li>
                                        <li><a href="#"><i class="feather-linkedin"></i></a></li>
                                        <li><a href="#"><i class="feather-instagram"></i></a></li>
                                        <li><a href="#"><i class="feather-youtube"></i></a></li>
                                    </ul>
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

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>