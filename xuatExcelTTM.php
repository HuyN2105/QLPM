<?php
require 'conn.php';
require "./vendor/autoload.php";
use shuchkin\simplexlsxgen;

session_start();

if(!isset($_SESSION['phong'])){
    $_SESSION['request'] = true;
    header('Location: ttm-phong.php');
}

date_default_timezone_set('Asia/Ho_Chi_Minh');

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

$bang = [
    ['<center><style bgcolor="#FFFF00" color="#0000FF"><b>Bảng thống kê tình trạng máy phòng'.$_SESSION['phong'].'</b></style></center>', NULL, NULL, NULL, NULL, NULL, NULL],
    ['<b>Mã máy</b>', '<b>Các vấn đề đang gặp</b>', '<b>Giáo viên cập nhật</b><style>', '<b>Phòng máy</b>', '<b>Ngày cập nhật</b>', '<b>Buổi</b>', '<b>Tiết</b>']
];

$sql = "SELECT `IDMay`, `gv`, `ngay`, `buoi`, `tiet`, `chuot`, `bp`, `mh`, `mb`, `cppu`, `ram`, `dl` FROM `p".$_SESSION['phong']."` WHERE 1";
$dong = 3;
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $bang[$dong] = [$row['IDMay'], ( ktra($row['chuot'], "Chuột") ." ". ktra($row['bp'], "Bàn phím") ." ". ktra($row['mh'], "Màn hình") ." ". ktra($row['mb'], "Bảng mạch") ." ". ktra($row['cppu'], "Cpu") ." ". ktra($row['ram'], "Ram") ." ". ktraDl($row['dl']) ), $gvList[$row['gv']],$phong, $row['ngay'], $row['buoi'], $row['tiet']];
        $dong++;
    }
}


$xlsx = Shuchkin\SimpleXLSXGen::fromArray($bang)
    ->setDefaultFont('Times New Roman')
    ->setDefaultFontSize(14)
    ->setColWidth(1, 10)
    ->mergeCells("A1:G1");
$xlsx->download("Thống kê tình trạng máy phòng ".$_SESSION['phong']);

?>