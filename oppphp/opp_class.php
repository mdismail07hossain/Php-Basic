        <?php
        class Car{
        public $name="MB";
        public $model="1200";
        function __destruct(){
            echo "<br> This is Destruct Function";
        }
        function __construct($name,$model){

            echo "This is construct function";
            $this->name=$name;
            $this->model=$model;
        }
        public function info(){
            echo "<br> This is normal Function ";
        }
        }
        // $newobj = new Car();
        // echo $newobj->info();


        class Bike extends Car {
            public $color="Black";

         function __construct($name, $model, $color) {
        // parent::__construct($name, $model);  // Call parent constructor
        // $this->color = $color;  // Set the color property
        $this->name=$name;
        $this->model=$model;
        $this->color=$color;
    }
            public function detaits(){
            // echo "This is child function <br> $this->name . $this->model . $this->color";
            }
        }
       $mybike = new Bike("Yamaha", "R15", "Blue"); 
        $mybike->detaits();
        echo $mybike->name . " is My Bike . <br>" . $mybike->model . " this is my Bike model.<br> " . $mybike->color . " this is my Bike color.<br> " ;
        ?>