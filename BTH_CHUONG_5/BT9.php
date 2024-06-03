<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .row {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .table {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 120px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .table h3 {
            margin: 0;
            padding: 5px;
            background-color: #f2f2f2;
        }
        .table div {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>BẢNG CỬU CHƯƠNG</h1>
    <div class="row">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='table'>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                echo "<div>$i x $j = $result</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <div class="row">
        <?php
        for ($i = 6; $i <= 10; $i++) {
            echo "<div class='table'>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                echo "<div>$i x $j = $result</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
