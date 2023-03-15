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
	<link rel="stylesheet" href="style.css">
	<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="script.js"></script>
	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<meta property="og:image" content="./LogoLeLoi.jpg" />
	<title>Xuất file exel thống kê trong tuần</title>
</head>
<body>
	<?php
	session_start();
	if(!isset($_POST['phong'])){
		$_SESSION['requesting'] = true;
		header('Location: ttm-phong.php');
	}
	if (!isset($_SESSION['loggedin'])) {
		header('Location: https://quanlyphongmay.com.vn/');
		exit;
	}
	?>
	<div class="center" style="width: 500px;">
		<h1>Xuất File</h1>
		<form method="post" action="xuatExcelDKTH.php">
		<div class="txt_field-2" style="padding: 30px 0;">
				<label class="checkbox" style="width: 45%; display: inline-block; padding-left: 30px" title="Đăng ký thực hành">
					<input type="hidden" name="" value="dkth" ><input id="check" type="checkbox" onclick="if(this.previousSibling.name==''){ this.previousSibling.name='muc' }else{ this.previousSibling.name='' }" style="transform: translateY(7px); width: 24px; height: 24px ;display: inline-block"/>
					<svg viewBox="0 0 24 24" filter="url(#goo-light)"style="transform: translate(30px, 7px);width: 24px; height: 24px">
						<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
						<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
						<circle class="drop" cx="25" cy="-1" r="2" />
					</svg>
					<p style=" width:auto ;display: inline-block">ĐKTH</p>
				</label>
				<label class="checkbox" style="width: 45%; display: inline-block; padding-left: 30px" title="Tình trạng máy">
					<input type="hidden" name="" value="ttm"><input id="check" type="checkbox" onclick="if(this.previousSibling.name==''){ this.previousSibling.name='muc' }else{ this.previousSibling.name='' }" style="transform: translateY(7px);width: 24px; height: 24px ;display: inline-block"/>
					<svg viewBox="0 0 24 24" filter="url(#goo-light)"style="transform: translate(30px, 7px);width: 24px; height: 24px">
						<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
						<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
						<circle class="drop" cx="25" cy="-1" r="2" />
					</svg>
					<p style=" width:auto ;display: inline-block">TTM</p>
				</label>
			</div>
			<!-- SUBMIT BUTTON -->
			<div class="last" style="margin: 40px 0 30px 0;">
				<div>
					<button class="btn" value="Submit" id="btn-style" style="box-shadow:none">
						<span>Chọn</span>
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
				</div>
			</div>
		</form>
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

	<script>
	$('input[type="checkbox"]').on('change', function() {
   		$('input[type="checkbox"]').not(this).prop('checked', false);
   		$('input[type="checkbox"]').not(this).prev().prop('name', '');
	});
	</script>

</body>
</html>
