<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect ($servername, $username, $password, $database);
    if (!$conn){
        die ("Connection failed: ".mysqli_connect_error());
    }

$MaHD = "";
$MaKH = "";
$MaHang = "";
$SoLuong ="";
$ThanhTien = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["MaHang"])){
        $MaHang = $_POST["MaHang"];
    }
    if (isset($_POST["MaHD"])){
        $MaHD = $_POST["MaHD"];
    }
    if (isset($_POST["MaKH"])){
        $MaKH= $_POST["MaKH"];
    }
    if (isset($_POST["SoLuong"])){
        $SoLuong = $_POST["SoLuong"];
    }
    if (isset($_POST["ThanhTien"])){
        $ThanhTien = $_POST["ThanhTien"];
    }

    $sql = "INSERT INTO `hoadon`(`MaHD`, `MaKH`, `MaHang`, `SoLuong`, `ThanhTien`) VALUES ('$MaHD' , '$MaKH' , '$MaHang' , '$SoLuong' , '$ThanhTien')";
    if (mysqli_query($conn , $sql)){
        echo "Thêm dữ liệu thành công";
    }
    else{
        echo "Error: ".$sql. "<br>".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
