<?php
include 'connection.php';
global $pdo;

$email = $_POST['email'];
$password = $_POST['password'];

$email = filter_var( $email, FILTER_SANITIZE_EMAIL );

$sql = "SELECT name, id, email, password, img FROM users WHERE email = '$email'";

if ($res = $pdo->query($sql)) {
    if ($res->rowCount() === 1) {
        while ($row = $res->fetch()) {
            session_start();
            $_SESSION['logat'] = "ouies";
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            session_write_close();

            $hash = $row['password'];
            if(password_verify($password, $hash)) {
                header("Location: index.php");
            } else {
                echo 'Wrong password';
            }
        }
    } else {
        echo 'Wrong username';
    }
} else {
    echo 'ERROR: Could not able to execute ' . $sql . $pdo->error;
}