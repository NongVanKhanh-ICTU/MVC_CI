<!DOCTYPE html>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='Học trực tuyến cùng với những Giảng viên hàng đầu. Học online 24/7 - Tự tin làm chủ tương lai. Siêu thị bài giảng trực tuyến lớn nhất Việt Nam' name='description'>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('res/'); ?>imgs/icon.png">
	<title>Giỏ hàng - Edumall</title>
	<link rel="stylesheet" href="<?php echo base_url('res/'); ?>bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('res/'); ?>awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('res/'); ?>css/webstyle.css">
	<link rel="stylesheet" href="<?php echo base_url('res/'); ?>css/cart.css">
</head>
<body>
	<header>
		<?php include "includes/header.php" ?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<hr><h2>Giỏ hàng: <?php echo $count; ?> khoá học</h2><hr><hr>
				<div class="trai col-md-8">
					<div class="list-item">
						<table>
							<tr>
								<td>
									<div class="course-list">
										<div class="course-image col-md-4">
											<a href=""><img src="res/imgs/excel.png" alt="" width="100%"></a>
										</div>
										<div class="course-content col-md-7">
											<a href=""><h4 class="title"></h4></a>
											<p class="author">Giảng viên: <b></b></p>
											<h4 class="price">đ</h4>
										</div>
										<div class="course-action col-md-1">
											<a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="phai col-md-4">
					<h3>Hoá đơn của bạn</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Tiền của bạn: </th>
								<th>1212đ</th>
							</tr>
							<tr>
								<th>Tổng tiền: </th>
								<th>121212đ</th>
							</tr>
							<tr>
								<th>Số tiền còn lại: </th>
								<th>31231đ</th>
							</tr>
						</thead>
					</table>
					<a href="my-cart.php?action=buy" class="btn btn-danger">Mua Khoá Học</a><br><br>
					<a href="my-cart.php?action=cancel" class="btn btn-warning">Huỷ Hoá Đơn</a>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<?php include "includes/footer.php" ?>
	</footer>
	<!-- Script -->
	<script src="js/webjs.js"></script>
	<script src="bs/js/jquery.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
</body>
</html>