<?php
namespace Myinfo;
abstract class Me{
   abstract public function maininfo();
}
class Ismail extends Me{
    public $name;
    public $email;
    function maininfo(){
        echo "<br> Abstract Methode work";
    }
     function maininf($namee,$emaill){
        $this->name=$namee;
        $this->email=$emaill.$this->name;
        return $this->email;
    } 
}
?>