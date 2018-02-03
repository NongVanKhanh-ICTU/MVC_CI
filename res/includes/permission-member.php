<?php
if (isset($_SESSION['id_user']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: login.php');
}else {
	if (isset($_SESSION['permission_user']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['permission_user'];
		// Kiểm tra quyền của người đó có phải là member hay không
		if ($permission < 0) {
			// Nếu không phải member thì xuất thông báo
			echo "<div class='alert alert-danger'><strong>Warning!</strong> Bạn không đủ quyền truy cập vào trang này!<a href='index.php'> Click để trở về Trang Chủ</a></div>";
			exit();
		}
	}
}
?>