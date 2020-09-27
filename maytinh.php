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
        .tong div.aa{
            margin-top: 20px;
        }
        .tong div.aa span{
            display: inline-block;
            width: 200px;
            text-align: right;
        }
        .tong h1{
            text-align: center;
            color:red;
        }
        /* .tong div.aa input{
            display: inline-block;

        } */
        
    </style>
</head>
<body>
    <?php
        $num1 = "";
        $num2 = "";
        $tinh = "";
        $sum = "";

        if(isset($_POST["so1"]) && isset($_POST["so2"]) && isset($_POST["dau"])){
            $num1 = $_POST["so1"];
            $num2 = $_POST["so2"];
            $tinh = $_POST["dau"];
        }
        if(is_numeric($num1) && is_numeric($num2)){
            switch ($tinh) {
                case '+':
                    $sum = $num1 + $num2;
                    break;
                case '-':
                    $sum = $num1 - $num2;
                    break;
                case '*':
                    $sum = $num1 * $num2;
                    break;
                case '/':
                    if($num2 == 0){
                        $sum = "So 2 phai khac 0";
                    }
                    else{
                        $sum = $num1 / $num2;
                    }
                    break;
                default:
                    
                    break;
            }
        }
        else{
            $sum = "Khong thuc hien duoc";
        }
        
    ?>
    <div class="tong">
        <form action="#" method="post"name="maytinh" >
        <h1>Máy Tính</h1>
            <div class="aa">
                <span>So thu nhat</span>
    
                <input  type="text" name="so1" value="<?php echo $num1;?>">
            </div>
            
            <div class="aa">
                <span>Nhap phep toan</span>
                <input  type="text"  name="dau"  value="<?php echo $tinh;?>">
            </div>
            
            <div class="aa">
                <span>So thu 2</span>
                <input  type="text" name="so2"  value="<?php echo $num2;?>"> 
            </div>
            <div class="aa">
                <input type="submit" name="ketqua" value="Ket Qua"> 
            </div>
            <div class="aa">
                <p>Ket qua la: <?php if($sum != null){
                    echo $sum;
                }
                else{
                    echo $sum = 0;
                }
                ?></p>
                
            </div>
        </form>
    </div>
</body>
</html>