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
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        .calculator {
            border: 2px solid #4CAF50;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            background-color: #ffffff;
        }
        .calculator h2 {
            text-align: center;
        }
        .calculator input[type="text"] {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .calculator input[type="submit"] {
            width: 47%;
            padding: 10px;
            margin: 5px 1%;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            
        }
        .calculator input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        function gcd($a, $b) {
            while ($b != 0) {
                $t = $b;
                $b = $a % $b;
                $a = $t;
            }
            return $a;
        }

        function lcm($a, $b) {
            return ($a * $b) / gcd($a, $b);
        }

        $ketqua = "";
        if (isset($_GET["SoHang1"]) && isset($_GET["SoHang2"]) && isset($_GET["operation"])) {
            $soHang1 = $_GET["SoHang1"];
            $soHang2 = $_GET["SoHang2"];
            $operation = $_GET["operation"];

            if (is_numeric($soHang1) && is_numeric($soHang2)) {
                $soHang1 = (int)$soHang1;
                $soHang2 = (int)$soHang2;

                switch ($operation) {
                    case "GCD":
                        $ketqua = gcd($soHang1, $soHang2);
                        break;
                    case "LCM":
                        $ketqua = lcm($soHang1, $soHang2);
                        break;
                    default:
                        $ketqua = "Phép tính không hợp lệ";
                }
            } else {
                $ketqua = "Vui lòng nhập số hợp lệ";
            }
        }
    ?>
    <div class="calculator">
        <form method="get">
            <h2>TÍNH TOÁN USCLN VÀ BSCN</h2>
            <hr>
            Số thứ 1:
            <input type="text" name="SoHang1" value="<?php echo isset($soHang1) ? $soHang1 : ''; ?>">
            <br><br>
            Số thứ 2:
            <input type="text" name="SoHang2" value="<?php echo isset($soHang2) ? $soHang2 : ''; ?>">
            <br><br>
            Kết quả:
            <input type="text" name="KetQua" value="<?php echo $ketqua; ?>" readonly>
            <br><br>
            <input type="submit" value="USCLN" name="operation">
            <input type="submit" value="BSCNN" name="operation">
        </form>
    </div>
</body>
</html>
