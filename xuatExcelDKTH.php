<?php

require 'conn.php'; 
require "./vendor/autoload.php";
use Shuchkin\SimpleXLSXGen;

date_default_timezone_set('Asia/Ho_Chi_Minh');

if(strtolower($_POST['muc']) == 'ttm' || strtolower($_POST['muc']) == 'tình trạng máy'){
    include 'xuatExcelTTM.php';
}else {

    $gvList = array(
        "Ti01" => "Nguyễn Thị Bạch Mai",
        "Ti02" => "Nguyễn Thị Bích Liên",
        "Ti03" => "Trần Công Thắng",
        "Ti04" => "Trần Hải Hòa",
        "Ti05" => "Lê Huỳnh"
    );
    $gvList_cal = array(
        "Ti01" => 0,
        "Ti02" => 0,
        "Ti03" => 0,
        "Ti04" => 0,
        "Ti05" => 0
    );

    $bang = [
        ['<style bgcolor="#FFFF00" color="#0000FF"><b>STT</b></style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Ngày thực hành</b></style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Buổi</b></style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Tiết</b><style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Phòng máy</b></style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Lớp</b></style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Họ và tên giáo viên</b></style>', '<style bgcolor="#FFFF00" color="#0000FF"><b>Mã giáo viên</b></style>'],
    ];

    $weekStart = "";

    if(date('D')!='Mon'){    
        $weekStart = date('Y-m-d',strtotime('last Monday'));    
    }else{
        $weekStart = date('Y-m-d');
    }

    $dem = 0;
    $mergeData = [];
    $mergeDem = 0;
    $stt = 1;

    while(true){
        $temp_ngay = date('Y-m-d', (strtotime($weekStart) + ($dem * 86400)));
        $temp_ngay2 = date('d/m/Y', strtotime($temp_ngay));
        $sql = "SELECT `id`, `buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay` FROM `DKTH` WHERE ngay='".$temp_ngay."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $bang[$stt] = [$stt, $temp_ngay2, $row['buoi'], $row['tiet'], $row['phong'], $row['lop'], $row['giao_vien'], $row['id']];
                $gvList_cal[$row['id']]+=1;
                $stt += 1;
            }
        }else{
            $bang[$stt] = [$stt, $temp_ngay2, "<center>Không có lịch thực hành trong ngày</center>", null, null, null, null];
            $mergeData[$mergeDem] = "C".($stt+1);
            $mergeData[$mergeDem+1] = "H".($stt+1);
            $mergeDem += 2;
        }
        $dem++;
        if(($dem*86400) >  strtotime(date('Y-m-d'))-strtotime($weekStart)){
            break;
        }
    }

    $bang[$stt+1][1] = null;

    $bang[$stt+2][1] = "<style bgcolor=\"#FFFF00\" color=\"#0000FF\"><center><b>Tổng số tiết thực hành trong tuần của các giáo viên</b></center></style>";
    $bang[$stt+3][1] = null;
    $bang[$stt+3][2] = "<b>Tên giáo viên</b>";
    $bang[$stt+3][5] = "<b>Số tiết</b>";

    $bang[$stt+4][1] = null;
    $bang[$stt+4][2] = $gvList['Ti01'];
    $bang[$stt+4][5] = $gvList_cal['Ti01'];
    $bang[$stt+5][1] = null;
    $bang[$stt+5][2] = $gvList['Ti02'];
    $bang[$stt+5][5] = $gvList_cal['Ti02'];
    $bang[$stt+6][1] = null;
    $bang[$stt+6][2] = $gvList['Ti03'];
    $bang[$stt+6][5] = $gvList_cal['Ti03'];
    $bang[$stt+7][1] = null;
    $bang[$stt+7][2] = $gvList['Ti04'];
    $bang[$stt+7][5] = $gvList_cal['Ti04'];
    $bang[$stt+8][1] = null;
    $bang[$stt+8][2] = $gvList['Ti05'];
    $bang[$stt+8][5] = $gvList_cal['Ti05'];

    if(date('m') >= 8 && date('m') <= 12){
        $year = date('Y');
    } else {
        $year = date('Y')-1;
    }
    $day = (strtotime(date('Y-m-d')) - strtotime($year."-9-5"))/60/60/24;
    $week = ceil($day/7);
    $bang[$stt+9][5] = $week;

    $xlsx = Shuchkin\SimpleXLSXGen::fromArray($bang)
        ->setDefaultFont('Times New Roman')
        ->setDefaultFontSize(14)
        ->setColWidth(1, 5)
        ->setColWidth(2, 20)
        ->setColWidth(3, 5)
        ->setColWidth(4, 5)
        ->setColWidth(5, 12)
        ->setColWidth(6, 5)
        ->setColWidth(7, 19)
        ->setColWidth(8, 16)
        ->setColWidth(10, 10)
        ->setColWidth(11, 10)
        ->setColWidth(12, 16)
        ->mergeCells("A".($stt+3).":G".($stt+3));

    for ($i = 0; $i < $mergeDem; $i+=2){
        $t = $mergeData[$i].":".$mergeData[$i+1];
        $xlsx->mergeCells($t);
    }

    $xlsx->download("Thống kê DKTH - Tuần ".$week);
}
?>