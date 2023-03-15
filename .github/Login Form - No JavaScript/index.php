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
	<title>Đăng Nhập</title>
	<script>
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
			document.getElementById("headerLine").style.fontSize = "30px";
			document.getElementById("header").style.height = "75px";
			document.getElementById("LOGO").style.height = "55px";
			document.getElementById("LOGO").style.width = "55px";
			document.getElementById("toTop").style.display = "block";
			} else {
				document.getElementById("headerLine").style.fontSize = "40px";
				document.getElementById("header").style.height = "125px";
				document.getElementById("LOGO").style.height = "100px";
				document.getElementById("LOGO").style.width = "100px";
				document.getElementById("toTop").style.display = "none";
			}
		}
	</script>
</head>
<body>
	<div class="center">
		<h1>Đăng Nhập</h1>
		<form method="post">
			<div class="txt_field">
				<input type="text" required>
				<span></span>
				<label>Tên đăng nhập</label>
			</div>
			<div class="txt_field">
				<input type="password" required>
				<span></span>
				<label>Mật khẩu</label>
			</div>
			<div class="pass">Quên mật khẩu?</div>
			<input type="submit" value="Đăng Nhập">
		</form>
	</div>

</body>
</html>
