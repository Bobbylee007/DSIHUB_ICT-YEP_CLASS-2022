<?php

$a = 1;

$b = "i am  a string";

$c = true;

$d = null;


const PI = 3.142; //is a constant which doent need $sign

//another mth of defining constants
define('API', 'https://hdidhkjkkjk.com');

const APIV2 = 'https://hdidhkjkkjk.com/dirir';


//operator
$num1 = 5;
$num1 += 5;

//print($num1);

// $string1 = "i am a fine";
// $string2 = " Boy";
// $string3 =  $string1 . $string2;

// print($string3);

// $string1 = "i am a fine";
// $string1 .= " Boy";

// print($string1);

// $arr1 = [ 0=> 'one', 2 => 'two', 3=> 'three'];
// $arr2 = [ 2 => 'two', 0=> 'one' 3=> 'three'];
// print($arr1=== $arr2)


//ternary
// $value = true ? "the statement is true": "the statement is false";

// echo $value;

// null coalescing
// $value = null ?? 'kodes';
// printf($value);

//strings mth
$str = 'some string';
$lenght = strlen($str);

$count = str_word_count($str);

// echo $lenght;
// echo "\n";
// echo $count;

$reverse = strrev($str);
echo $reverse;
echo "\n";
echo strrev($str);
echo "\n";

$replace = str_replace("string","number",$str );
echo $replace;

//maths mth
$num = "1";
var_dump(is_int($num));


//typecasting is to covert a variable or a data-type to another data-type
echo (int) $num;
echo "\n\n\n\n\n\n\n\n";
echo rand(0, 9);

//conditionals




