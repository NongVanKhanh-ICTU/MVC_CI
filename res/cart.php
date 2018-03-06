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
	<!-- Xu Ly PHP -->
	<?php

		// $ngmua = $_SESSION["id_user"];
		// $sql = "SELECT * FROM cart WHERE id_user = '$ngmua'";
		// $query = mysqli_query($conn, $sql);
		// // Xoa San Pham Trong Gio Hang
		// if(isset($_GET["delete_course"])){
		// 	$sqlxoa = "DELETE FROM cart WHERE id_gh = ".$_GET["delete_course"];
		// 	mysqli_query($conn,$sqlxoa);
		// 	header('Location: my-cart.php');
		// }
		// if(isset($_GET["action"])){
		// 	if ($_GET["action"] == 'buy') {
		// 		$sql_buy = "";
		// 	} elseif ($_GET["action"] == 'cancel') {
		// 		$sql_cancel = "DELETE FROM cart WHERE id_user = '$ngmua'";
		// 		mysqli_query($conn,$sql_cancel);
		// 		header('Location: index.php');
		// 	}
		// }		
	?>
	<!-- End Xu Ly PHP -->
	<header>
		<?php include "includes/header.php" ?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<hr><h2>Giỏ hàng: <?php echo 2; ?> khoá học</h2><hr><hr>
				<div class="trai col-md-8">
					<div class="list-item">
						<?php 
						// while ($data = mysqli_fetch_array($query)) { 
						// 	$id_cs = $data["id_cs"];
						// 	$id_user = $data["id_user"];

						// 	//Check info user and course
						// 	$infouser = "SELECT * FROM user,course WHERE id_user = '$id_user' AND id_cs = '$id_cs'";
						// 	$checkinfo = mysqli_query($conn, $infouser);
						// 	while ($info = mysqli_fetch_array($checkinfo)) {
						// 		$money = $info['coin_user'];
							?>
						<table>
							<tr>
								<td>
									<div class="course-list">
										<div class="course-image col-md-4">
											<a href=""><img src="res/imgs/excel.png" alt="" width="100%"></a>
										</div>
										<div class="course-content col-md-7">
											<a href=""><h4 class="title"><?php echo 'ten_s'; ?></h4></a>
											<p class="author">Giảng viên: <b><?php echo "tc_cs"; ?></b></p>
											<h4 class="price"><?php echo "gia_cs"; ?>đ</h4>
										</div>
										<div class="course-action col-md-1">
											<a href="my-cart.php?delete_course=<?php echo "id_gh"; ?>" class="btn btn-default"><i class="fa fa-times"></i></a>
										</div>
									</div>
								</td>
							</tr>
						</table>
						<?php 
						// // Tinh Tien 
						// $sqltt = "SELECT gia_cs FROM course WHERE id_cs = '$id_cs'";
						// $query2 = mysqli_query($conn, $sqltt);
						// while ($gia = mysqli_fetch_array($query2)) {
						// 	$price += $gia['gia_cs'];
						// }
						// 	}
						// } 
						?>	
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