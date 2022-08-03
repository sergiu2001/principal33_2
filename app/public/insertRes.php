<<?php
session_start();
include 'connection.php';
global $pdo;

$res_title = $_POST['title'];
$res_date = $_POST['date'];
$res_time = $_POST['time'];

$sql = "INSERT INTO reservations (title, date_start, time) VALUES ('$res_title', ' $res_date', '$res_time ')";
$res = $pdo->query($sql);
if ($res === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $pdo->error;
}
session_write_close();
