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
            ?>
    ?>