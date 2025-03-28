<?php
// Ascending Order (ঊর্ধ্বক্রম) 
// =>Ascending order মানে হলো ছোট থেকে বড় ক্রমে সাজানো। যেমন: 1, 2, 3, 4, 5 বা A, B, C, D.
// ---------------------- PHP-তে Ascending Order এর উদাহরণ: --------------------
// <!-- ১. Array Sorting (সাধারণ array): --->

$numbere = array(5, 7, 3, 9, 2, 1);
sort($number);
print_r($number);
// Output: Array ( [Karim] => 20 [Mina] => 30 [Rahim] => 25 )

// <!-- ২. Associative Array সর্টিং (মান অনুসারে): -->
$age = array("Rahim"=>"25", "Karim"=>"20", "Mina"=>"30");
arsort($age);
print_r($age);
// Output: Array ( [Mina] => 30 [Rahim] => 25 [Karim] => 20 )
// ৩. Associative Array সর্টিং (কী অনুসারে):
$age = array("Rahim"=>"25", "Karim"=>"20", "Mina"=>"30");
krsort($age);
print_r($age);
// Output: Array ( [Rahim] => 25 [Mina] => 30 [Karim] => 20 )
// Descending Order (নিম্নক্রম)
// Descending order মানে হলো বড় থেকে ছোট ক্রমে সাজানো। যেমন: 5, 4, 3, 2, 1 বা D, C, B, A.
// PHP-তে Descending Order এর উদাহরণ:
// ১. Array সর্টিং (সাধারণ array):
$numbers = array(4, 2, 8, 6);
rsort($numbers);
print_r($numbers);
// Output: Array ( [0] => 8 [1] => 6 [2] => 4 [3] => 2 )
// ২. Associative Array সর্টিং (মান অনুসারে):
$age = array("Rahim"=>"25", "Karim"=>"20", "Mina"=>"30");
arsort($age);
print_r($age);
// Output: Array ( [Mina] => 30 [Rahim] => 25 [Karim] => 20 )
// ৩. Associative Array সর্টিং (কী অনুসারে):
$age = array("Rahim"=>"25", "Karim"=>"20", "Mina"=>"30");
krsort($age);
print_r($age);
// Output: Array ( [Rahim] => 25 [Mina] => 30 [Karim] => 20 )
// 💯📶Multidimensional Array সর্টিং
// 📶Ascending Order:
$students = array(
    array("name" => "Rahim", "score" => 85),
    array("name" => "Karim", "score" => 78),
    array("name" => "Mina", "score" => 92)
);

// Score অনুসারে সর্টিং
usort($students, function($a, $b) {
    return $a['score'] - $b['score'];
});
print_r($students);
// Output: Karim (78), Rahim (85), Mina (92)
// 📶Descending Order:
$students = array(
    array("name" => "Rahim", "score" => 85),
    array("name" => "Karim", "score" => 78),
    array("name" => "Mina", "score" => 92)
);

// Score অনুসারে সর্টিং
usort($students, function($a, $b) {
    return $b['score'] - $a['score'];
});
print_r($students);
// Output: Mina (92), Rahim (85), Karim (78)
//💯📶-------Reversing String Values in a Multidimensional Array-------💯📶
$people = array(
    array("Name" => "Rahim", "Age" => "25", "City" => "Dhaka"),
    array("Name" => "Karim", "Age" => "20", "City" => "Chittagong"),
    array("Name" => "Mina", "Age" => "30", "City" => "Sylhet")
);

// Reverse the string values in the multidimensional array
$reversed = array_map(function($person) {
    foreach ($person as $key => $value) {
        // Reverse each string value
        if (is_string($value)) {
            $person[$key] = strrev($value);
        }
    }
    return $person;
}, $people);

print_r($reversed);
// Output: Array ( [0] => Array ( [Name] => mihaR [Age] => 52 [City] => akahD ) [1] => Array ( [Name] => miraK [Age] => 02 [City] => gnogattihC ) [2] => Array ( [Name] => aniM [Age] => 03 [City] => tehlyS ) )

// সর্টিং ফাংশনগুলোর সংক্ষিপ্ত বিবরণ:

