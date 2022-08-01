<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            <?php
                include 'showRes.php';
            ?>
        </div>
    </div>
</main>
</body>
</html>
