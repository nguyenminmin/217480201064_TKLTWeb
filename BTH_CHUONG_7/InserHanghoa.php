<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect ($servername, $username, $password, $database);
    if (!$conn){
        die ("Connection failed: ".mysqli_connect_error());
    }

    $MaHang = "";
    $TenHang = "";
    $MaNSX = "";
    $NamSX ="";
    $Gia = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["MaHang"])){
        $MaHang = $_POST["MaHang"];
        
    }
    if (isset($_POST["TenHang"])){
        $TenHang = $_POST["TenHang"];
    }
    if (isset($_POST["MaNSX"])){
        $MaNSX= $_POST["MaNSX"];
    }
    if (isset($_POST["NamSX"])){
        $NamSX = $_POST["NamSX"];
    }
    if (isset($_POST["Gia"])){
        $Gia = $_POST["Gia"];
    }

    $sql = "INSERT INTO `hanghoa`(`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) VALUES ('$MaHang' , '$TenHang' , '$MaNSX' , '$NamSX' , '$Gia')";
    if (mysqli_query($conn , $sql)){
        echo "Thêm dữ liệu thành công";
    }
    else{
        echo "Error: ".$sql. "<br>".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
