<?php
include('config/db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Kitm - Blog</title>
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<?php
    include("config/header.php");
    ?>

    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Blog <span> Posts</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main pg-blog">

                                <ul>
                                    <?php
                                    $sql = "SELECT * FROM blog WHERE  status='1'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                    ?>
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <li>
                                                <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                                </div>
                                                <div class="pg-eve-desc pg-blog-desc">
                                                    <a href="event-register.php">
                                                        <h4><?php echo $row['blog_title'] ?></h4>
                                                    </a>
                                                    <img src="<?php echo $row['blog_image'] ?>" alt="image">
                                                    <div class="share-btn blog-share-btn">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p><?php echo $row['blog_description'] ?></p>
                                                    <span><?php echo $row['created_at'] ?></span>
                                                </div>
                                                <div class="pg-eve-reg pg-blog-reg">
                                                    <a href="blog-details.php">Read more</a>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    <?php
    include("config/footer.php");
    ?>


    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>