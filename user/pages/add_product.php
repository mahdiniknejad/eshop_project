<?php
session_start();
if (isset($_POST['add_product_btn'])) {
	if (
		isset($_POST['title']) &&
		isset($_FILES['image']) &&
		isset($_POST['price']) &&
		isset($_POST['status']) &&
		!empty($_POST['title']) &&
		!empty($_FILES['image']) &&
		!empty($_POST['price']) &&
		!empty($_POST['status'])
	) {

		$img_name = $_FILES['image']['name'];
		$tmp_name = $_FILES["image"]["tmp_name"];
		$img_name_2 = explode(".", $img_name);
		$corect_form = array('png', 'jpg', 'jpeg', 'svg', 'wsg');
		if (in_array(end($img_name_2), $corect_form)) {
			$img_name_3 = rand(999, 99999) . rand(777, 851456) . rand(14, 44775) . $img_name;			
			move_uploaded_file($tmp_name, "./img/".$img_name_3);
			$connect = database();
			$res = $connect->prepare('INSERT INTO product SET title=?, image=?, price=?, status=?, owner_id=?, active=?');

			$res->bindValue(1, $_POST['title']);
			$res->bindValue(2, $img_name_3);
			$res->bindValue(3, $_POST['price']);
			$res->bindValue(4, $_POST['status']);
			$res->bindValue(5, $_SESSION['user_id']);
			if ($_POST['active'] == "1")
				$active = 1;
			else
				$active = 0;
			$res->bindValue(6, $active);
			$res->execute();
			$sent = true;
		} else {
			$img_post_err = true;
		}
	} else {
		if (empty($_POST['title']))
			$title_err = true;
		if (empty($_FILES['image']['name']))
			$image_err = true;
		if (empty($_POST['price']))
			$price_err = true;
		if (empty($_POST['status']))
			$status_err = true;
	}
}

?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="card panel panel-primary">
				<div class="card-header panel-heading bg-primary">
					افزودن محصول جدید
				</div>
				
				<div class="card-body panel-body">
					<form method="POST" enctype="multipart/form-data">
						<?php if(isset($sent)) echo "<p class='text-success'> عملیات با موفقیت انجام شد</p>" ?>
						<?php if(isset($title_err) && $title_err === true) echo "<p class='text-danger'>* لطفا نام محصول را انتخواب کنید</p>" ?>
						<div class="form-group">
							<label for="title">نام محصول</label>
							<input type="text" class="form-control" id="title" name="title">
						</div>
						<?php if(isset($image_err)) echo "<p class='text-danger'>* لطفا عکس محصول را انتخواب کنید</p>" ?>
						<?php if(isset($img_post_err)) echo "<p class='text-danger'>* فرمت عکس انتخوابی صحیح نیست</p>" ?>
						<div class="form-group">
							<label for="image">ارسال عکس محصول</label>
							<input type="file" class="form-control-file" id="image" name="image">
						</div>
						<?php if(isset($price_err)) echo "<p class='text-danger'>* لطفا قیمت محصول را انتخواب کنید</p>" ?>
						<div class="form-group">
							<label for="price">قیمت محصول</label>
							<input type="text" class="form-control" id="price" name="price">
						</div>
						<div class="form-group">
							<label for="active">آیا محصول نمایش داده شود؟</label>
							<input type="checkbox" class="form-check-input" id="active" name="active" value="1">
						</div>
						<?php if(isset($status_err)) echo "<p class='text-danger'>* لطفا وضعیت محصول را انتخواب کنید</p>" ?>
						<div class="form-group">
							<label for="status">وضعیت :</label>
							<select class="form-control" id="status" name="status">
								<option value="1">موجود</option>
								<option value="2">ناموجود</option>
								<option value="3">به زودی</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary" name="add_product_btn">افزودن</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>