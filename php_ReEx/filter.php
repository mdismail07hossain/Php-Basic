<?php 
$input=[
    "The is  7 O clock",
    "this is our class",
    " this is our batch year 2024",
];
$result=preg_filter('/[0-9]+/', '($0)', $input);
print_r($result);
?>