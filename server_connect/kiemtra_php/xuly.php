<?php 

    //check even
    if(!isset($_POST["name"])){
        die("");
    }
    //connect 
    include("ketnoi.php");

    //Khai bao UTF8
    header('Content-Type: text/html; charset=UTF-8');
    
    //lay data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $thunhap = $_POST["thunhap"];
    $thanhpho = $_POST["tinh_thanhpho"];
    $chinhanh = $_POST["chi_nhanh"];

    //check da nhap du thong tin chua
    if(!$name || !$phone || !$thanhpho || !$thunhap || !$chinhanh){
        echo "Chưa đủ thông tin";
        exit;
    }

    //insert
    $sql = "INSERT INTO THONG_TIN_THE(name, phone, email, thu_nhap, thanh_pho, chi_nhanh) VALUE('$name', '$phone', '$email', '$thunhap', '$thanhpho', '$chinhanh')";

    if(mysqli_query($link, $sql)){
        echo "Quá trình đăng ký thành công.";
   } else {
       echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='index.php'>Thử lại</a>";
   }
?>