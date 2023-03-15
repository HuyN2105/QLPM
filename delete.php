<?php

require 'conn.php';

date_default_timezone_set('Asia/Ho_Chi_Minh');

if(mysqli_connect_errno()){
    die("Connection error: ". mysqli_connect_error());
}

$id = $_POST['deleteID'];

$deleteStr = "DELETE FROM `DKTH` WHERE `DKTH`.`id` = $id";

if ($conn->query($deleteStr) === TRUE) {
    echo "<script type='text/javascript'>alert('Đã Xóa');
    window.location.href = \"http://quanlyphongmay.com.vn/DKTH.php\";
</script>";
} else {
    echo "<script type='text/javascript'>alert('Lỗi');
    window.history.go(-1);
</script>";
}

?>