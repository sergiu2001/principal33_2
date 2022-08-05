<?php
include 'connection.php';
global $pdo;

$res_title = $_POST['title'];
$res_date = $_POST['date'];
$res_time = $_POST['time'];

@session_start();
$user_id = $_SESSION['user_id'];
session_write_close();

$sql = "INSERT INTO reservations (title,user_id, date_start, time) VALUES ('$res_title','$user_id', '$res_date', '$res_time')";
$res = $pdo->query($sql);
if ($res) {
    header("Location: index.php");
} else {
    echo "Error";
}