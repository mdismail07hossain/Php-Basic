<?php
require "namespace1.php";
require "namespace2.php";
use Student\A;
use Student1\A as B;

$obj=new A();
$obj->info();
$obj=new B();
$obj->show();
?>