<?php

require 'conn.php';

session_start();
header('Content-type: text/html; charset=utf-8');

if ($stmt = $conn->prepare('SELECT `id`, `pass`, `name`, `pow` FROM `LOGIN` WHERE `username` = ?')) {
	$stmt->bind_param('s', $_POST['user']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $pass, $name, $pow);
		$stmt->fetch();
		if ($_POST['pass'] == $pass) {
			session_regenerate_id();
			$_SESSION['user'] = $_POST['user'];
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $name;
			$_SESSION['id'] = $id;
			$_SESSION['pow'] = $pow;
			echo "<script type='text/javascript'>window.location.href = \"https://quanlyphongmay.com.vn/menu.php\";</script>";
		} else {
			echo "<script type='text/javascript'>alert('Sai tên đăng nhập hoặc ( và ) mật khẩu!');
			window.history.go(-1);
			</script>" ;
		}
	} else {
		echo "<script type='text/javascript'>alert('Sai tên đăng nhập hoặc ( và ) mật khẩu!');
		window.history.go(-1);
		</script>";
	}

	$stmt->close();
}
?>