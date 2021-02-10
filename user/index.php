<?php

// if($_GET[''])


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        پنل کاربری
    </title>
    <?php include_once "./include/header_link.php" ?>
</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php include_once "./include/header.php" ?>

        <?php include_once "./include/side.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Page Header
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <?php include_once "./pages/add_product.php" ?>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <?php include_once "./include/footer.php" ?>

        <?php include_once "./include/footer_link.php" ?>

</body>

</html>