<?php
class Car{
    public $name="BMW";
    public $model="M-1200";
    public $color="Black";

    function info(){
        return "This is a nice car.";
    }
}
$car=new Car();
echo "The car name is :". $car ->name;
echo"<br>";
echo "The car model is : ". $car ->model;
echo"<br>";
echo "The car color is : ". $car ->color;
echo"<br>";
echo $car->info();
echo"<br>";

class Mycar{
    public $name;
    public $model;
    public $color;

    function set_name($cnama,$mnama,$bnama){
        $this->name =$cnama;
        $this->model =$mnama;
        $this->color =$bnama;
    }
    function get_name(){
        return "this is my car <br>". $this->name." is My car name .<br>" .$this->model." is My car Model .<br>" . $this->color ." is My car color .<br>";
       
    }
}
$mycar=new Mycar();
$mycar->set_name("BMW","M-1200","Black");
echo $mycar-> get_name();
?>