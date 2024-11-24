<?php
class Student{
    public $User_ID;
    public $Name;
    public $Batch;

    public static $student_data="student_data.txt";

    public function __construct($_user_id,$_name,$_batch) {
        $this->User_ID = $_user_id;
        $this->Name=$_name;
        $this->Batch=$_batch;
  
    }
    public function data_call(){
        return $this->User_ID . "," . $this->Name . "," . $this->Batch . PHP_EOL;
    }
    public function data_sava(){
        $students= file(self :: $student_data);
        file_put_contents(self::$student_data,$this->data_call(), FILE_APPEND);
    }
    public static function result(){
        $students= file(self:: $student_data);

        echo "<b>Id | Name | Batch</b> <br><br>";
        foreach($students as $student){
            list($User_ID,$Name,$Batch)=explode(",",trim($student));
            echo "$User_ID | $Name | $Batch";
        }
    }
}
?>