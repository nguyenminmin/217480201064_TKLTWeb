<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-size: 21px;
            font-weight: bold;
        }
        input[type="text"], input[type="submit"] {
            font-size: 18px;
            padding: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="chuoi">Nhập chuỗi s:</label><br>
        <input type="text" id="chuoi" name="chuoi" required><br><br>
        <input type="submit" value="Đảo chuỗi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST['chuoi'];
        
        // Hàm đảo chuỗi
        function daoChuoi($chuoi) {
            return strrev($chuoi);
        }
        
        $chuoi_dao = daoChuoi($chuoi);
        echo "Chuỗi đảo của '$chuoi' là '$chuoi_dao'.";
    }
    ?>
</body>
</html>
