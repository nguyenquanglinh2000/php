<?php 

    //ket noi voi server
    include('connect.php');
    

    $username = $_POST['username'];
    $password = md5($_POST['password']) ;
    $query = "SELECT username, password  FROM demo";
        $result = mysqli_query($link, $query);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>'; ;
        if(mysqli_num_rows($result) > 0){
            $i =0; 
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                // echo "$i . ". $row["username"]. "<br/>";
                // echo "$i . ". $row["password"]. "<br/>";  
                // echo "<br/>";
                $listuser = $row["username"];
                $listpass = $row["password"];
                
                // echo '<pre>';
                // print_r(strcmp($username, $checkuser));
                // echo '</pre>'; 

                // echo '<pre>';
                // print_r(strcmp($password, $checkpass));
                // echo '</pre>';
                
                // echo '<pre>';
                // print_r($row["username"]);
                // echo '</pre>';
                // echo '<pre>';
                // print_r($row);
                // echo '</pre>';

                // echo(strcmp($username, $checkuser));
                // echo("ewkvhekvhkh");
                // echo(strcmp($password, $checkpass));

                // echo $username;
                $login = false;
                if($username == $listuser && $password == $listpass){
                    echo " Đăng nhập thành công";
                    $login = true;
                    break;
                }
            }
            if($login == false){
                    echo "Đăng nhập không thành công";
                }
        }
        
?>