<?php

require 'conn.php';

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

$ngay = $_POST["ngay"];
$phong = $_POST["phong"];
$buoi = $_POST["buoi"];
$tiet = $_POST["tiet"];

$mouse = $_POST["mouse"];
$kb = $_POST["kb"];
$mh = $_POST["mh"];
$mb = $_POST["mb"];
$cpu = $_POST["cpu"];
$ram = $_POST["ram"];
$dl = $_POST["dl"];

$sql = "UPDATE `p1` SET `gv`= ? ,`ngay`= ? ,`buoi`= ? ,`tiet`= ? ,`chuot`= ? ,`bp`= ? ,`mh`= ? ,`mb`= ? ,`cppu`= ? ,`ram`= ? ,`dl`= ? WHERE `IDMay` = ". $_POST['IDMay'];

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "sssiiiiiiii", $_SESSION['id'] , $ngay, $buoi, $tiet, $mouse, $kb, $mh, $mb, $cpu, $ram, $dl);

mysqli_stmt_execute($stmt);

echo "<script type='text/javascript'>alert('Đã Lưu');
    window.location.href = \"http://quanlyphongmay.com.vn/ktm.php\";
</script>";


?>