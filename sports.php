<?php
include('config/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kitm - Sports Activities</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .text {
            flex: 1;
        }

        .title {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .title h1 {
            display: inline-block;
            position: relative;
        }

        .title h1::after {
            content: "";
            display: block;
            width: 100%;
            height: 2px;
            background-color: rgb(253, 126, 20);
            position: absolute;
            bottom: -8px;

        }

        .image {
            max-width: 120px;
            height: 120px;
        }

        .col {
            height: 59px;
            padding-top: 1px;
            color: azure;
            background-color: #002147;
        }

        .row-align-items-center {

            height: auto;


        }

        .image1 {
            border-bottom-right-radius: 5px;
            height: auto;
            width: 100%;

        }

        .cor-p1 {
            border-bottom: 1px solid #d2d2d2;
            padding-bottom: 20px;
            margin-bottom: 40px;
            margin-top: 40px;
        }
    </style>
</head>

<?php
include("config/header.php");
?>

<!---START SPORTS ACTIVITY-->
<section>

    <div class="container">
        <div class="con-title">
            <h2>Recent <span>Sports Activity</span></h2>
        </div>
        <?php
        $sql = "SELECT * FROM sports_activity WHERE status='1' LIMIT 1 ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <?php while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="row-align-items-center">
                    <div class="col-md-6">
                        <img src="admin/uploads/sports/<?php echo $row['s_image'] ?>" alt="Image" class="image1">
                    </div>
                    <div class="col-md-6">
                        <p> <?php echo $row['created_at'] ?></p>
                        <h4> <?php echo $row['s_title'] ?></h4>
                        <p> <?php echo $row['s_description'] ?></p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <br><br>

    <div class="con-title">
        <h2>Other <span>Sports Activity</span></h2>
    </div>
    <div class="container">
        <?php
        $sql = "SELECT * FROM sports_activity WHERE status='1' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <?php while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="row-align-items-center">
                    <div class="col-md-12">
                        <img src="admin/uploads/sports/<?php echo $row['s_image'] ?>" alt="Image" class="image1">
                        <div class="col-md-12">
                            <p><?php echo $row['created_at'] ?></p>
                            <h4><?php echo $row['s_title'] ?></h4>
                            <p><?php echo $row['s_description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <hr><br>

    </div>

    <br><br>
</section>

<!-- FOOTER -->
<?php
include("config/footer.php");
?>

<script src="js/main.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/custom.js"></script>
</body>