<!DOCTYPE html>
<html lang="vi">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6Y4P6ZJ1B"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-Y6Y4P6ZJ1B');
	</script>
	<link rel="shortcut icon" type="image/x-icon" href="./image/favicon.ico" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="DN-style.css">
	<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="script.js"></script>
	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<meta property="og:image" content="./LogoLeLoi.jpg" />
	<title>Đổi Mật Khẩu</title>
</head>
<body>
	<?php
	session_start();
	if (!isset($_SESSION['loggedin'])) {
		header('Location: https://quanlyphongmay.com.vn/');
		exit;
	}
	?>

	<div class="center">
		<h1>Đổi Mật Khẩu</h1>
		<form method="post" action="TDMK.php">
			<div class="txt_field">
				<input type="text" name="pass" required>
				<span></span>
				<label>Mật khẩu</label>
			</div>
			<div class="txt_field">
				<input type="password" name="Newpass" id="password" required>
				<span></span>
				<label>Mật khẩu mới</label>
			</div>
			<div class="txt_field" id="txt_field-verify">
				<input type="password" id="password_confirm" oninput="check(this)" required>
				<span id="checkPass"></span>
				<label>Xác nhận mật khẩu mới</label>
			</div>
			<div class="pass" style="width: 45%; display: inline-block; float: left;"><a href="./menu.php">Hủy</a></div>
			<script language='javascript' type='text/javascript'>
				function check(input) {
					var styleElem = document.head.appendChild(document.createElement("style"));
					if (input.value != document.getElementById('password').value) {
						input.setCustomValidity('');
						styleElem.innerHTML = "#txt_field-verify span::before {background: #fa6c6c;}";
						document.getElementById("Submit").disabled = true;
					} else {
						input.setCustomValidity('');
						styleElem.innerHTML = "#txt_field-verify span::before {background: #33e46d;}";
						document.getElementById("Submit").disabled = false;
					}
				}
			</script>
			<input type="submit" value="Gửi" id="Submit">
		</form>
	</div>

</body>
</html>
