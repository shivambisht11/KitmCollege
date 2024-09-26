<?php
include("config/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kitm - Exam Schedule</title>
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
        <h2>Live Admission <span>KITM</span></h2>
    </div>

    <!-- Start section -->

    <?php
    $sql = "SELECT * FROM admission";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="list-container">
            <?php while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="list-item">
                    <span class="list-item-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style=" height: 2.2rem;
                margin: 4px 10px 2px 11px;">
                            <path fill="red" d="M64 464l48 0 0 48-48 0c-35.3 0-64-28.7-64-64L0 64C0 28.7 28.7 0 64 0L229.5 0c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3L384 304l-48 0 0-144-80 0c-17.7 0-32-14.3-32-32l0-80L64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
                        </svg>
                    </span>
                    <a href="admin/<?php echo $row['a_link'] ?>" target="_blank" class="list-item-text"><?php echo $row['a_name'] ?></a> </span>
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