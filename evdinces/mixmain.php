<?php
require "mix.php";
require "mix1.php";
use Myinfo\Ismail;
use Myname\MyDetails;
$obj=new Ismail();
echo $obj->maininfo();
echo $obj->maininf("<br> Md Ismail HOssain","<br> ismail07@gmail.com");
echo "<br>";
$obj= new MyDetails();
echo $obj->mainme("<br>25","<br>0135462577");
?>