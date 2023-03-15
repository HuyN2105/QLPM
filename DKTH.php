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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        
        <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="script.js"></script>
        
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
        <meta property="og:image" content="./LogoLeLoi.jpg" />
        <title>Đăng Ký Thực Hành</title>
    </head>
<body>
<?php

require 'conn.php';

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (!isset($_SESSION['loggedin'])) {
	header('Location: https://quanlyphongmay.com.vn/');
	exit;
}
?>
    <a href="#top"><button id="toTop" title="Go to top"><img src="./image/up-arrow.png" alt="" style="width: 40px; height: 40px;"></button></a>
	<!-- Header -->
    <?php require 'menuHeader.php'; ?>
    
    <div id="top" style="height: 0; min-height: 0;"></div>
    <div style="height: 100vh;" id="DKTH">
        <div style="height: 125px;"></div>
        <form action="DKTH-send.php" method="post">
            <table style="border-collapse: collapse;">
                <tr>
                    <br>
                    <h1 class="section">ĐĂNG KÝ THỰC HÀNH</h1>
                    <br>
                </tr>
                <tr><td style="height: 50px;">​</td></tr>
                <tr><td style="">
                    <td style="width: 15vw; text-align: center; vertical-align: middle;">
                        <div class="container">
                            <img src="./image/stopwatch.png" alt="" >
                            <br>
                            <div class="tiet-container">
                                <div class="input-field-dk" id="buoi">
                                    <input <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?> type="text" required="" style="transform: translateX(-25px)" id="buoi" name="buoi">
                                    <label>Buổi</label>
                                </div>
                            </div>
                        </div>
                </td></tr>
                <tr><td style="height: 100px;">​</td></tr>
                <tr>
                    <div style="height: 25%;"></div>
                    <table style="border-collapse: collapse;">
                        <tr>
                            <td style="margin-left: 10vw;width: 17.5vw; display: flex; padding-left: 15%">
                                <div class="container">
                                    <img src="./image/teacher.png" alt="" >
                                    <br>
                                    <div class="input-field-dk">
                                        <input <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?> type="text" required="" id="giao_vien" name="giao_vien" ?>
                                        <label>Tên giáo viên</label>
                                    </div>
                                </div>
                            </td>
                            <td style="width: 15vw; border-right: solid 1px gray; border-left: solid 1px gray; padding-left: 8%">
                                <div class="container">
                                    <img src="./image/class.png" alt="" >
                                    <br>
                                    <div class="input-field-dk">
                                        <input <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?> type="text" required="" id="lop" name="lop">
                                        <label>Lớp</label>
                                    </div>
                                </div>
                            </td>
                            <td style="width: 15vw; border-right: solid 1px gray; border-left: solid 1px gray; padding-left: 8%">
                                <div class="container">
                                    <img src="./image/room-door.png" alt="" >
                                    <br>
                                    <div class="input-field-dk">
                                        <input <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?> type="number" required="" min="1" max="2" id="phong" name="phong">
                                        <label>Phòng</label>
                                    </div>
                                </div>
                            </td>
                            <td style="width: 15vw; border-right: solid 1px gray; border-left: solid 1px gray; padding-left: 8%">
                                <div class="container">
                                    <img src="./image/stopwatch.png" alt="" >
                                    <br>
                                    <div class="input-field-dk">
                                        <input <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?> type="number" required="" min="1" max="5" id="tiet" name="tiet">
                                        <label>Tiết</label>
                                    </div>
                                </div>
                            </td>
                            <td style="width: 15vw; border-left: solid 1px gray; vertical-align: middle; text-align: center;">
                                <div class="container">
                                    <img src="./image/calendar.png" alt="" >
                                    <br>
                                    <div class="input-field-dk">
                                        <input <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?> type="date" required="" style="width: 100%;" id="ngay" name="ngay" value=<?php echo '"' . date('Y-m-d') . '"'; ?> min=<?php echo "'". date("Y-m-d") . "'" ?>>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr></tr>
                    </table>
                </tr>
                <tr>
                    <div style="height: 225px;"></div>
                    <br>
                    <!-- SUBMIT BUTTON -->
                    <div class="last" <?php if($_SESSION['pow'] == 0){ echo "style=\"cursor: no-drop\""; } ?>>
                        <div>
                            <button class="btn" value="Submit" id="btn-style" <?php if($_SESSION['pow'] == 0){ echo "disabled style=\"cursor: no-drop\""; } ?>>
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
                </tr>
            </table>
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
    <div style="height: 125px;"></div>
    <h1 class="section">LỊCH THỰC HÀNH</h1>
    <p class="section" style="padding-top: 20px;">< Từ ngày <?php echo (date("d")-4).date("/m/Y"); ?> đến ngày <?php echo (date("d")+4).date("/m/Y"); ?> ></p>
    <div style="height: 40px;"></div>
    <div class="lich-bigger-container">
        <div id="lich-container">
        
            <?php
            $date01 = date("d") - 4;
            $date1 = date("d") - 3;
            $date2 = date("d") - 2;
            $date3 = date("d") - 1;
            $date4 = date("d") + 1;
            $date5 = date("d") + 2;
            $date6 = date("d") + 3;
            $date7 = date("d") + 4;
            $sql01 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date01."'";
            $sql1 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date1."'";
            $sql2 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date2."'";
            $sql3 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date3."'";
            $sql4 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-d")."'";
            $sql5 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date4."'";
            $sql6 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date5."'";
            $sql7 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date6."'";
            $sql8 = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".date("Y-m-").$date7."'";
            $result01 = $conn->query($sql01);
            $result1 = $conn->query($sql1);
            $result2 = $conn->query($sql2);
            $result3 = $conn->query($sql3);
            $result4 = $conn->query($sql4);
            $result5 = $conn->query($sql5);
            $result6 = $conn->query($sql6);
            $result7 = $conn->query($sql7);
            $result8 = $conn->query($sql8);

            $gvList = array(
                "Nguyễn Thị Bạch Mai" => "Ti01",
                "Nguyễn Thị Bích Liên" => "Ti02",
                "Trần Công Thắng" => "Ti03",
                "Trần Hải Hòa" => "Ti04",
                "Lê Huỳnh" => "Ti05"
            );

            function delPow($id){
                if($_SESSION['id'] != $id && $_SESSION['pow'] != 1){ 
                    return "";
                }else{
                    return "";
                }
            }
            function delPow2($id){
                if($_SESSION['id']!= $id && $_SESSION['pow']!= 1){ 
                    return "";
                }else{
                    return "";
                }
            }

            $stt = 1;
            $count = 0;
            for ($i = 1; $i <= 8; $i++) {
                $count += ${'result'.$i}->num_rows;
            }
            if($count == 0){
                echo "<style>#lich-container{height: 5vh}</style>";
                echo "<div style\"width: 5vw; height:5vh \"><p style=\"margin: 10% 2vh 0 2vh\">Chưa có lịch<p><div>";
            } else {
                echo "<table style=\"border-collapse: collapse; margin: 1vh 1vw 1vh 1vw\"> ";
                echo "<tr><th style=\"border-top:none\" id=\"size0\"></th><th style=\"border-top:none\" id=\"size1\"><b>STT</b></th> <th style=\"border-top:none;\" id=\"size3\"><b>Ngày thực hành</b></th> <th style=\"border-top:none;\" id=\"size1\"><b>Buổi</b></th> <th style=\"border-top:none;\" id=\"size1\"><b>Tiết</b></th> <th style=\"border-top:none;\" id=\"size2\"><b>Phòng máy</b></th> <th style=\"border-top:none;\" id=\"size1\"><b>Lớp</b></th> <th style=\"border-top:none;border-right:none;\" id=\"size4\"><b>Họ và tên giáo viên</b></th></tr>";
                if ($result01->num_rows > 0) {
                    while ($row = $result01->fetch_assoc()) {
                        echo "<tr> <td><form action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td> <td>" . (date("d") - 3) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result1->num_rows > 0) {
                    while ($row = $result1->fetch_assoc()) {
                        echo "<tr> <td><form action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td> <td>" . (date("d") - 3) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result2->num_rows > 0) {
                    while ($row = $result2->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td> " . $stt . "</td><td>" . (date("d") - 2) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result3->num_rows > 0) {
                    while ($row = $result3->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td><td>" . (date("d") - 1) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result4->num_rows > 0) {
                    while ($row = $result4->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td><td>" . date("d/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result5->num_rows > 0) {
                    while ($row = $result5->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td><td>" . (date("d") + 1) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result6->num_rows > 0) {
                    while ($row = $result6->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td><td>" . (date("d") + 2) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result7->num_rows > 0) {
                    while ($row = $result7->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td><td>" . (date("d") + 3) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
                if ($result8->num_rows > 0) {
                    while ($row = $result8->fetch_assoc()) {
                        echo "<tr> <td><form ". delPow2($gvList[$row['giao_vien']]) ." action=\"./delete.php\" method=\"post\" id=\"deleteBtn\"><input ". delPow($row['id']) . "  type=\"submit\" name=\"deleteID\" value=\"" . $row['id'] . "\" /></form> <td>" . $stt . "</td><td>" . (date("d") + 4) . date("/m/Y") . "</td><td>" . $row["buoi"] . "</td><td>" . $row["tiet"] . "</td><td>" . $row["phong"] . "</td><td>" . strtoupper($row["lop"]) . "</td><td style=\"border-right:none;\">" . $row["giao_vien"] . " </td> </tr>";
                        $stt++;
                    }
                }
            }
            $conn->close();
            ?>
            
        </div>
    </div>
    
	<script src="script.js"></script>
    
</body>
</html>