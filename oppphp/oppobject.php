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

        // Trait oparetor use to inhariad porpartis

        trait Ismail{
            public $age;
            public $email;
            public function info($ages,$emails){
                $this->age=$ages;
                $this->email=$emails .$this->age;
                return $this->email;
            }
        }
        trait Detail {
            public $fathername;
            public $mothername;
            public function det($faname,$moname){
                $this->fathername=$faname;
                $this->mothername=$moname .$this->fathername;
                return $this->mothername;
            }
        }
        trait Address{
            public $houseno;
            public $roda;
            public function add($hono,$rono){
                $this->houseno=$hono;
                $this->roda=$rono .$this->houseno;
                return $this->roda;
            }
        }
        class Myself{
            use Ismail,Detail,Address;
            public function myself(){
                echo "this the main function";
            }
        }
        $obj=new Myself();
        echo $obj->det("<br>Father Name: Azad","<br>Mother Name: Morium");
        echo $obj->info("<br>Age : 25","<br>Email : ismail@gmail.com");
        echo $obj->add("<br>House : Taj Vla","<br> Roda no. : 256/G");

        // protected and private boths diffarenec

        class User{
            protected $nid;
            private $nidno;
            public function Nid($nidn,$nido){
                $this->nidno=$nido;
                $this->nid=$nidn . $this->nidno;
                return $this->nid;
            }
        }
        class Useres extends User{
            public function userdetails($nids){
                echo $nids;
                
            }
        }
        $obj=new Useres();
        // Call Nid method to set $nid, then pass it to userdetails
        $nidValue = $obj->Nid("<br>Md Ismail Hossain", "<br> 83439456<br>");  // Example to set the nid
        $obj->userdetails($nidValue);  // Pass the $nid value to userdetails() method



        // অ্যাবস্ট্র্যাক্ট ক্লাস ঘোষণা
        abstract class Animal {
            // অ্যাবস্ট্র্যাক্ট মেথড (এই মেথডটি child class-এ বাস্তবায়ন করতে হবে)
            abstract public function sound();
            abstract public function sound2();
            
        }

        // Dog ক্লাস যা Animal ক্লাস থেকে উত্তরাধিকার সূত্রে পাওয়া
        class Dog extends Animal {
            // অ্যাবস্ট্র্যাক্ট মেথডের বাস্তবায়ন
            public function sound() {
                echo "Woof! Woof!";  // ডগের আওয়াজ
            }
            public function sound2() {
                echo "Woof! Woof!";  // ডগের আওয়াজ
            }
            
        }

        // Cat ক্লাস যা Animal ক্লাস থেকে উত্তরাধিকার সূত্রে পাওয়া
        class Cat extends Animal {
            // অ্যাবস্ট্র্যাক্ট মেথডের বাস্তবায়ন
            public function sound() {
                echo "Meow! Meow!";  // ক্যাটের আওয়াজ
            }
            public function sound2() {
                echo "Meow! Meow!";  // ক্যাটের আওয়াজ
            }
        }

        // Dog ক্লাসের অবজেক্ট তৈরি
        $dog = new Dog();
        $dog->sound();   // আউটপুট: Woof! Woof!

        echo "<br>";

        // Cat ক্লাসের অবজেক্ট তৈরি
        $cat = new Cat();
        $cat->sound();   // আউটপুট: Meow! Meow!

        // Interface methode use to php 
        echo "<br>";
        interface Student{
            public function show();
        }
        class A implements Student{
            function show(){
                echo "Good Morning  <br> ";
            }
        }
        class B implements Student{
            function show(){
                echo "Hi everyone <br> ";
            }
        }
        class C implements Student{
            function show(){
                echo "Bye see you all";
            }
        }
        $obj=new A();
        $obj->show();
        $obj=new B();
        $obj->show();
        $obj=new C();
        $obj->show();
        ?>