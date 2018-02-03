<?php
if (isset($_SESSION['id_user']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: ../login.php');
}else {
	if (isset($_SESSION['permission_user']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['permission_user'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($permission < 3) {
			// Nếu không phải admin thì xuất thông báo
			header('Location: ../index.php');
			}
	}
}
?>