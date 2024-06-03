<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 10</title>
    <style>
        h1 {
            font-size: 50px;
        }
        p {
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Mảng số nguyên</h1>
    <form action="" method="post">
        <label for="numbers" >Nhập mảng các số nguyên</label><br><br>
        <input type="text" id="numbers" name="numbers" required><br><br>
        <input type="submit" value="Thực hiện">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        function isEven($number) 
        {
            return $number % 2 == 0;
        }

        $input = $_POST["numbers"];

        $numbers = array_map('intval', explode(',', $input));

        echo "<p><br>Mảng vừa nhập: " . implode(", ", $numbers) . "</p>";

        $DemSoLuongSoChan = 0;
        foreach ($numbers as $number) 
        {
            if (isEven($number)) 
            {
                $DemSoLuongSoChan++;
            }
        }
        echo "<p><br>Số lượng số chẵn: $DemSoLuongSoChan</p>";
        
        $TongSoLe = 0;
        foreach ($numbers as $number) 
        {
            if (!isEven($number)) 
            {
                $TongSoLe += $number;
            }
        }
        echo "<p><br>Tổng các số lẻ: $TongSoLe</p>";


        $max = max($numbers);
        $min = min($numbers);
        echo "<p><br>Giá trị lớn nhất: $max</p>";
        echo "<p>Giá trị nhỏ nhất: $min</p>";

        $DaoNguoc = array_reverse($numbers);
        echo "<p><br>Mảng đảo ngược: " . implode(", ", $DaoNguoc) . "</p>";
    }
    ?>
</body>
</html>