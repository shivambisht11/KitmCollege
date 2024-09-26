<?php
include("config/db_connection.php");
if (isset($_POST["submit"])) {
    $contact_id = $_POST['contact_id'];
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_num = $_POST['contact_num'];
    $contact_sub = $_POST['contact_sub'];
    $contact_msg = $_POST['contact_msg'];

    $sql = "INSERT INTO contact_us(`contact_id`, `contact_name`, `contact_email`, `contact_num`, `contact_sub`, `contact_msg`, `created_at`) VALUES ('{$contact_id}','{$contact_name}','{$contact_email}','{$contact_num}','{$contact_sub}','{$contact_msg}',current_timestamp())";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script>alert("Thank Your Contacting Us.");</script>';
        echo '<script>window.location.assign("contact-us.php");</script>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert"> try again later!
    </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kitm - Contact us</title>
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
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>
                                "Connect with KITM College: Reach Out for Inquiries, Information, and Assistance!"</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>KITM<span>COLLEGE</span></h2>
                            <p>The best place for placement in India & Abroad/cruise ship's. The only one hotel management affiliated college in Khatima.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>KITM, Kanjabag Road, Khatima, Uttarakhand, India
                                <br>Landmark : Bypass Road
                            </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: +91-95681 10012</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: +91-8006997389</a>
                                <br> <a href="kitminfo.india@gmail.com" class="contact-icon">Email: kitminfo.india@gmail.com,
                                    admission@kitmcollege.com,
                                    office@kitmcollege.com</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.kitmcollege.com</a>
                                <br> <a href="#">Facebook: www.facebook/kitmcollege</a>
                                <br> <a href="#">Blog: www.kitmcollege.com/blogs</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <!--MAP SECTION START-->
    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.1101854412914!2d79.96566727401326!3d28.95445616939178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a050e16dddec75%3A0x6aa63690f13bec31!2sKITM%20Degree%20College!5e0!3m2!1sen!2sin!4v1708792684170!5m2!1sen!2sin" allowfullscreen=""></iframe>
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>Get In Touch</h2> <span class="footer-ser-re">Contact Us Form</span>
                    </div>
                    <!-- ENQUIRY FORM -->

                    <form id="contact_form" name="contact_form" method="Post">
                        <ul>
                            <input type="hidden" class="form-control" name="contact_id">
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="contact_name" placeholder="Name" required="">
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="contact_num" placeholder="Phone" required="">
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f3" value="" name="contact_sub" placeholder="Subject" required="">
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f4" value="" name="contact_email" placeholder="Email" required="">
                            </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="contact_msg" required=""></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT" name="submit">
                            </li>
                        </ul>
                    </form>
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