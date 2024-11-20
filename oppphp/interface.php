 <?php
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
    //  Home Prectice to interface method in php 
    interface Myinfo{
        function myinfo();
    }
    class MyName implements Myinfo{
        function myinfo(){
            echo "<br> Name : Md Ismail Hossain";
        }
    }
    class MyAge implements Myinfo{
        function myinfo(){
            echo "<br> Age : 25.";
        }
    }
    class MyStudy implements Myinfo {
        function myinfo(){
            echo "<br> Study : Diploma Complet";
        }
    } 
    $obj=new MyName();
    $obj->myinfo();    
    $obj=new MyAge();
    $obj->myinfo();    
    $obj=new MyStudy();
    $obj->myinfo();    
           
    ?> 