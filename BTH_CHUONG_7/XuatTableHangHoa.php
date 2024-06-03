<!DOCTYPE html>
<html>
<head>
    <title>Danh sách hàng hóa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Danh sách hàng hóa</h2>

<table>
    <tr>
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã nhà sản xuất</th>
        <th>Năm sản xuất</th>
        <th>Giá</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlybanhang";
    
    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM `hanghoa`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Output dữ liệu của mỗi dòng
        while($row = $result->fetch_array()) {
            echo "<tr>
            <td>" . $row["MaHang"]. "</td>
            <td>" . $row["TenHang"]. "</td>
            <td>" . $row["MaNSX"]. "</td>
            <td>" . $row["NamSX"]. "</td>
            <td>" . $row["Gia"]. "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
