<?php
    $ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $ketnoi['dbname'] = 'thongtin'; //Đây là tên của Database
    $ketnoi['username'] = 'root'; //Tên sử dụng Database
    $ketnoi['password'] = '';//Mật khẩu của tên sử dụng Database
    @mysql_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}")
    or
        die("Không thể kết nối database");
    @mysql_select_db(
        "{$ketnoi['dbname']}") 
    or
        die("Không thể chọn database");
    
    // $ketnoi = mysql_connect("localhost", "root", "") or die("false");
    // $query = "SELECT username FROM thongtinnguoidung";
    // $result = mysql_query($query, $ketnoi);
    // if(mysql_num_rows( $result) > 0){
    //     $i =0; 
    //     while($row = mysqli_fetch_assoc($result)){
    //         $i++;
    //         echo "$i . ". $row["username"]. "<br/>";
    //         echo "$i . ". $row["password"]. "<br/>";  
    //         echo "$i . ". $row["age"]. "<br/>";
    //         echo "<br/>";
    //     }
    // }
    // else{
    //     echo "Khong co ban ghi nao";
    // }


?>

