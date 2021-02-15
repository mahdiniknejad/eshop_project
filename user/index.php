<?php

include_once "../common_php/database.php";
if (!isset($_SESSION['user']))
	header("location:/projects/php-aban/Eshop_Template/");
else if ($_SESSION['user_is_superuser'] == 0)
	header("location:/projects/php-aban/Eshop_Template/404.html");


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>
		پنل کاربری
	</title>
	<?php include_once "./include/header_link.php" ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
	
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
					پنل کاربری
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
					<li class="active">Here</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<?php
				if (isset($_GET['addProduct']))
					include_once "./pages/add_product.php";
				if (isset($_GET['showProduct']))
					include_once "./pages/show_product.php";
				?>

			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

		<?php include_once "./include/footer.php" ?>

		<?php include_once "./include/footer_link.php" ?>
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
</body>

</html>