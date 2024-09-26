<?php
include('config/db_connection.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>KITM - Syllabus</title>
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
        table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        th,
        td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
            text-align: center;
        }

        td a {
            color: white;
        }

        td a:hover {
            color: white;
        }

        thead {
            background-color: #f8f9fa;
        }

        thead tr th {
            font-weight: bold;
            letter-spacing: 1px;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
<?php
    include("config/header.php");
    ?>

    <!--main- Section -->
    <div class="container mt-3 com-sp-20">
        <div class="row">
            <div class="con-title" style="margin-top: 13px;">
                <h2>Syllabus <span>&</span> PYQs</h2>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Course</th>
                    <th>Syllabus</th>
                    <th>PYQs</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM syllabus WHERE status='1'";
                $result = mysqli_query($conn, $select);
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {

                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['syll_name']; ?></td>
                        <td><button class="btn btn-primary"><a href="admin/<?php echo $row['syll_file']; ?>">Download</a></button></td>
                        <td><button class="btn btn-warning"><a href="<?php echo $row['pyq_link']; ?>">View</a></button></td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>

    <?php
    include("config/footer.php");
    ?>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/script.js"></script>

</body>

</html>