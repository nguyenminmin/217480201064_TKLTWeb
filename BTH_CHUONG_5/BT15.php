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
        <label for="chuoi">Nhập chuỗi:</label><br>
        <input type="text" id="chuoi" name="chuoi" required><br><br>
        <label for="ky_tu">Nhập ký tự:</label><br>
        <input type="text" id="ky_tu" name="ky_tu" required maxlength="1"><br><br>
        <input type="submit" value="Đếm số lần xuất hiện">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST['chuoi'];
        $ky_tu = $_POST['ky_tu'];
        
        function demKyTu($chuoi, $ky_tu) {
            $dem = 0;
            for ($i = 0; $i < strlen($chuoi); $i++) {
                if ($chuoi[$i] == $ky_tu) {
                    $dem++;
                }
            }
            return $dem;
        }
        
        $so_lan_xuat_hien = demKyTu($chuoi, $ky_tu);
        echo "Ký tự '$ky_tu' xuất hiện $so_lan_xuat_hien lần trong chuỗi '$chuoi'.";
    }
    ?>
</body>
</html>
