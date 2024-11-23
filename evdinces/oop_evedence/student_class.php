<?php
//Step 1:
class Student {   
   public $id;
   public $name; 
   
   public static $file_path = "data.txt"; 
   
   //---------------constructor---------------//
   function __construct($_id, $_name) {
       $this->id = $_id;
       $this->name = $_name;
   }
  
   //---------------csv function-------------------//
   public function csv() {
       return $this->id . "," . $this->name . PHP_EOL;  // End Of Line or create new line 
   }
   
   //-----------save function-----------------//
   public function save() {
       $students = file(self::$file_path);  	   
       // The file() reads a file into an array.
       file_put_contents(self::$file_path, $this->csv(), FILE_APPEND);
       // The file_put_contents() writes data to a file.
       // Use FILE_APPEND to avoid deleting the existing content of the file.
   }//end save	
       
   
   //---------------display_students-------------//
   public static function display_students() {
       $students = file(self::$file_path);
		
       echo "<b>ID | Name</b><br/>";
	   
       foreach($students as $student) {
           // Trim the line to remove unwanted spaces or newlines
           $student = trim($student);
           
           // Only process non-empty lines
           if (!empty($student)) {
               // Split the line by comma and ensure we have two parts
               $parts = explode(",", $student);
               
               // Check if we have exactly two parts (ID and Name)
               if (count($parts) == 2) {
                   list($id, $name) = $parts;
                   echo "$id | $name<br/>";
               } else {
                   // Handle invalid entry (if the line doesn't have exactly two parts)
                   echo "$id | $name Hello and Welcome:: $student<br/>";
               }
           }
       }
   }   
   //-----------------end functions----------------    

}// Student class


class GraduateStudent extends Student {
    
    public $thesis_topic;  // Additional property for GraduateStudent

    // Constructor to initialize the properties of both Student and GraduateStudent
    public function __construct($_id, $_name, $_thesis_topic) {
        // Call the parent constructor (Student) to initialize $id and $name
        parent::__construct($_id, $_name);
        $this->thesis_topic = $_thesis_topic;
    }

    // Override the cs0v method to include thesis_topic as well
    public function csv() {
        return parent::csv() . $this->thesis_topic . PHP_EOL;
    }

    // Method to display thesis topic
    public function displayThesisTopic() {
        echo "Hello and Welcome: " . $this->thesis_topic . "<br/>";
    }
}


// oop evdence prictecs 
?>

