<?php

require 'conn.php';

session_start();

if ($stmt = $conn->prepare('SELECT `pass` FROM `LOGIN` WHERE `username` = ?')) {
	$stmt->bind_param('s', $_SESSION['user']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($pass);
		$stmt->fetch();
		if ($_POST['pass'] == $pass) {
			$sql = "UPDATE `LOGIN` SET `pass`= ? WHERE `username` = ?";

    		$stmt = mysqli_stmt_init($conn);

    		if (!mysqli_stmt_prepare($stmt, $sql)) {
        		die(mysqli_error($conn));
    		}
    		mysqli_stmt_bind_param($stmt, "ss", $_POST['Newpass'], $_SESSION['user']);

    		mysqli_stmt_execute($stmt);
			session_destroy();
    		echo "<script type='text/javascript'>alert('Đã đổi mật khẩu tài khoản ". $_SESSION['user'] ." thành ".$_POST['Newpass']."');
    		window.location.href = \"http://quanlyphongmay.com.vn/\";
			</script>";
		} else {
			echo "<script type='text/javascript'>alert('Sai mật khẩu!');
			window.history.go(-1);
			</script>" ;
		}
	} else {
		echo "<script type='text/javascript'>alert('Sai mật khẩu!');
		window.history.go(-1);
		</script>";
	}

	$stmt->close();
}
?>