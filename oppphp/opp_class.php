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
        // $this->name=$name;
        // $this->model=$model;
        
    }
            public function detaits(){
            // echo "This is child function <br> $this->name . $this->model . $this->color";
            }
        }
        $mybike = new Bike("Yamaha", "R15", "Blue"); 
        $mybike->detaits();
        echo $mybike->name . " is My Bike . <br>" . $mybike->model . " this is my Bike model.<br> " . $mybike->color . " this is my Bike color.<br> " ;
         
 
        class MyClass{
            public static $value = "Hello 1, 2, 3, 4 Hello! <br>";
            public static function display(){
                echo self::$value;
            }
        }

        echo MyClass::$value;
        MyClass::display(); 

    /*    class MyClass{
            public static $name = "Hazrat Ali";

            public static function myName(){
                return "Hello Hazrat Ali! how are you?";
            }
        }

        echo MyClass::myName();
        echo "<br>";
        echo MyClass::$name;
 
*/

     class ParentClass {
        public function sayHello() {
            return "Hello from ParentClass!";
        }
    }

    class ChildClass extends ParentClass {
        public function sayHello() {
            return parent::sayHello() . " Hello from ChildClass!";
        }
    }

    $obj = new ChildClass();
    echo $obj->sayHello();  // আউটপুট: Hello from ParentClass! Hello from ChildClass!

    $obj instanceof ChildClass; 


     class Animal {
        public function speak() {
            echo "Animal is speaking.";
        }
    }

    class Dog extends Animal {
        public function speak() {
            echo "Dog is barking.";
        }
    }

    $dog = new Dog();

    // instanceof দিয়ে চেক করা
    if ($dog instanceof Animal) {
        echo "The object is an instance of Dog.";
    } else {
        echo "The object is not an instance of Dog.";
    }
 

    class Parentc{
        public function parentClass(){
            echo "This is parent class!";
        }
    }

    class Children extends Parentc{
        public function childClass(){
            echo "This is child class!";
        }
    }

    $child2 = new Children();

    if($child2 instanceof Childre){
        echo "The object is an instance of Parent!";
    }else{
        echo "The boject is not an instance of Parent!";
    }
?> 