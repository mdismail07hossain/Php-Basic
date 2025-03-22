<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Object-Oriented PHP Example</title>
    <style>
        /* Basic Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Main Container */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading Style */
        h1 {
            text-align: center;
            color: #5e5e5e;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Section Styling */
        .section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f9fafb;
            border-left: 4px solid #3498db;
            border-radius: 8px;
        }

        .section h2 {
            font-size: 1.5em;
            color: #3498db;
            margin-bottom: 10px;
        }

        .section p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        .info {
            background-color: #ecf0f1;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: white;
            border-radius: 0 0 8px 8px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Object-Oriented Programming in PHP</h1>

    <div class="section">
        <h2>Car Details</h2>
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
                echo "<div class='info'>";
                echo "Car name: " . $this->name . "<br>";
                echo "Model name: " . $this->model . "<br>";
                echo "Color name: " . $this->color . "<br>";
                echo "</div>";
            }
        }

        // Create Car object
        $about = new Car("Bmw", "Rc-271", "Royle-Black");
        $about->info();
        ?>
    </div>

    <div class="section">
        <h2>Bike Details</h2>
        <?php
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
        echo "<div class='info'>";
        echo "The bike name is " . $p->name . ", the bike model is " . $p->model . ", the bike color is " . $p->color . ", and the bike speed/cc is " . $p->speed . "<br>";
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>Home Details</h2>
        <?php
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
        echo "<div class='info'>";
        echo $home->owner . " is the owner of this House.<br>";
        echo "The name of the House is " . $home->name . ".<br>";
        echo "The model of the house is " . $home->model . ".<br>";
        echo "The color of the house is " . $home->color . ".<br>";
        echo "The house is " . $home->speed . ".<br>";
        echo $home->name1 . "<br>";
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>About Me</h2>
        <?php
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
        echo "<div class='info'>";
        echo $aboutme->owner . " the<br>";
        echo $aboutme->name . " the<br>";
        echo $aboutme->model . " the<br>";
        echo $aboutme->color . " the<br>";
        echo $aboutme->speed . " the<br>";
        echo $aboutme->address . "<br>";
        echo "</div>";
        ?>
    </div>

</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2025 Object-Oriented PHP Example. All Rights Reserved. | <a href="https://www.example.com">Visit us</a></p>
</footer>

</body>
</html>
