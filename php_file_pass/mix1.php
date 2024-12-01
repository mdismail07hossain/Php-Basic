<?php
namespace Myname;
interface Hossain{
    function mainme($agee,$numberr);
}
class MyDetails implements Hossain{
    public $age;
    public $number;
    function mainme($agee,$numberr){
        $this->age=$agee;
        $this->number=$numberr .$this->age;
        return $this->number;
    }
}
?>