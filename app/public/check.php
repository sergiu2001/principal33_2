<?php
function check()
{
    session_start();
    if((! isset($_SESSION['logat'])) && $_SESSION['logat']!='ouies')
        header("Location:index.php");
    session_write_close();
}
