<?php 

    // $string = "Nguyen Quang Linh";
    // $str = "/Linhh/";

    // echo preg_match($str, $string, $math);
    // echo '<pre>';
    // print_r($math);
    // echo '</pre>';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .all{
            margin: 10px auto;
            width: 500px;
            height: 650px;
            border: 2px solid red;
        }
        .head{
            height: 10%;
            color: white;
            background-color: orange;
            font-size: 20px;
            font-weight: bold;
        }
        .head p{
            padding: 10px;
        }
        .a{
            margin: 50px 50px;
            width:80%;
            height: 63px;
            border-bottom: 1px solid grey;
            color: grey;
        }
        .a input{
            
            padding: 10px 61px;
            float: right;
            margin: -6% 10px;
        }
        .a a{
            text-decoration: none;
            color: red;
            padding-left:50px;
            float: right;
            margin-right:40%;
            margin-top:1%;
        }
        .button{
            width: 100%;
            overflow:hidden;
            height: 103px;
            background-color:#8080803b;
        }
        .button input{
            padding: 20px 40px;
            float: right;
            margin: 4% 4%;
            border-radius: 40px;
            color:  white;
            background-color:orange;
            font-size:20px;
        }
        .a p{
            color:red;
            margin-left:30%;
        }
    </style>

<body>
    <?php
        require_once 'preg_sp.php'; 
        
        $error =  "";
        $email = "";
        if(!empty($_POST)){
            
            $email = $_POST["email"];
            if(check_input($email, "email") == false){
                $error = "Khong hop le!!!";
                $email = "";
            }
        }


        if(!empty($_POST["pass"])){
            $password = $_POST["pass"];
            if(check_input($password, "pass") == false){
                $error = "Khong hop le!!!";
                $password = "";
            }
        }
    ?>
    
    <div class="all">
        <form action="preg.php" method="post">
            <div class="head">
                <p>Login to your account</p>
            </div>

            <div class="a">
                <label for="">Email</label>
                <input type="text" name = "email" value="<?php echo $email; ?>" >
                <p><?php echo $error; ?></p>
            </div>

            <div class="a">
                <label for="">Username</label>
                <input type="text" name= "user">
            </div>

            <div class="a">
                <label for="">Passworld</label>
                <input type="password" name="pass" value="<?php echo $email; ?>" >
                <p><?php echo $error; ?></p>
                <div>
                    <a href="#">Forgot password?</a>
                </div>
            </div>

            <div class="a">
                <label for="">Website</label>
                <input type="text" name="web">
            </div>
            
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>