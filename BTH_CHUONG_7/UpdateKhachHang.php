<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect ($servername, $username, $password, $database);
    if (!$conn){
        die ("Connection failed: ".mysqli_connect_error());
    }
    $MaKH ="";
    $TenKH ="";
    $NamSinh ="";
    $DienThoai ="";
    $DiaChi ="";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST["MaKH"])){
            $MaKH = $_POST["MaKH"];
        }
        if (isset($_POST["TenKH"])){
            $TenKH = $_POST["TenKH"];
        }
        if (isset($_POST["NamSinh"])){
            $NamSinh = $_POST["NamSinh"];
        }
        if (isset($_POST["DienThoai"])){
            $DienThoai = $_POST["DienThoai"];
        }
        if (isset($_POST["DiaChi"])){
            $DiaChi = $_POST["DiaChi"];
        }
    }
    $sql = "UPDATE `khachhang` SET `TenKH` = '$TenKH', `NamSinh` = '$NamSinh', `DienThoai` = '$DienThoai', `DiaChi` = '$DiaChi' WHERE `MaKH` = '$MaKH'";
    if (mysqli_query($conn , $sql)){
        echo "Cập nhật dữ liệu thành công";
    }
    else{
        echo "Error: ".$sql. "<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>