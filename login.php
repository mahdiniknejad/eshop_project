<?php

include_once 'common_php/database.php';
RegisterUser();
LoginUser();
ExitUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'common_html/header_link.php' ?>
</head>

<body>
<?php include_once 'common_html/header_nav.php' ?>

<div class="container">
    <section id="form"><!--form-->
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>ورود به حساب کاربـری :</h2>
                    <form method="post">
                        <?php
                        if(isset($_GET["login"]) && $_GET['login'] == 'false'){
	                        echo "<p style='color: red'>لطفا تمام بخش های ستاره دار را کامل کنید !</p>";
                        }
                        if(isset($_GET["login-user"]) && $_GET['login-user'] == 'false'){
	                        echo "<p style='color: red'>اطلاعات وارد شده صحیح نیست</p>";
                        }
                        ?>
                        <input name="login_username_email" type="text" placeholder="نام کاربری یا آدرس ایمیل"/>
                        <input name="login_password" type="password" placeholder="رمز عبور"/>
                        <span>
                                <input type="checkbox" class="checkbox">
								    مرا بخاطـر بسپـار
							</span>
                        <span>
								<a href="forget-password.html">رمـز عبـور خود را فراموش کرده ام</a>
							</span>
                        <button name="login_btn" type="submit" class="btn btn-default">ورود</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">یا</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>ثبت نام کاربـر جدیـد</h2>
                    <form method="post" enctype="multipart/form-data">
                        <?php
                        if(isset($_GET["input"]) && $_GET["input"] == 'false'){
                            echo "<p style='color: red'>لطفا تمام بخش های ستاره دار را کامل کنید !</p>";
                        }
                        if(isset($_GET["user"]) && $_GET['user'] == 'false'){
	                        echo "<p style='color: red'>نام کاربری یا آدرس ایمیل در سیستم موجود است</p>";
                        }
                        if(isset($_GET["password"]) && $_GET['password'] == 'false'){
	                        echo "<p style='color: red'>تکرار رمز عبور صحیح نیست</p>";
                        }
                        if(isset($_GET["register"]) && $_GET['register'] == 'true'){
	                        echo "<p style='color: green'>ثبت نام با موفقیت انجام شد لطفا وارد شوید</p>";
                        }
                        ?>
                        <input name="username" type="text" placeholder="* نام کاربـری"/>
                        <input name="email" type="email" placeholder="* آدرس ایمیـل"/>
                        <input name="password" type="password" placeholder="* رمـز عبـور"/>
                        <input name="repassword" type="password" placeholder="* تکرار رمـز عبـور"/>
                        <input name="number" type="text" placeholder="شماره تلفن"/>
                        <button name="register_btn" type="submit" class="btn btn-default">ثبت نام</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </section>
</div>
<!--/form-->


<?php include_once 'common_html/footer_temp.php' ?>
<?php include_once 'common_html/footer_link.php' ?>
</body>
</html>