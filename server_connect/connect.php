<?php 

    // ket noi voi database
    $servername = "localhost";
    $database = "demo2";
    $usernameserver = "root";
    $passwordserver = "";
    $link = mysqli_connect($servername, $usernameserver, $passwordserver, $database)
        or die(" connect false");
    
    // echo '<pre>';
    // print_r($link);
    // echo '</pre>';
    //$query = "SELECT username, password  FROM thongtinnguoidung";
    // $result = mysqli_query($link, $query);
    // if(mysqli_num_rows($result) > 0){
    //     $i =0; 
    //     while($row = mysqli_fetch_assoc($result)){
    //         $i++;
    //         echo "$i . ". $row["username"]. "<br/>";
    //         echo "$i . ". $row["password"]. "<br/>";  
    //         echo "<br/>";

            
    //     }
    // }
    // else{
    //     echo "Khong co ban ghi nao";
    // }
?>