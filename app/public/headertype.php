<?php
session_start();
if ( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ) {
    include 'headerL.php';
    include 'check.php';
    checkLogin();
} else {
    include 'header.php';
}
session_write_close();
