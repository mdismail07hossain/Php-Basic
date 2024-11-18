<?php
// static object call 

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

// dynamic object call use get/set


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

// dynamic object call use get/set

class Bike{
    public $name;
    public $model;

    function set_name($bikename,$bikemodel){
        $this->name=$bikename;
        $this->model=$bikemodel;
    }
    function get_name(){
        return "Bike name is :". $this->name . "<br>". "Bike model is :". $this->model;
    }
}
$mybike=new Bike();
$mybike->set_name("HONDA","AC-1007");
echo $mybike->get_name();

// dynamic object call with out  use get/set

class Men{
    public $name;
    public $age;

    function info($uname, $aname){
    $this->age = $aname;
    $this->name = $uname . $this->age;
    return $this->name;
}

}
$men=new Men();
echo $men->info("<br> Name: Ismail", " <br> Age: 25");
?>