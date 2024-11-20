 <?php
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

            // Home try by use in php public, protected and private propeetyes

            class MyInfo{
                public $name="Md Ismail";
                private $nidnam="Md Ismail Hossain";
                protected $nidno="12875247";
                private  $marrided="Singel";
                function myinfo (){
                    echo "<br> Private Output  here  <br> $this->nidnam <br> $this->marrided  ";
                }
            }
            class Ismail extends MyInfo{
                function info(){
                    echo $this->myinfo();
                    echo "<br> Protected Outputs are  <br>  $this->nidno  <br>  $this->name ";
                }
            }
            $objInfo=new Ismail();
            $objInfo->info();
    ?>