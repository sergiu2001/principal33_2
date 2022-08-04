<?php
include 'connection.php';
global $pdo;

$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$img = $_POST['image'];

$try = "SELECT * FROM users WHERE email='$email'";
$res = $pdo->query($try);
if ($res->rowCount())
    header("Location:index.php");
else {
    $sql = "INSERT INTO users (name, email, password, img) VALUES ('$name', ' $email', '$pass','$img')";
    if ($pdo->query($sql)) {
        header("Location:index.php");
    } else {
        echo 'ERROR: Could not able to execute ' . $sql . $pdo->error;
    }
}