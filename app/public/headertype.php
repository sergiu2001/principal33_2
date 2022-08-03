<?php
session_start();

if ( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ) {
    include 'headerL.php';
} else {
    include 'header.php';
}
session_write_close();