// sort() - সাধারণ array কে ascending order এ সাজায়

// rsort() - সাধারণ array কে descending order এ সাজায়

// asort() - Associative array কে value অনুসারে ascending order এ সাজায়

// arsort() - Associative array কে value অনুসারে descending order এ সাজায়

// ksort() - Associative array কে key অনুসারে ascending order এ সাজায়

// krsort() - Associative array কে key অনুসারে descending order এ সাজায়

// usort() - User-defined comparison function ব্যবহার করে array সাজায়

//♨️ Array Operations in PHP (Bangla Explanation with Examples)
// 1. Array Slice vs Splice in PHP
// PHP-তেও Slice (অপরিবর্তনীয়) আৰু Splice (পরিবর্তনশীল) ব্যৱহাৰ কৰা হয়।

// Array Slice (অপরিবর্তনীয়)
// array_slice() এটা Array-ৰ অংশ কাটি উলিয়ায় কিন্তু মূল Array-ত কোনো পৰিবৰ্তন নকৰে।

// সিনট্যাক্স: array_slice(array, startIndex, length)

// উদাহৰণ:
$fruits = ["Apple", "Banana", "Mango", "Orange", "Lichi"];
$slicedFruits = array_slice($fruits, 1, 3); // Index 1ৰ পৰা 3টা Element ল'ব
print_r($slicedFruits); // ["Banana", "Mango", "Orange"]
print_r($fruits); // মূল Array অপরিবর্তিত
// Array Splice (পরিবর্তনশীল)
// array_splice() এ Array-ৰ অংশ কাটি পেলায় বা নতুন Element যোগ কৰে (মূল Array পৰিবৰ্তন কৰে)।

// সিনট্যাক্স: array_splice(array, startIndex, deleteCount, newItems)

// উদাহৰণ:
$fruits = ["Apple", "Banana", "Mango", "Orange"];
$removed = array_splice($fruits, 1, 2, ["Pineapple", "Grapes"]); // Index 1ৰ পৰা 2টা Element আঁতৰাই নতুন যোগ কৰে
print_r($removed); // ["Banana", "Mango"] (আঁতৰোৱা Elements)
print_r($fruits); // ["Apple", "Pineapple", "Grapes", "Orange"] (পৰিবৰ্তিত Array)
// 2. Array Swap in PHP (দুটা Element অদল-বদল কৰা)
// PHP-ত Array-ৰ দুটা Element Swap কৰিবলৈ Temp Variable বা List() ব্যৱহাৰ কৰিব পাৰি।

// উদাহৰণ (Temp Variableৰ সহায়ত):
$numbers = [10, 20, 30, 40];
function swap(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}
swap($numbers, 1, 3); // Index 1 (20) আৰু Index 3 (40) Swap হ'ব
print_r($numbers); // [10, 40, 30, 20]

// উদাহৰণ (List()ৰ সহায়ত):
$numbers = [10, 20, 30, 40];
[$numbers[1], $numbers[3]] = [$numbers[3], $numbers[1]]; // Swap 20 & 40
print_r($numbers); // [10, 40, 30, 20]

//  3. Finding Largest & Second Largest in PHP
// Simple Loop Method
$numbers = [10, 5, 20, 8, 25, 15];
$largest = $secondLargest = PHP_INT_MIN;

foreach ($numbers as $num) {
    if ($num > $largest) {
        $secondLargest = $largest;
        $largest = $num;
    } elseif ($num > $secondLargest && $num != $largest) {
        $secondLargest = $num;
    }
}

echo "Largest: " . $largest . "\n"; // 25
echo "Second Largest: " . $secondLargest . "\n"; // 20

// Using Sort (যদি Duplicate থাকে)
$numbers = [10, 5, 20, 20, 25, 15];
$uniqueSorted = array_unique($numbers); // Duplicate আঁতৰায়
rsort($uniqueSorted); // Descending Orderত Sort কৰে

echo "Largest: " . $uniqueSorted[0] . "\n"; // 25
echo "Second Largest: " . $uniqueSorted[1] . "\n"; // 20

?>