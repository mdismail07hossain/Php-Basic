<?php
class Customer{
    public $cusId;
    public $name;

    public static $cus_data="cus_data.txt";

    public function __construct($_cusid,$_name){
        $this->cusId=$_cusid;
        $this->name=$_name;
    }
    public function cusdata(){
        return $this->cusId . ",".$this->name. PHP_EOL;
    }
    public function save_data(){
        
       file_put_contents(self::$cus_data, $this->cusdata(), FILE_APPEND);
    }
    public static function cus_all(){
        $customers=file(self::$cus_data);
         echo "<b>ID | Name</b><br/>";
        foreach($customers as $customer){
            list($cusId,$name)=explode(",",trim($customer));
            echo "$cusId | $name <br>";
        }
    }

}
?>