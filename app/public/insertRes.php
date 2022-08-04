<<?php
include 'connection.php';
global $pdo;

$res_title = $_POST['title'];
$res_date = $_POST['date'];
$res_time = $_POST['time'];
$user_id = 1;

$sql = "INSERT INTO reservations (title,user_id, date_start, time) VALUES ('$res_title','$user_id', '$res_date', '$res_time')";
$res = $pdo->query($sql);
if ($res === TRUE) {
    header("Location: index.php");
} else {
    echo $pdo->error;
}