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
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST["MaKH"])){
            $MaKH = $_POST["MaKH"];
        }
    }
    $sql = "DELETE FROM `khachhang` WHERE `MaKH` = '$MaKH'";
    if (mysqli_query($conn , $sql)){
        echo "Xóa dữ liệu thành công";
    }
    else{
        echo "Error: ".$sql. "<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>