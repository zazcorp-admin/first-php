<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    .container {
        max-width: 80%;
        background-color: rgb(64, 155, 167);
        margin: auto;
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        This is a more basics section
        <h3>Your party status</h3>
    <?php
    $age = 6;
    if ($age>18){
        echo "You can go to the party";
    }
    elseif($age == 7){
        echo "You are under 7 its time to read";
    }
    else{
        echo "You can't got to the party";
    }

    //Arrays in php
    // echo "<br>";
    $languages = array("python", "c++", "ruby", 'php');
    // echo $languages[1];
    // echo count($languages);
    

    $a = 0;
    echo "<br>";
    //Loops in php
    while ($a <= 10) {
        echo "<br>the value of a is :";
        echo $a;
        $a++;
    }


    //iterating the loops in php
    $a =0;
    echo "<br>";
    while ($a < count($languages)) {
        echo "<br>the value of langauge is :";
        echo $languages[$a];
        $a++;
    }


    // Do while
    echo '<br>';
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }while($a < 10);



    // For loop in php
    //$a = 200;
    for($a=0; $a<10; $a++) {
        echo "<br>The value of a : ";
        echo $a;
    }

    foreach($languages as $values) {
        echo  "<br>The value from each loop is : ";
        echo $values;
    }


    //function in php

    // function print5(){
    //     echo "FIVE";
    // }

    // echo "<br>";

    // print5();
    // print5();
    // print5();
    // print5();

    // Real function in PHP
    function print_number($number) {
        echo "<br>Your number is $number";
    }

    print_number(40);


    ?>
    



    </div>
</body>

</html>