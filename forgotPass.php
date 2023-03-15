<?php

require 'conn.php';
require "./vendor/autoload.php";
use Courier\CourierClient;

function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

session_start();

$newPass = generateRandomString();

if ($stmt = $conn->prepare('SELECT `email` FROM `LOGIN` WHERE `username` = ?')) {
	$stmt->bind_param('s', $_POST['user']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($email);
		$stmt->fetch();

		$stmt = $conn->prepare('UPDATE `LOGIN` SET `pass`= ? WHERE `username` = ?');
		$stmt->bind_param('ss', $newPass, $_POST['user']);
		$stmt->execute();

		$courier = new CourierClient("https://api.courier.com/", "pk_prod_QVD610RA7745D6GMAR61V0W6DJC6");

    	$result = $courier->sendEnhancedNotification(
    	  	(object) [
    	    	'to' => ["email" => $email],
    	    	'template' => "PKK35T64B8MCHZJK6MQCSFHX1BY0",
    	    	'data' => [
    	    		'user' => $_POST['user'],
    	    		'newPass' => $newPass
    			],
    		],
    	);
		echo( $result->requestId );
    	echo "<script type='text/javascript'>alert('Mật khẩu mới đã được gửi về email: ". $email ."');
    	window.location.href = \"http://quanlyphongmay.com.vn/index.html\";
		</script>";
	} else {
		echo "<script type='text/javascript'>alert('Sai tên đăng nhập!');
		window.history.go(-1);
		</script>";
	}

	$stmt->close();
}
?>