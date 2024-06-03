<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table {
            border-collapse: collapse;
            border: 2px solid;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .den {
            background-color: black;
        }
        .trang {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <?php
            for ($row = 1; $row <= 8; $row++) 
            {
                echo "<tr>";
                for ($col = 1; $col <= 8; $col++) 
                {
                    if (($row % 2 == 1 && $col % 2 == 1) || ($row % 2 == 0 && $col % 2 == 0)) 
                    {
                        echo "<td class='den'></td>"; 
                    } 
                    else 
                    {
                        echo "<td class='trang'></td>"; 
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
