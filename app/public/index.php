<?php
echo "<h1>This is served with docker</h1>";

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

//$query = $pdo->query('SHOW VARIABLES like "version"');

//$row = $query->fetch();

//echo 'MySQL version:' . $row['Value'];

$sql = "SELECT * FROM users";
$res = $pdo->query($sql);
    while ($row = $res->fetch()) {
        echo " " . $row["user_id"] . " " . $row["user_name"] . " " . $row["user_email"] . "<br>";
    }

var_dump($pdo,$sql);
