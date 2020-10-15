<?php 

class sinh_vien{
    public $name;
    protected $id;

    public function __construct($name, $id){
        $this->name = $name;
        $this->id = $id;   
    }

    protected function ds(){
        echo "Sinh vien ten la {$this->name}, ma sinh vien la {$this->id}";
    }
}

class sinh_vien_tinh_nguyen extends sinh_vien{
    public $diem_hoat_dong;

    public function __construct($name, $id, $diem_hoat_dong){
        $this->name = $name;
        $this->id = $id; 
        $this->diem_hoat_dong = $diem_hoat_dong;  
    }
    function ds1(){
        $this->ds();
    }
    function diem(){
        echo "Diem hoat dong cua sinh vien la {$this->diem_hoat_dong}";
    }
}


$sv = new sinh_vien_tinh_nguyen("QuangLinh", "121381", 100);
$sv->ds1();
echo "<br/>";
$sv->diem();

?>