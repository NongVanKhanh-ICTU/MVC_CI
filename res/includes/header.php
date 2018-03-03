<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="res/imgs/logo.png" alt="LOGO"></a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
			<div class="navbar-form navbar-left">
				<form action="<?php echo base_url('courses/search'); ?>" method="GET" role="search">
					<div class="form-group">
						<input type="text" class="form-control search" placeholder="Search" name="keyword">
					</div>
					<button type="submit" class="btn btn-default" name="search" value="search"><i class="glyphicon glyphicon-search"></i></button>
					<a href="<?php echo base_url('courses'); ?>"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-briefcase"></i>Tất Cả Khoá Học</button></a>
					<a href="my-cart.php">
						<button type="button" class="btn btn-default">
							<i class="glyphicon glyphicon-shopping-cart"></i>Giỏ Hàng ()
						</button>
					</a>
				</form>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="account">
					<a href="auth"><i class="fa fa-user-circle-o"></i>Tài Khoản</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br><br>