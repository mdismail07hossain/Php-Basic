
<?php
$car=array("BMW","TOYOTA","HONDA","MKR-ONE","VCW_10");
echo implode (" , ",$car);
echo "<br><br>";
$array = [1, 2, 3, 'apple', 'banana'];

echo json_encode($array, JSON_PRETTY_PRINT);
echo "<br><br>";

// php array pop
echo "Php Array Pop method <br> <br>";
$nam=array("ismail","munna","rajib","rafi","ali");
array_pop($nam);
print_r($nam); 
echo "<br><br>";

// php array push 
echo "PHP Array Push method <br> <br>";

array_push($nam,"ruka","shown");
print_r($nam);

echo "<br><br>";

// php array merge  
echo "PHP Array merge method <br> <br>";

$id=array("a0","a0","ad03","a0","af05","a0","ah07");
print_r(array_merge($nam,$id));

echo "<br><br>";

// php array shift  

echo "PHP Array Shift method <br> <br>";
$shift =array_shift($nam);
print_r($shift);
echo "<br><br>";

// php array unshift 

echo "PHP Array UnShift method <br> <br>";
array_unshift($nam,"Ismail","Hossain","Ismail","a0","a0","ad03","a0","af05","a0","ah07");
print_r(json_encode($nam));

echo "<br><br>";

// php array unique 
echo "<br>";
echo "<br>";
$name1 = array_count_values($nam);
echo json_encode($name1);
echo "<br>";
echo "<br>";
echo "PHP Array Unique method <br> <br>";
$nam=array_unique($nam);
echo json_encode($nam);
echo "<br>";
echo "<br>";
$name1 = array_count_values($nam);
echo json_encode($name1);

echo "<br><br>";
$variable = 'বিশ্ব';
$text =<<<EOD
হ্যালো, $variable!
    এটা    একটি Heredoc উদাহরণ।
        এটি $variable এর মান দেখাবে।

EOD;
echo '<pre>' . htmlspecialchars($text) . '</pre>';


?>