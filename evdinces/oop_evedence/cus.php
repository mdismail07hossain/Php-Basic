<?php
// make a class name customer 
class Customer{
    // declear two proparties
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
        // this method to how file save 
       file_put_contents(self::$cus_data, $this->cusdata(), FILE_APPEND);
    }
    public static function cus_all() {
            $customer = file(self::$cus_data);
        // main method 
            echo "
            <table style='margin-left: 50%; padding-bottom: 10; font-size: 1.25rem; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid black; padding: 8px;'>Name</th>
                        <th style='border: 1px solid black; padding: 8px;'>Email</th>
                    </tr>
                </thead>
                <tbody>";
                foreach ($customer as $customers) {
                list($cusId, $name,) = explode(",", trim($customers));
                echo "
                <tr>
                    <td style='border: 1px solid black; padding: 8px;'>$cusId</td>
                    <td style='border: 1px solid black; padding: 8px;'>$name</td>
                </tr>";
            }
            echo "
                </tbody>
            </table>";
        }
        

}
?>