<?php
function check()
{
    if ((!isset($_SESSION['logat'])) && $_SESSION['logat'] != 'ouies')
        header("Location:index.php");
}
