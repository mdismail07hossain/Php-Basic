        <?php
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
                    
                    // Trait use in php 

                    trait Student{
                        public $name="Md Ismail";
                        public function studentsname(){
                           return $this->name;
                        }
                    }
                    trait StudentIDs{
                        public $ids="1285247";
                        public function studentsids(){
                            return $this->ids;
                        }
                    }
                    trait StudentClass{
                        public $stuclass="PWED-62";
                        public function studentsclass(){
                            return $this->stuclass;
                        }
                    }
                    class StudentsInfo{
                        use Student,StudentIDs,StudentClass;
                        function info(){
                            echo "<br> This is all Data of students.";
                        }
                    }
                            $obj=new StudentsInfo();
                            echo "<br>";
                        echo $obj->studentsname();
                            echo "<br>";
                        echo $obj->studentsids();
                            echo "<br>";
                        echo $obj->studentsclass();
                        echo $obj->info();


            ?>