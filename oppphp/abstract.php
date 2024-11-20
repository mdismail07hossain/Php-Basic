 
 <?php
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


        // Abestract ar kicu try 

        abstract class Student{
            abstract function stuinfo();
            abstract function stufo();
          }
        class Studentinfo extends Student{
            function stuinfo(){
                echo "<br> All Students Information Here !";
            }
            function stufo(){
                echo "<br> All Students Information Here !";
            }
        }
        class School extends Student{
            function stuinfo(){
                echo "<br> School Name is Monipur High School & Collage .";
            }
            function stufo(){
                echo "<br> School Name is Monipur High School & Collage .";
            }
        }
    $obj=new Studentinfo();
    $obj->stuinfo();
    $obj=new School();
    $obj->stuinfo();
    $obj=new Studentinfo();
    $obj->stufo();
    $obj=new School();
    $obj->stufo();
?>