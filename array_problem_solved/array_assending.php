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
?>