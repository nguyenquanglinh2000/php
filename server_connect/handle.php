<?php 

    // Check xem co ton tai even dang ky hay khong

    if(!isset($_POST["username"])){
        die("");
    }

    // Nhung file connect de ket noi voi server
    include('connect.php');
    
    //Khai bao UTF8
    header('Content-Type: text/html; charset=UTF-8');

    //Lay du lieu tu file registration.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Check xem nguoi dung da nhap day du thong tin chua
    if(!$username || !$password){
        echo "Bạn chưa nhập đầy đủ thông tin. <a href='javascrip: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Ma hoa mat khau
    $password = md5($password);

    // insert thong tin vao database   
    $sql = "INSERT INTO domo (username, password) VALUES ('$username', '$password')";
    //Query toi table
    // echo '<pre>';
    // print_r($sql);0
    // echo '</pre>';
    if (mysqli_query($link, $sql)) {
         echo "Quá trình đăng ký thành công. <a href='sign_in.php'>Về Đăng Nhập</a>";
    } else {
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='registration.php'>Thử lại</a>";
    }
    // echo '<pre>';
    // print_r(mysqli_query($link, $sql));
    // echo '</pre>';
    //Dong
    mysqli_close($link);

?>
