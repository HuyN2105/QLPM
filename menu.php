<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/html">
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

	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

	<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="./script.js"></script>
	
	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<meta property="og:image" content="./LogoLeLoi.jpg" />
	<title>Hệ Thống Quản Lý Phòng Máy</title>
	<style>
		html{
			overflow: hidden;
		}
		body{
			overflow: hidden;
		}
	</style>
</head>
<body>



	<a href="#header"><button id="toTop" title="Go to top"><img src="./image/up-arrow.png" alt="" style="width: 40px; height: 40px; margin-bottom: 17.5px;"></button></a>

	<!-- Header -->
	<?php require 'menuHeader.php';
	if (!isset($_SESSION['loggedin'])) {
		header('Location: https://quanlyphongmay.com.vn/');
		exit;
	}
	?>
	
	<div class="main">
		<div id="top">
			<!--This is a fake header
			-->
		</div>
		<table style="border-collapse: collapse;">
			<td>
				<td style="border-right: solid 1px gray; width:50vw">
					<div style="height: 100%">
						<div style="height: 30vh;"></div>
						<h1 class="section">ĐĂNG KÝ THỰC HÀNH</h1>
						<div style="height: 5vh;"></div>
						<div class="last" style="width: 100%;">
								<div>
									<a href="./DKTH.php">
										<button class="btn">
											<span>chọn</span>
											<svg preserveAspectRatio="none" viewBox="0 0 132 45">
												<g clip-path="url(#clip)" filter="url(#goo-big)">
													<circle class="top-left" cx="49.5" cy="-0.5" r="26.5" />
													<circle class="middle-bottom" cx="70.5" cy="40.5" r="26.5" />
													<circle class="top-right" cx="104" cy="6.5" r="27" />
													<circle class="right-bottom" cx="123.5" cy="36.5" r="26.5" />
													<circle class="left-bottom" cx="16.5" cy="28" r="30" />
												</g>
												<defs>
													<clipPath id="clip">
														<rect width="132" height="45" rx="7" />
													</clipPath>
												</defs>
											</svg>
										</button>
									</a>
								</div>
						</div>
						<div style="height: 40vh;"></div>
					</div>
				</td>
			</td>
			<td>
				<td style="width:50vw">
					<div style="height: 100%">
						<div style="height: 30vh;"></div>
						<h1 class="section">TÌNH TRẠNG MÁY</h1>
						<div style="height: 5vh;"></div>
						<div class="last" style="width: 100%;">
								<div>
									<a href="./ktm.php">
										<button class="btn">
											<span>chọn</span>
											<svg preserveAspectRatio="none" viewBox="0 0 132 45">
												<g clip-path="url(#clip)" filter="url(#goo-big)">
													<circle class="top-left" cx="49.5" cy="-0.5" r="26.5" />
													<circle class="middle-bottom" cx="70.5" cy="40.5" r="26.5" />
													<circle class="top-right" cx="104" cy="6.5" r="27" />
													<circle class="right-bottom" cx="123.5" cy="36.5" r="26.5" />
													<circle class="left-bottom" cx="16.5" cy="28" r="30" />
												</g>
												<defs>
													<clipPath id="clip">
														<rect width="132" height="45" rx="7" />
													</clipPath>
												</defs>
											</svg>
										</button>
									</a>
								</div>
						</div>
						<div style="height: 40vh;"></div>
					</div>
				</td>
			</td>
		</table>
	</div>

	

	<svg width="0" height="0">
		<defs>
			<filter id="goo" x="-50%" width="200%" y="-50%" height="200%" color-interpolation-filters="sRGB">
				<feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur" />
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" result="cm" />
			</filter>
			<filter id="goo-light" x="-50%" width="200%" y="-50%" height="200%" color-interpolation-filters="sRGB">
				<feGaussianBlur in="SourceGraphic" stdDeviation="1.25" result="blur" />
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" result="cm" />
			</filter>
			<filter id="goo-big" x="-50%" width="200%" y="-50%" height="200%" color-interpolation-filters="sRGB">
				<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" result="cm" />
			</filter>
		</defs>
	</svg>
</body>
</html>