<?php
class Student{
    public $id;
    public $name;
    public static $data_file= "data.txt";

    public function __construct($_id,$_name){
        $this->id=$_id;
        $this->name=$_name;
    }
    public function stu_data(){
        return $this->id . ",".$this->name .PHP_EOL;
    }
    public function save_result(){
        $students=file(self::$data_file);
        file_put_contents(self::$data_file,$this->stu_data(),FILE_APPEND);
    }
public static function result() {
    $customer = file(self::$data_file);
    
    echo "
    <style>
        /* General table styling */
        table {
            width: 20%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: 'Arial', sans-serif;
        }
        
        /* Table header styling */
        thead {
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }
        
        th {
            padding: 12px;
            font-size: 1.2rem;
        }
        
        /* Table row and cell styling */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #ddd;
        }
        
        td {
            text-align: center;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
        }

        /* Add some spacing and border styling to the table container */
        .table-container {
            
            border-radius: 8px;
            overflow: hidden;
        }

        /* Style for the table caption (optional) */
        caption {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>

    <div class='table-container'>
        <table>
            <caption>Student List</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>";
            
            foreach ($customer as $customers) {
                list($id,$name) = explode(",", trim($customers));
                echo "
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                </tr>";
            }
            
            echo "
            </tbody>
        </table>
    </div>";
}

}
?>