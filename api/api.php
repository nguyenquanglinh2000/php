<?php 

    $connect = mysqli_connect('localhost', 'root', '', 'API_DATA');
    $arr = array();
    if($connect){
        $sel = "select * from DATA";
        $sql = mysqli_query($connect, $sel);
        if($sql){
            header("Content-Type: JSON");
            $i=0;
            while($row = mysqli_fetch_assoc($sql)){
                $arr[$i]['id'] = $row['id'];
                $arr[$i]['name'] = $row['name'];
                $arr[$i]['age'] = $row['age'];
                $arr[$i]['email'] = $row['email'];
                $i++;
            }
            echo json_encode($arr, JSON_PRETTY_PRINT);
        }
    }
    else{
        echo 'Connect false';
    }


?>