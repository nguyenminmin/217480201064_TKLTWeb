<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            border: 1px solid #ccc;
        }
        th, tr, td {
            font-size: 30px;
            padding: 10px 45px;
            text-align: center;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Số n</th>";
    echo "<th>Số n<sup>2</sup></th>";
    echo "</tr>";

    for ($n = 0; $n <= 50; $n++) {
        $n_squared = $n * $n;
        echo "<tr>";
        echo "<td>$n</td>";
        echo "<td>$n_squared</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
