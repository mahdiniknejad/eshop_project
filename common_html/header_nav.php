<header id="header"><!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> 80 21 24 36 98+ </a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->

	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">

				<div class="col-sm-4" style="text-align: left;">
					<div class="logo">
						<a href="index.html"><img src="images/home/logo.png" alt="Logo" style="text-align: center;" /></a>
					</div>
				</div>

				<div class="col-sm-8 header-middle-menu">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
						<?php
                            if(isset($_SESSION['user'])){
                            ?>
							    <li><a href="<?php echo '/projects/php-aban/Eshop_Template/login.php?exituser=true'?>" class="active"><i class="fa fa-lock"></i> خروج </a></li>
								<li><a href="#"><i class="fa fa-user"></i> حساب کاربـری</a></li>
								<li><a href="#"><i class="fa fa-star"></i> لیست علاقه مندی ها</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> سبد خریـد</a></li>
                            <?php } else { ?>
                                <li><a href="login.php" class="active"><i class="fa fa-lock"></i> ورود/ثبت نام</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">

				<div class="col-sm-3">
					<div class="search_box pull-left">
						<input type="text" placeholder="جستـجو"/>
					</div>
				</div>

				<div class="col-sm-9">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu pull-right">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="/projects/php-aban/Eshop_Template/index.php">خـانه</a></li>
							<li><a href="#" class="active">فروشگـاه</a>

							</li>
							<li class="dropdown"><a href="#">اخبـار<i class="fa fa-angle-down"></i></a>
								<ul role="menu" class="sub-menu">
									<li><a href="blog.html">آخریـن اخبـار</a></li>
									<li><a href="blog-single.html">صفحـه خبـر</a></li>
								</ul>
							</li>
							<li><a href="About.html">درباره مـا</a></li>
							<li><a href="contact-us.html">تماس با مـا</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->