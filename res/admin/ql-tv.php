<!DOCTYPE html>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='Học trực tuyến cùng với những Giảng viên hàng đầu. Học online 24/7 - Tự tin làm chủ tương lai. Siêu thị bài giảng trực tuyến lớn nhất Việt Nam' name='description'>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('res/') ?>imgs/icon.png">
	<title>Trang Quản Lý Thành Viên Của Admin - Edumall</title>
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>css/webstyle.css">
	<link rel="stylesheet" href="<?php echo base_url('res/') ?>css/admin-qltv.css">
</head>
<body>
	<header>
		<?php include "res/includes/header.php" ?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<h2>Trang Quản Lý Thành Viên Của Admin</h2><hr>
				<div class="trai col-md-10">
					<div class="list">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Tên</th>
									<th>Thư điện tử</th>
									<th>Công việc</th>
									<th>Giới thiệu</th>
									<th>Số Coin</th>
									<th>Quyền</th>
									<th>Tool</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 0;
									foreach ($result as $key => $value) {
										$i++;
								 ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $value['name_user']; ?></td>
									<td><?php echo $value['email_user']; ?></td>
									<td><?php echo $value['job_user']; ?></td>
									<td><?php echo $value['about_user']; ?></td>
									<td><?php echo $value['coin_user']; ?></td>
									<td>
									<?php 
										if($value["permission_user"] == 1){
											echo "Member";
										}
										elseif ($value["permission_user"] == 2) {
											echo "Teacher";
										}
										elseif ($value["permission_user"] == 3) {
											echo "Admin";
										}
										else{
											echo "Non-Active";
										}
									 ?>
									</td>
									<td>
										<a href="<?php echo base_url('admin_panel/edit').'?user='.$value['id_user']; ?>">Sửa</a>
										<label for="">|</label>
										<a href="<?php echo base_url('admin_panel/qltv').'?delete='.$value['id_user']; ?>" onclick="return confirm('Bạn thực sự muốn xóa thành viên này?')">Xoá</a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<br>
					<div class="add">
						<form action="" method="POST" role="form">
							<legend>Thêm thành viên</legend>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Họ và tên" required="">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Tài khoản" required="">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass" placeholder="Mật khẩu" required="" minlength="6">
								</div>
								<button type="submit" name="add_user" value="add" class="btn btn-primary">Thêm</button>	
							</div>
						</form>
					</div>
				</div>
				<div class="phai col-md-2">
					<?php include "res/includes/more-tool-admin.php" ?>
				</div>
			</div>
		</div>
		
	</main>
	<footer>
		<?php include "res/includes/footer.php" ?>
	</footer>
	<!-- Script -->
	<script src="<?php echo base_url('res/') ?>js/webjs.js"></script>
	<script src="<?php echo base_url('res/') ?>bs/js/jquery.js"></script>
	<script src="<?php echo base_url('res/') ?>bs/js/bootstrap.min.js"></script>
</body>
</html>