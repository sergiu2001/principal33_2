<?php
include 'connection.php';
global $pdo;

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE id = 1";

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
        var_dump($res->rowCount());
        var_dump($email);
        var_dump($_POST['email']);
        var_dump($sql);
        var_dump($res);
    }
} else {
    echo 'ERROR: Could not able to execute ' . $sql . $pdo->error;
}