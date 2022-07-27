<!doctype html>

<?php
//echo "<h1>This is served with docker</h1>";

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

//$sql = "SELECT * FROM users";
//$res = $pdo->query($sql);
//while ($row = $res->fetch()) {
//    echo " " . $row["user_id"] . " " . $row["user_name"] . " " . $row["user_email"] . "<br>";
//}
//
//var_dump($pdo, $sql);
?>

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

<body onload="eventPopUp() createCalendar()">
<header>
    <h1>Calendar</h1>
</header>
<main>
    <div class="content__container">
        <div class="calendar">
            <div class="calendar__nav">
                <div class="calendar__date">
                    <div class="calendar__m">July</div>
                    <div class="calendar__y">2022</div>
                </div>
                <div class="calendar__nav--arrows">
                    <button class="calendar__l" type="button" onclick="prevMonth()"><</button>
                    <button class="calendar__r" type="button" onclick="nextMonth()">></button>
                </div>
            </div>
            <table class="calendar__content">
                <thead>
                <tr>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wen</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="day" data-date="2022-07-01">1</td>
                    <td class="day" data-date="2022-07-02">2</td>
                    <td class="day" data-date="2022-07-03">3</td>
                    <td class="day" data-date="2022-07-04">4</td>
                    <td class="day" data-date="2022-07-05">5</td>
                    <td class="day" data-date="2022-07-06">6</td>
                    <td class="day" data-date="2022-07-07">7</td>
                </tr>
                <tr>
                    <td class="day" data-date="2022-07-08">8</td>
                    <td class="day" data-date="2022-07-09">9</td>
                    <td class="day" data-date="2022-07-10">10</td>
                    <td class="day" data-date="2022-07-11">11</td>
                    <td class="day" data-date="2022-07-12">12</td>
                    <td class="day" data-date="2022-07-13">13</td>
                    <td class="day" data-date="2022-07-14">14</td>
                </tr>
                <tr>
                    <td class="day" data-date="2022-07-15">15</td>
                    <td class="day" data-date="2022-07-16">16</td>
                    <td class="day" data-date="2022-07-17">17</td>
                    <td class="day" data-date="2022-07-18">18</td>
                    <td class="day" data-date="2022-07-19">19</td>
                    <td class="day" data-date="2022-07-" 20>20</td>
                    <td class="day" data-date="2022-07-21">21</td>
                </tr>
                <tr>
                    <td class="day" data-date="2022-07-22">22</td>
                    <td class="day" data-date="2022-07-23">23</td>
                    <td class="day" data-date="2022-07-24">24</td>
                    <td class="day" data-date="2022-07-25">25</td>
                    <td class="day" data-date="2022-07-26">26</td>
                    <td class="day" data-date="2022-07-27">27</td>
                    <td class="day" data-date="2022-07-28">28</td>
                </tr>
                <tr>
                    <td class="day" data-date="2022-07-29">29</td>
                    <td class="day" data-date="2022-07-30">30</td>
                    <td class="day" data-date="2022-07-31">31</td>
                </tr>
                </tbody>
            </table>
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
