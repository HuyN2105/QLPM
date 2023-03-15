<?php

session_start();

$pow1 = "";
$pow2 = "";

if($_SESSION['pow'] != 0){
    $pow1 = "<a href=\"./passChange.php\">Đổi mật khẩu</a>";
}
if($_SESSION['pow'] <= 2 && $_SESSION['pow'] > 0){
    $pow2 = "<a href=\"./xuatExcel.php\">Xuất thống kê tuần</a>";
}

echo '
	<div style="position: fixed; top: 95vh; left: 1vh">
		<a href="//www.dmca.com/Protection/Status.aspx?ID=c9a68495-7895-400a-957a-911b7961a2f3" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120x.png?ID=c9a68495-7895-400a-957a-911b7961a2f3"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
	</div>
	
	<div id="header">	
		<div id="headerLogoNLine">
			<a href="./menu.php" style="margin: 0 10px 0 10px">TRANG CHỦ</a>
			<a href="./DKTH.php" style="margin: 0 10px 0 10px">ĐĂNG KÝ THỰC HÀNH</a>
			<a href="./ktm.php" style="margin: 0 10px 0 10px">TÌNH TRẠNG MÁY</a>
			<div class="dropdown">
  				<button class="dropbtn" style="transform: translateY(-10px)"><span class="material-symbols-outlined" style="transform: translateY(6px)">account_circle</span> TÀI KHOẢN &#9660;</button>
  				<div class="dropdown-content">
				  	<p style="cursor: default" style="margin: 0;">Xin chào '.$_SESSION['name'].'</p>
					'.$pow1.'
    				<a href="./logout.php">Đăng Xuất</a>
					'. $pow2 .'
  				</div>
			</div>
		</div>
	</div>';

?>