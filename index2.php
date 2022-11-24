<?php
function familyName( string $fname, string $lname = 'Osamor') //default funct or over-ride argument
{                                                                  //php is loosely type because data type is not specify by passing u get an error
    echo "$fname $lname";                                         //function can be call in anywhere php tag is
}



function sum(int $num1, int $num2)
{

    return $num1 + $num2;
}


//funct by immutation or by value
$number = 10;
$num2 = 30;


// echo "the initail variable before function $number <br>";
// function increment($number){
        
//     $number++;
//     echo "the modified value is $number <br>";
// };

// increment($number);

// echo "after the function call $number <br>";

//funct by referance

// echo "the initail variable before function $number <br>";
// function increment(&$number){   // by referance modifies the varible
        
//     $number++;
//     echo "the modified value is $number <br>";
// };

// increment($number);

// echo "after the function call $number <br>";



$genderString = "I am ";

function female($str){   
        
         $str .= "female";
     };


     function male(&$str){   
        
        $str .= "male";
    };


    female($genderString);
    male($genderString );


    echo  $genderString ."<br>";

// ARRAY in PHP










?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      

<!--default funct-->
<h1>Family</h1>
<ul>
    <li><?php familyName("LXG"); ?> </li>
    <li><?php familyName("Bobbylee"); ?> </li>
    <li><?php familyName("LaFaZe"); ?> </li>
    <li><?php familyName("Bobby"); ?> </li>
    <li><?php familyName("fumnaya" , "chukwu"); ?> </li> <!-- overide-->
</ul>

<p>the sum of 5 and 10 is : <?php  echo sum( 5, 10);?></p>
<p>the sum of 20 and 100 is : <?php  echo sum( 20, 100);?></p>
<p>the sum of 50 and 70 is : <?php  echo sum( 50, 70);?></p>




<?php
echo "hello world<br>";
?>

<?php  
 familyName("Bobbylee");  
 ?>


</body>
</html>