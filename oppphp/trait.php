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

            ?>