<?php
namespace Frients;
interface Frient{
    function bundhu();
}
abstract class Ismail implements Frient{
 abstract function bundh();
 function info(){
    echo "Hello I'm Ismail <br>";
 }
        
    
}
class Munna extends Ismail{
    function bundhu(){
        echo "Hello I'm Munna <br>";
    }
     function bundh(){
        echo "Hello I'm Rajib <br>";
    }
}

?>