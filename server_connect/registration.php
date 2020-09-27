<?php
            $re = true;
            // // if(!empty($_POST["re_password"]) && !empty($_POST["password"])){
                
            
                
            //     echo '<pre>';
            //     print_r($_POST["re_password"]);
            //     echo '</pre>'; 
            //     echo '<pre>';
            //     print_r($_POST["re_password"]);
            //     echo '</pre>';
                // if($re_password == $password){
                //     $re = true;
                // }
            // }
            
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
            margin: 0px;
            padding: 0px;
        }
        .tong{
            margin: 10px auto;
            width: 500px;
            padding: 10px;
            border :10px solid black;
        }
        .tong div{
            margin-top: 5px;

        }
        .tong h1{
            text-align: center;
            color: red;
        }
        .tong div.a{
            margin-top: 20px;
        }
        .tong div.a label{
            display: inline-block;
            width: 200px;
            text-align: right;
        }
        .tong h1{
            text-align: center;
            color:red;
        }
        .tong .a.b input{
            padding:20px;
        }
        .tong .a.b{
            width:100%;
            display:block;
            text-align:center;
        }
        .b a{
            text-decoration:none;
            color:blue;
        }
        .a span{

        }
        .confirm_password {

        }
    </style>
    
   
</head>
<body>

<div class="tong">
    <form action="handle.php" method="post">
        <h1>Đăng Ký</h1>
        <div class="a">
            <label for="">UserName</label>
            <input type="text" name="username">
        </div>
        
        <div class="a">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>

        <div class="a">
            <label for="">Re-Password</label>
            <input type="password" name="re_password">
            <br>
        <span class="confirm_password">
            wrong confirm password
        </span>
        </div>
        <div>
        </div>

        <div class="a b">
            <input type="submit" name="submit" value="Đăng Ký">
        </div>

        <!--  -->
        
        <div class="b">
            <a href="sign_in.php">Đăng Nhập</a>
        </div>
    </form>
</div>

<p>

</p>
</body>
</html>