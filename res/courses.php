<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='Học trực tuyến cùng với những Giảng viên hàng đầu. Học online 24/7 - Tự tin làm chủ tương lai. Siêu thị bài giảng trực tuyến lớn nhất Việt Nam' name='description'>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>res/imgs/icon.png">
	<title>Trang Hiển Thị Các Khoá Học - Edumall</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/css/webstyle.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/css/courses.css">
</head>
<body>
	<header>
		<?php include "includes/header.php" ?>
	</header>
	<main>
		<div class="container">
			<div class="row"><br><br>
				<h1>Khoá học của chúng tôi</h1>
				<hr>
				<div class="form locsp">
					<form action="courses.php" method="POST" role="form">
						<div class="form-group">
							<label for="">Lọc Sản Phẩm:</label>
							<div class="btn-group">
								<button type="button" class="btn btn-default">Tên</button>
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li class="divider"></li>
									<li><a href="courses.php?filter=AZ" name="az">A -&gt; Z<i class="glyphicon glyphicon-sort-by-alphabet"></i></a></li>
									<li><a href="courses.php?filter=ZA" name="az">Z -&gt; A<i class="glyphicon glyphicon-sort-by-alphabet-alt"></i></a></li>
									<li class="divider"></li>
								</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">Giá</button>
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li class="divider"></li>
									<li><a href="courses.php?filter=price-low">Thấp -&gt; Cao<i class="glyphicon glyphicon-sort-by-order"></i></a></li>
									<li><a href="courses.php?filter=price-high">Cao -&gt; Thấp<i class="glyphicon glyphicon-sort-by-order-alt"></i></a></li>
									<li class="divider"></li>
								</ul>
							</div>
							<a href="courses.php"><button type="button" class="btn btn-default">Huỷ Lọc<i class="glyphicon glyphicon-remove-sign"></i></button></a>
							<span class="badge pull-right">Chúng tôi có 8 Khoá Học</span>
						</div>
					</form>     
				</div>
				<div class="course col-md-9">
					<table>
							<tr>
								<?php 
								$i = 0;
								foreach($query_poster->result() as $row){ 
									if($i == 3){
										echo "</tr>";
										$i = 0;
									}
								?>
								<td class="col-md-4">
									<div class="thumbnail">
										<a href="display.php?id=<?php echo $row->id_cs; ?>">
											<img src="<?php echo base_url(); ?>res/imgs/<?php echo $row->thumb_cs; ?>" alt="">
										</a>
										<div class="caption">
											<a href="display.php?id=<?php echo $row->id_cs; ?>"><h3><?php echo $row->ten_cs; ?></h3></a>
											<p class="author">
												<?php echo $row->tc_cs; ?>
											</p>
											<p>
												<span class="gia"><?php echo $row->gia_cs; ?>đ</span>
											</p>
										</div>
									</div>
								</td>
								<?php $i++; } ?>
							</tr>
					</table>
					<hr>
					<div class="numpage" align="center">
						<ul class="pagination" style="box-shadow: -5px 5px 13px #27556d;">
							<?php echo $paginator; ?>
						</ul> 
					</div>
				</div>
				<div class="theloai col-md-3">
					<h4>Theo Thể Loại</h4>
					
					<ul class="nav nav-pills nav-stacked">
						<?php 
						foreach ($category as $key => $value) {
						?>
						<li>
							<a href="courses.php?category=<?php echo $value['key']; ?>">
								<span class="badge pull-right"><?php echo $value['count']; ?></span>
								<?php echo $value['name']; ?>
							</a>
						</li>
						<?php } ?>
					</ul><br>
					<h4>Theo Chính Sách</h4>
					<ul class="nav nav-pills nav-stacked">
						<li>
							<a href="courses.php?policy=mien-phi">
								<span class="badge pull-right"><?php echo $fee['free']; ?></span>
								Miễn Phí
							</a>
						</li>
						<li>
							<a href="courses.php?policy=tra-phi">
								<span class="badge pull-right"><?php echo $fee['fee']; ?></span>
								Trả Phí
							</a>
						</li>
					</ul>
					<h4>Theo Giảng Viên</h4>
					<ul class="nav nav-pills nav-stacked">
						<li>
							<a href="courses.php?teacher=Topica Uni">
								<span class="badge pull-right">0</span>
								Topica Uni
							</a>
						</li>
						<li>
							<a href="courses.php?teacher=Nguyễn Đức Việt">
								<span class="badge pull-right">0</span>
								Nguyễn Đức Việt
							</a>
						</li>
						<li>
							<a href="courses.php?teacher=Lê Thẩm Dương">
								<span class="badge pull-right">0</span>
								Lê Thẩm Dương
							</a>
						</li>
						<li>
							<a href="courses.php?teacher=Khác">
								<span class="badge pull-right">0</span>
								Khác
							</a>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<footer>
			<?php include "includes/footer.php" ?>

		</footer>
		<!-- Script -->
		<script src="../res/js/webjs.js"></script>
		<script src="../res/bs/js/jquery.js"></script>
		<script src="../res/bs/js/bootstrap.min.js"></script>
	</body>
	</html>