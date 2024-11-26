<?php 
class Students{
    public $id;
    public $name;
   
}
class Student extends Students {
    public $batch;
    public $data_file="data.txt";
    public function __construct($_id,$_name,$_batch){
        $this->id=$_id;
        $this->name=$_name;
        $this->batch=$_batch;
    }
    public function give_data(){
        return $this->id.",".$this->name.",".$this->batch .PHP_EOL;
    }
    public function save_data(){
        $student=file(self::$data_file);
        file_put_contents(self::$data_file,$this->give_data(),FILE_APPEND);
    }
     public static function display_process() {
            $student = file(self::$data_file);
        
            echo "
            <table style='margin-left: 50%; padding-bottom: 10; font-size: 1.25rem; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid black; padding: 8px;'>Name</th>
                        <th style='border: 1px solid black; padding: 8px;'>Email</th>
                        <th style='border: 1px solid black; padding: 8px;'>Password</th>
                    </tr>
                </thead>
                <tbody>";
                foreach ($student as $process) {
                list($id, $name, $batch) = explode(",", trim($process));
                echo "
                <tr>
                    <td style='border: 1px solid black; padding: 8px;'>$id</td>
                    <td style='border: 1px solid black; padding: 8px;'>$name</td>
                    <td style='border: 1px solid black; padding: 8px;'>$batch</td>
                </tr>";
            }
            echo "
                </tbody>
            </table>";
        }
}
?>