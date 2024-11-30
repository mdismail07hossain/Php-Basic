<?php 
$foods = array("pasta","steak","fish","potatoes","noddues","shup","potato");
// It's call in the whole word  
$result=preg_grep("/p/",$foods);
print_r($result);
//  It's call in the just frist word 
echo '<br>';
$result1=preg_grep("/^p/",$foods);
print_r($result1)
?>