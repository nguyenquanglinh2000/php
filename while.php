<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="while.php?type=1">Click</a>
    <div>
        <?php 
        if(isset($_GET["type"])){
            $type = $_GET["type"];
            while($type<10){
                echo str_repeat("*", $type) . "<br />";
                $type++;
            }
        }
            
        ?>
    </div>
    
</body>
</html>