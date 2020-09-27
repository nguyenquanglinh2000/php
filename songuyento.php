<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $num = "";
    $dem = 0;
    $ketqua = null;
    if(isset($_POST["input"])){
        $num = $_POST["input"]; 
    }
    if(is_numeric($num)){
        if($num == 2){
            $ketqua = "La so nguyen to";
        }
        if($num >2){
            for($i=2; $i <= sqrt($num); $i++){
                if($num % $i == 0){
                    $dem ++;
                }
            }
            if($dem == 0){
                $ketqua = "La so nguyen to";
            }
            else{
                $ketqua = "Khong la so nguyen to";
            }
        }
        else{
            $ketqua = "Khong la so nguyen to";
        }
    }
    
?>



    <form action="songuyento.php" method="post">
        <h1>Kiem tra so nguyen to</h1>
        <label for="">Nhap</label>
        <input type="text" name="input" value="<?php echo $num ?>">
        <input type="submit" name="submit" value="Click">
        <p>Ket qua la: <?php if($ketqua != null){
                    echo $ketqua;
                }
                else{
                    echo $ketqua = "Nhap gia tri can check";
                }
                ?>
        </p>
    </form>
</body>
</html>