<?php
session_start();
$connect = database();
if ($_SESSION['user_is_superuser'] == 1)
	$res = $connect->prepare("SELECT * FROM product");
else {
	$res = $connect->prepare("SELECT * FROM product WHERE owner_id=?");
	$res->bindValue(1, $_SESSION['user_id']);
}
$res->execute();
$row = $res->fetchAll(PDO::FETCH_OBJ);




?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if (!empty($rows)) { ?>
				<div class="card panel panel-primary">
					<div class="card-header panel-heading bg-primary">
						نمایش محصولات
					</div>
					<div class="card-body panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>شناسه</th>
									<th>عنوان</th>
									<th>قیمت</th>
									<th>عکس</th>
									<th>وضعیت</th>
									<th>نام کارگزار</th>
									<th>آیا فعال هست؟</th>
									<th>حذف</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($row as $value) { ?>
									<tr>
										<td><?php echo $value->id ?></td>
										<td><?php echo $value->title ?></td>
										<td><?php echo $value->price ?></td>
										<td><img src="./img/<?php echo $value->image ?>" width="100px"></td>
										<td>
											<?php
											if ($value->status == 1)
												echo "موجود";
											else if ($value->status == 2)
												echo "نا موجود";
											else if ($value->status == 3)
												echo "به زودی";
											?>
										</td>
										<td>
											<?php
											$res2 = $connect->prepare("SELECT username, flname FROM users WHERE id=?");
											$res2->bindValue(1, $value->owner_id);
											$res2->execute();
											$name = $res2->fetch(PDO::FETCH_ASSOC);
											if (empty($name['flname']))
												echo $name['username'];
											else
												echo $name['flname'];
											?>
										</td>
										<td>
											<?php
											if ($value->active == 1) {
												echo "<i class='fas fa-check-circle text-success'></i>";
											} else {
												echo "<i class='fas fa-times-circle text-danger'></i>";
											}
											?>
										</td>
										<td>
											<a href=<?php echo "./pages/delete_product.php?id=$value->id" ?> name="" class="text-danger">حذف</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			<?php } else { ?>
				<div class="alert alert-warning" style="width:90%;">
					<h3>محصولی برای نمایش وجود ندارد</h3>
				</div>
			<?php } ?>
		</div>
	</div>
</div>