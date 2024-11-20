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

    ?>