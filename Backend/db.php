<?php
$host = localhost:3306";
$db = "movitdb";
$user = "stv";
$pwd = "12345678";

$conn = newsqli($host, $db, $user, $pwd);

if($conn->connect_error){
    http_response_code(400);
    header('Content_type: text/plain');
    echo $conn->connect_error;
    exit();
}
