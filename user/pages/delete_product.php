<?php
session_start();
include_once "../../common_php/database.php";
$connect = database();
$res = $connect->prepare("SELECT owner_id FROM product WHERE id=?");
$res->bindValue(1, $_GET['id']);
$res->execute();
$product = $res->fetch(PDO::FETCH_ASSOC);

if($product['owner_id'] == $_SESSION['user_id'] || $_SESSION['user_is_superuser'] == 1){
    $active = true;
}



if(isset($_POST['confirm']) && isset($active)){
    $res2 = $connect->prepare("DELETE FROM product WHERE id=?");
    $res2->bindValue(1, $_GET['id']);
    $res2->execute();
    header("location:/projects/php-aban/Eshop_Template/user/?showProduct=1");
}


?>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
            <?php if(isset($active)){ ?>
            <form method="POST">
            <p>آیا با حذف این محصول مطمين هستید؟</p>
            <button name="confirm">بله</button>
            </form>
            <?php } else {?>
                <h2 class="text-danger">شما به حذف این محصول دست رسی ندارید !</h2>
            <?php }?>
		</div>
	</div>
</div>