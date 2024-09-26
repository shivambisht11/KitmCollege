<?php
include("config/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kitm - Exam Form</title>
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
    <style>
        .list-container {
            background: rgb(243, 241, 236);
            max-width: 720px;
            margin: 20px auto;
            border: 2px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }

        .list-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .list-item:last-child {
            border-bottom: none;
        }

        .list-item-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .list-item-date {

            margin-right: 10px;
        }

        .list-item-text {
            font-weight: bold;
            flex: 1;
        }

        @media(max-width: 768px) {

            .list-item-date {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>
<?php
    include("config/header.php");
    ?>


    <div class="con-title">
        <h2>Exam <span> Form</span></h2>
    </div>
    <!-- Start section -->
    <?php
    $sql = "SELECT * FROM exam_form WHERE form_type='2' && status='1'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="list-container">
            <?php while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="list-item">
                    <span class="list-item-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style=" height: 2.2rem;
                margin: 4px 10px 2px 11px;">
                            <path fill="red" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
                        </svg></span>
                    <a href="<?php echo $row['exam_url'] ?>" target="_blank" class="list-item-text"><?php echo $row['exam_name'] ?></a> </span>
                    <span class="list-item-date"><?php echo $row['created_at'] ?></span>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <!-- End section -->
    <br><br>


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