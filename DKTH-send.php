<?php

require 'conn.php';

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
header('Content-type: text/html; charset=utf-8');

$buoi = $_POST["buoi"];
$giao_vien = $_POST["giao_vien"];
$lop = $_POST["lop"];
$phong = $_POST["phong"];
$tiet = $_POST["tiet"];
$ngay = $_POST["ngay"];

$tiet = (int)$tiet;
$phong = (int)$phong;

$stmt = $conn->prepare('SELECT `id` FROM `LOGIN` WHERE `name` = ?');
$stmt->bind_param('s', $_POST['giao_vien']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
$stmt->fetch();

$CHECK_STR = "SELECT `giao_vien`, `lop` FROM `DKTH` WHERE `ngay`='$ngay' && LOWER(`buoi`)='".strtolower($buoi)."' && `tiet`=".$tiet." && `phong`=".$phong;

$CHECK_RESULT = $conn->query($CHECK_STR);

if($CHECK_RESULT->num_rows > 0){
    while($row = $CHECK_RESULT->fetch_assoc()){
        $gv = $row['giao_vien'];
        $lop = $row['lop'];
        if(strtolower($row["giao_vien"])==strtolower($giao_vien)){
            echo "<script type='text/javascript'>alert('Đã có trên hệ thống');
    window.history.go(-1);
                </script>";
            die();
        }
    }
    echo "<script type='text/javascript'>alert('Trùng tiết của lớp $lop , giáo viên dạy: $gv');
window.history.go(-1);
    </script>";
} else {
    $sql = "INSERT INTO `DKTH`(`id`,`buoi`, `giao_vien`, `lop`, `phong`, `tiet`, `ngay`) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "ssssiis",$id, $buoi, $giao_vien, $lop, $phong, $tiet, $ngay);

    mysqli_stmt_execute($stmt);

    echo "<script type='text/javascript'>alert('Đã Lưu');
    window.location.href = \"http://quanlyphongmay.com.vn/DKTH.php\";
</script>";
}
$conn->close();
die();
?>