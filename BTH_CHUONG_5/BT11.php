<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 11</title>
</head>
<body>
    <?php
    $mau = array("black", "blue", "green", "red", "brown", "magenta");
    function getColorStyle($mau) 
    {
        switch ($mau) 
        {
            case "black":
                return "<span style='color: black'>black, </span>";
            case "blue":
                return "<span style='color: blue'>blue, </span>";
            case "green":
                return "<span style='color: green'>green, </span>";
            case "red":
                return "<span style='color: red'>red, </span>";
            case "brown":
                return "<span style='color: brown'>brown, </span>";
            case "magenta":
                return "<span style='color: magenta'>magenta,</span>";
            default:
                return ""; 
        }
    }


    foreach ($mau as $color) 
    {
        echo getColorStyle($color);
    }
    echo "<span>...</span>";
    ?>
</body>
</html>