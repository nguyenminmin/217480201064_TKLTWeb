<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm từ dài nhất trong chuỗi</title>
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
        <input type="submit" value="Tìm từ dài nhất">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST['chuoi'];


        function timTuDaiNhat($chuoi) {
            // Tách chuỗi thành các từ
            $mang_tu = explode(" ", $chuoi);

            $chieu_dai_lon_nhat = 0;

            $tu_dai_nhat = "";


            foreach ($mang_tu as $tu) {

                $chieu_dai_tu = strlen($tu);

                if ($chieu_dai_tu > $chieu_dai_lon_nhat) {

                    $tu_dai_nhat = $tu;
                    $chieu_dai_lon_nhat = $chieu_dai_tu;
                }
            }

            return $tu_dai_nhat;
        }

        $tu_dai_nhat = timTuDaiNhat($chuoi);
        echo "Chuỗi đã nhập: '$chuoi'<br>";
        if ($tu_dai_nhat) {
            echo "Từ dài nhất trong chuỗi: '$tu_dai_nhat' (chiều dài: " . strlen($tu_dai_nhat) . ")";
        } else {
            echo "Không tìm thấy từ trong chuỗi!";
        }
    }
    ?>
</body>
</html>
