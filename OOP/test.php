
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

class human{
    public $name;
    public $sex;
    public $age;

    function __construct($name, $sex, $age){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }
    function get_name(){
        return $this->name;
    }

    function get_sex(){
        return $this->sex;
    }
    
    function get_age(){
        return $this->age;
    }

    // Destruct function
    function __destruct(){
        echo "Anh ten la {$this->name}, {$this->age} tuoi";
        
    }
}

$people = new human("Linh", "Nam", "20");
// echo $people->get_name();
// echo "<br>";
// echo $people->get_sex();
// echo "<br>";
// echo $people->get_age();
// echo "<br>";



?>
</body>
</html>