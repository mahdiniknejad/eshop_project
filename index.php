<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'common_html/header_link.php' ?>
</head>

<body>
<?php include_once 'common_html/header_nav.php' ?>

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                    </ol>

                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>SHOP</span>CENTER</h1>
                                <h2>Shop Center</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>SHOP</span>CENTER</h1>
                                <h2>Shop Center</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">

            <div class="recommended_items"><!--NewProduct_items-->
                    <h2 class="title text-center">پر فروش ترین محصولات</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>
                    </div>
                </div><!--/NewProduct_items-->

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--RetailSale_items-->
                    <a href="shop-2.html"><h2 class="title text-center">فـروش خـرده</h2></a>
                    <div id="new-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product.jpg" alt="" />
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>2.500.000 R</h2>
                                                <p>توضیحات کوتاه محصـول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product.jpg" alt="" />
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>2.500.000 R</h2>
                                                <p>توضیحات کوتاه محصـول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product.jpg" alt="" />
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>2.500.000 R</h2>
                                                <p>توضیحات کوتاه محصـول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product.jpg" alt="" />
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>2.500.000 R</h2>
                                                <p>توضیحات کوتاه محصـول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                        <a class="left recommended-item-control" href="#new-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#new-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>
                </div>
                </div><!--RetailSale_items-->

                <div class="features_items"><!--WholeSale_items-->
                    <a href="shop.html"><h2 class="title text-center">فـروش عـمده</h2></a>
                    <div id="major-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="item active">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/product.jpg" alt="" />
                                        <h2>2.500.000 R</h2>
                                        <p>توضیحات کوتاه محصـول</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>2.500.000 R</h2>
                                            <p>توضیحات کوتاه محصـول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square"></i>لیست علاقه مندی ها
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>مقایسه</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                        <a class="left recommended-item-control" href="#major-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#major-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>
                </div>
                </div><!--WholeSale_items-->

                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Tab_001" data-toggle="tab">گـروه محصولات 1</a></li>
                            <li><a href="#Tab_002" data-toggle="tab">گـروه محصولات 2</a></li>
                            <li><a href="#Tab_003" data-toggle="tab">گـروه محصولات 3</a></li>
                            <li><a href="#Tab_004" data-toggle="tab">گـروه محصولات 4</a></li>
                            <li><a href="#Tab_005" data-toggle="tab">گـروه محصولات 5</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="Tab_001" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Tab_002" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Tab_003" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Tab_004" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Tab_005" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/Tabs.png" alt="" />
                                            <h2>560.000 ريال</h2>
                                            <p>توضیحات کوتاه محصول</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/category-tab-->

            </div>

        </div>
    </div>
</section>

<?php include_once 'common_html/footer_temp.php' ?>
<?php include_once 'common_html/footer_link.php' ?>
</body>
</html>