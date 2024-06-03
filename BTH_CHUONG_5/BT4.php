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
            border-radius: 5px;
        }
        .container {
            background-color: white;
            border: 2px solid #4CAF50;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
            text-align: center;
            display: block;
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
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .calculator input[type="submit"] {
            width: 48%;
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
        $ketqua = "";
        if (isset($_GET["SoHang1"]) && isset($_GET["SoHang2"]) && isset($_GET["operation"])) {
            $soHang1 = $_GET["SoHang1"];
            $soHang2 = $_GET["SoHang2"];
            $operation = $_GET["operation"];

            if (is_numeric($soHang1) && is_numeric($soHang2)) {
                $soHang1 = (float)$soHang1;
                $soHang2 = (float)$soHang2;

                switch ($operation) {
                    case "Cộng":
                        $ketqua = $soHang1 + $soHang2;
                        break;
                    case "Trừ":
                        $ketqua = $soHang1 - $soHang2;
                        break;
                    case "Nhân":
                        $ketqua = $soHang1 * $soHang2;
                        break;
                    case "Chia":
                        if ($soHang2 != 0) {
                            $ketqua = $soHang1 / $soHang2;
                        } else {
                            $ketqua = "Không thể chia cho 0";
                        }
                        break;
                    case "Mod":
                        if ($soHang2 != 0) {
                            $ketqua = $soHang1 % $soHang2;
                        } else {
                            $ketqua = "Không thể chia cho 0";
                        }
                        break;
                    default:
                        $ketqua = "Phép tính không hợp lệ";
                }
            } else {
                $ketqua = "Vui lòng nhập số hợp lệ";
            }
        }
    ?>
    <div>
        <form method="get">
            <div class="container">
            <h2>TÍNH TOÁN SỐ HỌC</h2>
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
            <input type="submit" value="Cộng" name="operation">
            <input type="submit" value="Trừ" name="operation">
            <input type="submit" value="Nhân" name="operation">
            <input type="submit" value="Chia" name="operation">
            <input type="submit" value="Mod" name="operation">
            </div>
        </form>
    </div>
</body>
</html>
