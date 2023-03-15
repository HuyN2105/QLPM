<?php

require "./vendor/autoload.php";
use telesign\sdk\messaging\MessagingClient;
$customer_id = "30C69547-883C-4AE7-B340-129FEEADE255";
$api_key = "*********************************";
$phone_number = "84931991605";
$message = "You're scheduled for a dentist appointment at 2:30PM.";
$message_type = "ARN";
$messaging = new MessagingClient($customer_id, $api_key);
$response = $messaging->message($phone_number, $message, $message_type);
?>