<?php
require "namespace1.php";
require "namespace2.php";
use Student\A;
use Student1\A as B;
use Studentinfo\D;

$obj=new D();
$obj->stuinfo();
$obj=new A();
$obj->info();
$obj=new B();
$obj->show();

?>