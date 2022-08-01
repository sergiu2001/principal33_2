<?php
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['resDate'])) {
    $d = $_POST['resDate'];

    $sql = "SELECT title, user_id, date_start, time FROM reservations WHERE date_start='" . $d . "' ORDER BY time";
    $res = $pdo->query($sql);
    echo "<ul>";
    while ($row = $res->fetch()) {
        $user = $row["user_id"];

        $sql2 = "SELECT id, img FROM users WHERE id='" . $user . "'";
        $res2 = $pdo->query($sql2);
        $row2 = $res2->fetch();

        echo "<li><time>" . $row['time'] . "</time>" . $row["title"] . "</li>";
    }
    echo "</ul>";
}
?>