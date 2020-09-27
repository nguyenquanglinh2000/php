
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form2.php" method="post">
    <h1>Đăng Ký</h1>
    <div class="a">
        <label for="">UserName</label>
        <input type="text" name="username">
    </div>
    <input type="submit" value="Click">
    </form>
<?php
    if(!empty($_POST['username'])){
       $username = $_POST["username"];
        echo $username . "<br/>";
        echo addslashes($username); 
    }
    
?>
</body>
</html>