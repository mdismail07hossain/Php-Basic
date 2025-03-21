<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>opp</title>
</head>
<body>

<?php

// Base class Car
class Car {
    public $name;
    public $model;
    public $color;

    // Constructor
    public function __construct($name, $model, $color) {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }

    // Method to display car info
    public function info() {
        echo "Car name is: " . $this->name . "<br>";
        echo "Model name is: " . $this->model . "<br>";
        echo "Color name is: " . $this->color . "<br>";
    }
}

// Create Car object
$about = new Car("Bmw", "Rc-271", "Royle-Black");
$about->info();  // Call the info() method

echo "<br>";

// Child class Bike extends Car
class Bike extends Car {
    public $speed;

    // Constructor
    public function __construct($name, $model, $color, $speed) {
        parent::__construct($name, $model, $color); // Calling the parent constructor
        $this->speed = $speed;
    }

    // Method to show speed
    public function showSpeed() {
        return "Run first";
    }
}

// Create Bike object
$p = new Bike("Honda", "VX-2007", "Black", "150");
echo "The bike name is " . $p->name . ", the bike model is " . $p->model . ", the bike color is " . $p->color . ", and the bike speed/cc is " . $p->speed . "<br>";

echo "<br>";

// Child class Home extends Bike
class Home extends Bike {
    public $owner;
    public $name1 = "Hello";

    // Constructor
    public function __construct($owner, $name, $model, $color, $speed) {
        parent::__construct($name, $model, $color, $speed); // Calling the parent constructor
        $this->owner = $owner;
    }
}

// Create Home object
$home = new Home("Md Ismail Hossain", "Tajvla", "Duplex", "skyblue", "three");
echo $home->owner . " is the owner of this House.<br>";
echo "The name of the House is " . $home->name . ".<br>";
echo "The model of the house is " . $home->model . ".<br>";
echo "The color of the house is " . $home->color . ".<br>";
echo "The house is " . $home->speed . ".<br>";
echo $home->name1 . "<br>";

echo "<br>";

// Child class Me extends Home
class Me extends Home {
    public $address;

    // Constructor
    public function __construct($owner, $name, $model, $color, $speed, $address) {
        parent::__construct($owner, $name, $model, $color, $speed); // Calling the parent constructor
        $this->address = $address;
    }
}

// Create Me object
$aboutme = new Me("Ismail", "NIla", "Tiplex", "Black", "two", "Dhaka -1207");
echo $aboutme->owner . " the<br>";
echo $aboutme->name . " the<br>";
echo $aboutme->model . " the<br>";
echo $aboutme->color . " the<br>";
echo $aboutme->speed . " the<br>";
echo $aboutme->address . "<br>";

?>

</body>
</html>
