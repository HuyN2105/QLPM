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
	
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/8bbca057b6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	
	<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<meta property="og:image" content="./LogoLeLoi.jpg" />
	<title>Tình Trạng Máy</title>
</head>
<body>
	<?php
	require 'conn.php';

	session_start();

	$_SESSION['phong'] = $_POST['phong'];

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if (!isset($_SESSION['loggedin'])) {
		header('Location: https://quanlyphongmay.com.vn/');
		exit;
	}
	if (!isset($_POST['phong'])) {
		header('Location: ttm-phong.php');
		exit;
	}
	?>
	<a href="#top"><button id="toTop" title="Go to top"><img src="./image/up-arrow.png" alt="" style="width: 40px; height: 40px; margin-bottom: 17.5px;"></button></a>
	
	<!-- Header -->
	<?php require 'menuHeader.php'; ?>

	<div id="top" style="height: 0px; background-color: #fff"></div>
	<div style="height: 100vh;" id="KTM">
		<div style="height: 75px;"></div>
		<form action="ktm-send.php" method="POST" id="ktm-send">
			<table style="width: 100vw">
				<caption>
					<h1 class="section">TÌNH TRẠNG MÁY</h1>
					<div style="height: 100px;"></div>
					<div>
						<table>
							<tr>
								<td style="width: 20vw; vertical-align: middle; text-align: center; border-right: solid 1px gray;">
									<img src="./image/calendar.png" alt="" >
									<br>
									<div class="ok-container">
										<div class="input-field-dk">
											<input type="date"  style="width: 125px; transform: translateX(-50px);" id="ngay" name="ngay" value=<?php echo '"' . date('Y-m-d') . '"'; ?> min=<?php echo "'". date("Y-m-d") . "'" ?>>
										</div>
									</div>
								</td>
								<td style="width: 0; vertical-align: middle; text-align: center; border-right: solid 1px gray; display: none">
									<div class="ok-container">
										<div class="input-field-dk">
											<input type="number"  name="phong" <?php echo "value=\"".$_POST['phong']."\"" ?>>
										</div>
									</div>
								</td>
								<td style="width: 20vw; vertical-align: middle; text-align: center; border-right: solid 1px gray">
									<img src="./image/stopwatch.png" alt="" >
									<br>
									<div class="ok-container">
										<div class="input-field-dk">
											<input type="text"  style="width: 50px; transform: translateX(-20px);" min="1" max="2" id="buoi" name="buoi" required>
											<label>Buổi</label>
										</div>
									</div>
								</td>
								<td style="width: 20vw; vertical-align: middle; text-align: center;">
									<img src="./image/room-door.png" alt="" >
									<br>
									<div class="ok-container">
										<div class="input-field-dk">
											<input type="number"  style="width: 50px; transform: translateX(-22.5px);" min="1" max="5" id="tiet" name="tiet" required>
											<label>Tiết</label>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</caption>
				<tr><td style="height: 75px;">​</td></tr>
				<tr style="width: 100%; display: flex; justify-content: center">
					<td style="padding-left:1vw; padding-right: 1vw">
						<table style="border-collapse: collapse;">
							<tr style="border-bottom: solid 1px rgba(128, 128, 128, 0.685); ">
									<td><img src="./image/computer.png" alt="" style="height: 40px; width: 40px;" class="computer"> </td>
									<td><img src="./image/mouse.png" alt="" style="height: 40px; width: 40px;" class="mouse"></td>
									<td><img src="./image/keyboard.png" alt="" style="height: 40px; width: 40px;" class="keyboard"></td>
									<td><img src="./image/monitor.png" alt="" style="height: 40px; width: 40px;" class="monitor"></td>
									<td><img src="./image/motherboard.png" alt="" style="height: 40px; width: 40px;" class="mainboard"></td>
									<td><img src="./image/cpu-tower.png" alt="" style="height: 40px; width: 40px;" class="cpu"></td>
									<td><img src="./image/ram.png" alt="" style="height: 40px; width: 40px;" class="ram"></td>
									<td><img src="./image/hard-drive.png" alt="" style="height: 40px; width: 40px; margin-left: calc(100% - 40px);" class="hard-drive"></td>
							</tr>
							<tr><td style="height: 20px;"></td></tr>
							<tr>
								<td class="computer"><i class="fa-solid fa-desktop"></i>
									<select id="cars" value="1" name="IDMay" form="ktm-send">
										<option value="1">Máy1</option>
										<option value="2">Máy2</option>
										<option value="3">Máy3</option>
										<option value="4">Máy4</option>
										<option value="5">Máy5</option>
										<option value="6">Máy6</option>
										<option value="7">Máy7</option>
										<option value="8">Máy8</option>
										<option value="9">Máy9</option>
										<option value="10">Máy10</option>
										<option value="11">Máy11</option>
										<option value="12">Máy12</option>
										<option value="13">Máy13</option>
										<option value="14">Máy14</option>
										<option value="15">Máy15</option>
										<option value="16">Máy16</option>
										<option value="17">Máy17</option>
										<option value="18">Máy18</option>
										<option value="19">Máy19</option>
										<option value="20">Máy20</option>
										<option value="21">Máy21</option>
										<option value="22">Máy22</option>
										<option value="23">Máy23</option>
										<option value="24">Máy24</option>
										<option value="25">Máy25</option>
										<option value="26">Máy26</option>
										<option value="27">Máy27</option>
										<option value="28">Máy28</option>
										<option value="29">Máy29</option>
										<option value="30">Máy30</option>
									</select>
								</td>
								<td class="mouse">
									<label class="checkbox">
										<input type="hidden" name="mouse" value="0"><input id="check" type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" checked/>
										<svg viewBox="0 0 24 24" filter="url(#goo-light)">
											<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
											<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
											<circle class="drop" cx="25" cy="-1" r="2" />
										</svg>
									</label>
								</td>
								<td class="keyboard">
									<label class="checkbox">
										<input type="hidden" name="kb" value="0"><input id="check" type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" checked/>
										<svg viewBox="0 0 24 24" filter="url(#goo-light)">
											<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
											<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
											<circle class="drop" cx="25" cy="-1" r="2" />
										</svg>
									</label>
								</td>
								<td class="monitor">
									<label class="checkbox">
										<input type="hidden" name="mh" value="0"><input id="check" type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" checked/>
										<svg viewBox="0 0 24 24" filter="url(#goo-light)">
											<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
											<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
											<circle class="drop" cx="25" cy="-1" r="2" />
										</svg>
									</label>
								</td>
								<td class="mainboard">
									<label class="checkbox">
										<input type="hidden" name="mb" value="0"><input id="check" type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" checked/>
										<svg viewBox="0 0 24 24" filter="url(#goo-light)">
											<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
											<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
											<circle class="drop" cx="25" cy="-1" r="2" />
										</svg>
									</label>
								</td>
								<td class="cpu">
									<label class="checkbox">
										<input type="hidden" name="cpu" value="0"><input id="check" type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" checked/>
										<svg viewBox="0 0 24 24" filter="url(#goo-light)">
											<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
											<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
											<circle class="drop" cx="25" cy="-1" r="2" />
										</svg>
									</label>
								</td>
								<td class="ram">
									<label class="checkbox">
										<input type="hidden" name="ram" value="0"><input id="check" type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" checked/>
										<svg viewBox="0 0 24 24" filter="url(#goo-light)">
											<path class="tick" d="M4.5 10L10.5 16L24.5 1" />
											<circle class="dot" cx="10.5" cy="15.5" r="1.5" />
											<circle class="drop" cx="25" cy="-1" r="2" />
										</svg>
									</label>
								</td>
								<td class="hard-drive">
									<div class="HD-container" style="padding-left: calc(100% - 100px);">
											<div class="input-field">
												<input type="number"  min="0" name="dl" required="" value="100">
												<label>Trống (GB)</label>
											</div>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr><td style="height: 75px;">​</td></tr>
				<tr>
					<table style="margin-bottom: 100px;">
						<br>
						<!-- SUBMIT BUTTON -->
						<div class="last">
							<div>
								<button class="btn" value="Submit" id="btn-style">
									<span>xác nhận</span>
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
					</table>
				</tr>
			</table>
		</form>
		<tr><td style="height: 50px;">​</td></tr>
	</div>
	<div style="height: 100px;"></div>
	<h1 class="section">CÁC MÁY ĐANG GẶP VẤN ĐỀ</h1>
    <p class="section" style="padding-top: 20px;">* Lưu ý: các máy gặp vấn đề về dung lượng là các máy còn dư < 15gb bộ nhớ</p>
    <div style="height: 40px;"></div>
	<div class="lich-bigger-container">
        <div id="lich-container">
		<?php

		function ktra($n, $str){
			if($n==0){
		        return "";
			}else{
		        return $str;
			}
		}
		function ktraDl($n){
			if($n<15){
		        return "Dung lượng";
			}else{
		        return "";
			}
		}

		$gvList = array(
			"Admin" => "Admin",
			"Ti01" => "Nguyễn Thị Bạch Mai",
			"Ti02" => "Nguyễn Thị Bích Liên",
			"Ti03" => "Trần Công Thắng",
			"Ti04" => "Trần Hải Hòa",
			"Ti05" => "Lê Huỳnh"
		);
		
		$sql = "SELECT `IDMay`, `gv`, `ngay`, `buoi`, `tiet`, `chuot`, `bp`, `mh`, `mb`, `cppu`, `ram`, `dl` FROM `p".$_POST['phong']."` WHERE `chuot` = 1 || `bp` = 1 || `mh` = 1 || `mb` = 1 || `cppu` = 1 || `ram` = 1 || `dl` < 15";
		$stt = 1;
		$result = $conn->query($sql);
        if($result->num_rows <= 0){
            echo "<style>#lich-container{height: 7.5vh} #lich-container p{margin: 10% 2vh 10% 2vh}</style>";
            echo "<div style\"width: 5vw; height:5vh; \"><p>Không có máy gặp vấn đề</p><div>";
        } else {
	        echo "<style>th{ padding-left: 10px; padding-right: 10px; border-bottom: 1px solid gray;}</style>";
			echo "<table style=\"border-collapse: collapse; margin: 1vh 1vw 1vh 1vw\">";
	        echo "<tr><th style=\"border-top:none\"><b>STT</b></th><th style=\"border-top:none\"><b>Mã máy</b></th><th style=\"border-top:none\"><b>Các vấn đề đang gặp</b></th><th style=\"border-top:none\"><b>Giáo viên cập nhật</b></th><th style=\"border-top:none\"><b>Ngày cập nhật</b></th><th style=\"border-top:none\"><b>Buổi</b></th><th style=\"border-top:none; border-right: none; \"><b>Tiết</b></th></tr>";
	        while($row = $result->fetch_assoc()){
		        echo "<tr><td style=\"border-top:none\">".$stt."</td><td style=\"border-top:none\">".$row['IDMay']."</td><td style=\"border-top:none\">". ktra($row['chuot'], "Chuột") ." ". ktra($row['bp'], "Bàn phím") ." ". ktra($row['mh'], "Màn hình") ." ". ktra($row['mb'], "Bảng mạch") ." ". ktra($row['cppu'], "Cpu") ." ". ktra($row['ram'], "Ram") ." ". ktraDl($row['dl']) ."</td> <td style=\"border-top:none\">".$gvList[$row['gv']]."</td><td style=\"border-top:none\">".date("d/m/Y", strtotime($row['ngay']))."</td><td style=\"border-top:none\">".$row['buoi']."</td><td style=\"border-top:none; border-right: none;\">".$row['tiet']."</td>";
				$stt++;
			}
			echo "</table>";
		}
		

		?>
        </div>
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
	
	<script src="script.js"></script>
	
</body>
</html>