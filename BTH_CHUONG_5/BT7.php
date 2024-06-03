<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .even {
            font-weight: bold;
        }
        .odd {
            font-weight: normal;
        }
    </style>
</head>
<body>
    <h1>Dãy số từ 1 đến 100</h1>
    <?php
    echo "<p>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<span class='even'>$i</span> ";
        } else {
            echo "<span class='odd'>$i</span> ";
        }
    }
    echo "</p>";
    ?>
</body>
</html>
