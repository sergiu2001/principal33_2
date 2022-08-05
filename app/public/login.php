<?php
include 'connection.php';
global $pdo;

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email LIKE '%$email%'";

if ($res = $pdo->query($sql)) {
    if ($res->rowCount() === 1) {
        while ($row = $res->fetch()) {
            session_start();
            $_SESSION['login_key'] = "ouies";
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            session_write_close();

            $hash = $row['password'];
            if (password_verify($password, $hash)) {
                header("Location: index.php");
            } else {
                echo 'Wrong password';
            }
        }
    } else {

    }
} else {
    echo 'ERROR: Could not able to execute ' . $sql . $pdo->error;
}