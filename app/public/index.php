<?php
//echo "<h1>This is served with docker</h1>";

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

//$sql = "SELECT * FROM reservations";
//$res = $pdo->query($sql);
//while ($row = $res->fetch()) {
//   echo " " . $row["res_id"] . " " . $row["res_title"] . " " . $row["res_date"] . " " . $row["res_time"] . "<br>";
//}
//
////var_dump($pdo, $sql, $res, $row);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <link rel="stylesheet" href="index.css">
    <script src="functions.js"></script>
</head>

<body>
<header>
    <h1>Calendar</h1>
</header>
<main>
    <div class="content__container">
        <div class="calendar">
            <div class="calendar__nav">
                <div class="calendar__date">
                    <div class="calendar__m"></div>
                    <div class="calendar__y"></div>
                </div>
                <div class="calendar__nav--arrows">
                    <button class="calendar__arrow" type="button" onclick="prevMonth()"><</button>
                    <button class="calendar__arrow" type="button" onclick="nextMonth()">></button>
                </div>
            </div>
            <table class="calendar__content"></table>
        </div>
        <div class="events">
            <h2>Events</h2>
            <ul>
                <li>
                    <time>8:00</time>
                    Mani
                </li>
                <li>
                    <time>10:00</time>
                    Pedi
                </li>
                <li>
                    <time>12:00</time>
                    Scoate cateaua la plimbare
                </li>
                <li>
                    <time>18:00</time>
                    Bere cu baietii
                </li>
                <li>
                    <time>20:00</time>
                    Baga gainile in cotet
                </li>
            </ul>
        </div>
    </div>
</main>
</body>
</html>
