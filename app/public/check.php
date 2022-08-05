<?php
function checkLogin()
{
    if ((!isset($_SESSION['login_key'])) && $_SESSION['login_key'] != 'ouies')
        header("Location:index.php");
}
