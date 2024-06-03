<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 14</title>
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
        input[type="number"] {
            font-size: 18px;
            padding: 5px;
            margin-left: 10px;
        }
        textarea {
            font-size: 18px;
            padding: 10px;
        }
        button {
            font-weight: bold;
            padding: 10px 20px;
            margin-top: 10px;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            border: 1px solid black;
            padding: 10px 25px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="hang">Số hàng:</label>
        <input type="number" id="hang" name="hang" required min="1"><br><br>
        <label for="cot">Số cột:</label>
        <input type="number" id="cot" name="cot" required min="1"><br><br>
        <label for="ma_tran">Ma trận:</label><br><br>
        <textarea name="ma_tran" id="ma_tran" rows="8" cols="82" required></textarea><br><br>
        <button type="submit" name="hanh_dong" value="lon_nhat">Tìm số lớn nhất</button>
        <button type="submit" name="hanh_dong" value="nho_nhat" style="margin-left: 20px;">Tìm số nhỏ nhất</button>
        <button type="submit" name="hanh_dong" value="tong" style="margin-left: 20px;">Tính tổng các số</button>
        <button type="submit" name="hanh_dong" value="in" style="margin-left: 20px;">In ma trận</button><br><br>
    </form>

    <?php
    // Hàm chuyển đổi chuỗi nhập vào thành ma trận
    function chuyenDoiMaTran($input) 
    {
        $dong = explode("\n", $input);
        $ma_tran = [];
        foreach ($dong as $dong_ma_tran) 
        {
            $hang = preg_split('/\s+|,/', trim($dong_ma_tran));
            $ma_tran[] = array_map('floatval', $hang);
        }
        return $ma_tran;
    }

    // Hàm tìm số lớn nhất trong ma trận
    function timSoLonNhat($ma_tran) 
    {
        $max = $ma_tran[0][0];
        foreach ($ma_tran as $hang) 
        {
            foreach ($hang as $phan_tu) 
            {
                if ($phan_tu > $max) 
                {
                    $max = $phan_tu;
                }
            }
        }
        return $max;
    }

    // Hàm tìm số nhỏ nhất trong ma trận
    function timSoNhoNhat($ma_tran) 
    {
        $min = $ma_tran[0][0];
        foreach ($ma_tran as $hang) 
        {
            foreach ($hang as $phan_tu) 
            {
                if ($phan_tu < $min) 
                {
                    $min = $phan_tu;
                }
            }
        }
        return $min;
    }

    // Hàm tính tổng các số trong ma trận
    function tinhTong($ma_tran) 
    {
        $tong = 0;
        foreach ($ma_tran as $hang) 
        {
            foreach ($hang as $phan_tu) 
            {
                $tong += $phan_tu;
            }
        }
        return $tong;
    }

    // Hàm in ra màn hình các phần tử trong ma trận
    function inMaTran($ma_tran) 
    {
        foreach ($ma_tran as $hang) 
        {
            echo implode('  ', $hang) . '<br>';
        }
    }

    // Xử lý yêu cầu từ menu
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hanh_dong'])) 
    {
        $ma_tran = chuyenDoiMaTran($_POST['ma_tran']);
        switch ($_POST['hanh_dong']) 
        {
            case 'lon_nhat':
                echo "Số lớn nhất trong ma trận: " . timSoLonNhat($ma_tran);
                break;
            case 'nho_nhat':
                echo "Số nhỏ nhất trong ma trận: " . timSoNhoNhat($ma_tran);
                break;
            case 'tong':
                echo "Tổng các số trong ma trận: " . tinhTong($ma_tran);
                break;
            case 'in':
                echo "<table>";
                foreach ($ma_tran as $hang) 
                {
                    echo "<tr>";
                    foreach ($hang as $phan_tu) 
                    {
                        echo "<td>$phan_tu</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                break;
            default:
                echo "Hành động không hợp lệ!";
                break;
        }
    }
    ?>
</body>
</html>
