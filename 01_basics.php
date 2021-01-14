<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
<div class="container">
This is my first php website
<?php
define('PI', 3.1416);
    echo "Hello world and this is printed using php";
    //single line comment
    /*
    this
    is 
    a multi line
    comment
    */
    $var1 = 10;
    $var2 = 20;
    echo $var1;
    echo $var2; 
    echo $var1 + $var2;

    // operators in PHP
    // Arithmetic operators
    echo "<br>";
    echo "the value of var1 and var2";
    echo "<br>";
    echo $var1 + $var2;
    echo "<br>";
    echo "the value of var1 and var2";
    echo "<br>";
    echo $var1 - $var2;
    echo "<br>";
    echo "the value of var1 and var2";
    echo "<br>";
    echo $var1 * $var2;
    echo "<br>";
    echo "the value of var1 and var2";
    echo "<br>";
    echo $var1 / $var2;
    // Assignment operators
    echo "<br>";
    // $newVar = 50;
    // $newVar += 1;
    // $newVar *= 1;
    // $newVar -= 1;
    $newVar /= 1;
    echo "<br>";
    echo $newVar;


    // Comparison operators
    // echo "<h1>This is a comparison operators</h1>"
    echo "the value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is ";
    echo var_dump(1<=4);


    // Increament operators/ Decrement operators
    // echo "$var1++;";
    // echo "$var2--;";
    // echo "++$var1;";
    // echo "--$var2;";

    // Logical Operators
    // and (&&)
    // or (||)
    // xor
    // ! not
    echo "<br>";
    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);
    // $myVar = (true xor true);
    // echo var_dump($myVar);




    // Data Types 
//    1. string
//    2. integer
//    3. float
//    4. boolean
//    5. array
//    6. object
echo "Data types <br>";
$vard = "this is a string";
echo var_dump($vard);
echo "<br>";
$vard = 100;
echo var_dump($vard);
echo "<br>";
$vard = 12.5;
echo var_dump($vard);
echo "<br>";
$vard = true;
echo var_dump($vard);
echo "<br>";



echo PI;




?>
</div>
    
</body>
</html>