<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản lý tài khoản</title>
	<link rel="stylesheet" href="res/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="res/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="res/css/webstyle.css">
	<link rel="stylesheet" href="res/css/account.css">
</head>
<body>
	<header>
		<?php include "includes/header.php" ?>
	</header>
	<main>
		<br>
		<section class="profile">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#info">Thông tin cá nhân</a></li>
				<li><a data-toggle="tab" href="#security">Bảo mật</a></li>
				<li><a data-toggle="tab" href="#mycourse">Khóa học của tôi</a></li>
			</ul>
			<?php 
				foreach ($data as $row) {
			?>
			<div class="tab-content container">
				<div id="info" class="tab-pane fade in active">
					<div class="row">
						<div class="col-md-4 avatar" align="center">
							<img src="res/imgs/<?php echo $row['avatar_user']; ?>" alt="">
							<br>
							<input type="file" accept=".png, .jpg, .jpeg" name="image" class="form-control" style="width: 80%;">
						</div>
						<form action="" method="POST" role="form" enctype="multipart/form-data">
							<div class="col-md-8">
								<legend>Thông tin cơ bản</legend>
								<div class="form-group">
									<label for="">Họ tên đầy đủ:</label>
									<input type="text" class="form-control" name="name_user" id="" value="<?php echo $row['name_user']; ?>">
									<br>
									<label for="">Nghề nghiệp:</label>
									<input type="text" class="form-control" name="job_user" id="" value="<?php echo $row['job_user']; ?>">
									<br>
									<label for="">Giới thiệu bản thân:</label>
									<textarea name="about_user" id="" class="form-control" rows="3"><?php echo $row['about_user']; ?></textarea>
								</div>
								<button type="submit" name="changeinfo" value="changeinfo" class="btn btn-danger" style="float: right;">Lưu thay đổi</button>
								<a href="auth/logout"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn thực sự muốn đăng xuất?')">ĐĂNG XUẤT</button></a>
							</div>
						</form>
					</div>
				</div>
				<div id="security" class="tab-pane fade">
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<form action="" method="POST" role="form">
								<legend>Kích hoạt Email và đổi mật khẩu</legend>
								<div class="form-group">
									<label for="">Email: </label>
									<input type="text" class="form-control" id="" value="<?php echo $row['email_user']; ?>" disabled>
									<br>
									<ul class="error"><?php echo validation_errors('- '); ?></ul>
									<label for="">Mật khẩu hiện tại: </label>
									<input type="password" class="form-control" name="oldpass" id="" placeholder="**********">
									<br>
									<label for="">Mật khẩu mới: </label>
									<input type="password" class="form-control" name="newpass" id="" placeholder="**********">
								</div>
								<a href='#' target='_blank' class='btn btn-default'>Kích hoạt Email</a>
								<button type="submit" name="changepass" value="changepass" class="btn btn-primary" style="float: right;">Lưu thay đổi</button>
							</form>
						</div>
					</div>
				</div>
				<?php } ?>
				<div id="mycourse" class="tab-pane fade">
					<div class="row">
						<div class="col-md-4">
							<a href="" class="thumbnail">
								<img src="imgs/excel.png" alt="">
								<h5>Phân tích dữ liệu tài chính kế toán bằng Microsoft Excel</h5>
								<label class="author">Nguyễn Danh Tú</label>
							</a>
						</div>
						<div class="col-md-4">
							<a href="" class="thumbnail">
								<img src="imgs/excel.png" alt="">
								<h5>Phân tích dữ liệu tài chính kế toán bằng Microsoft Excel</h5>
								<label class="author">Nguyễn Danh Tú</label>
							</a>
						</div>
						<div class="col-md-4">
							<a href="" class="thumbnail">
								<img src="imgs/excel.png" alt="">
								<h5>Phân tích dữ liệu tài chính kế toán bằng Microsoft Excel</h5>
								<label class="author">Nguyễn Danh Tú</label>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<a href="" class="thumbnail">
								<img src="imgs/excel.png" alt="">
								<h5>Phân tích dữ liệu tài chính kế toán bằng Microsoft Excel</h5>
								<label class="author">Nguyễn Danh Tú</label>
							</a>
						</div>
						<div class="col-md-4">
							<a href="" class="thumbnail">
								<img src="imgs/excel.png" alt="">
								<h5>Phân tích dữ liệu tài chính kế toán bằng Microsoft Excel</h5>
								<label class="author">Nguyễn Danh Tú</label>
							</a>
						</div>
						<div class="col-md-4">
							<a href="" class="thumbnail">
								<img src="imgs/excel.png" alt="">
								<h5>Phân tích dữ liệu tài chính kế toán bằng Microsoft Excel</h5>
								<label class="author">Nguyễn Danh Tú</label>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<?php include "includes/footer.php" ?>
	</footer>
	<script src="res/js/myjs.js" type="text/javascript"></script>
	<script src="res/bs/js/jquery.js" type="text/javascript"></script>
	<script src="res/bs/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>