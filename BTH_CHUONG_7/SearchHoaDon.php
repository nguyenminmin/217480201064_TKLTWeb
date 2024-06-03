<!DOCTYPE html>
<html>
<head>
    <title>Danh sách khách hàng</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Danh sách khách hàng</h2>

<form action="SearchHoaDon.php" method="post">
    <input type="text" name="MaHD" placeholder="Nhập mã hóa đơn">
    <input type="submit" value="Search">
</form>

<table>
    <tr>
        <th>Mã hóa đơn</th>
        <th>Mã Khách hàng</th>
        <th>Mã Hàng</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>
<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["MaHD"])) {
            $MaHD = $_POST["MaHD"];

            $sql = "SELECT * FROM `hoadon` WHERE `MaHD` = '$MaHD'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['MaHD'] . "</td>";
                        echo "<td>" . $row['MaKH'] . "</td>";
                        echo "<td>" . $row['MaHang'] . "</td>";
                        echo "<td>" . $row['SoLuong'] . "</td>";
                        echo "<td>" . $row['ThanhTien'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo "<tr><td colspan='5'>No Records</td></tr>";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }

    mysqli_close($conn);
?>
</table>

</body>
</html>

