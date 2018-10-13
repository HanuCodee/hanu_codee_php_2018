<?php
$message =  $_POST['message'];

$now = new DateTime();
$response = [
    "name" => "Bot",
    "message" => $message,
    "responsedAt" => $now->format('H:i d-m-Y')
];

echo json_encode($response);