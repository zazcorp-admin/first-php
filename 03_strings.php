<?php
$str = "This is a string";
echo $str;
$lenn = strlen($str);
echo "The length of thsi string is". $lenn;

echo "The number od word in this string is ". str_word_count($str);
// echo "The number od alphabet in this string is ". str_alphabet_vount($str); 
echo "<br>";
echo "the reverse of this string is ". strrev($str);
echo "<br>";
echo "the search of this string is" . strpos($str, "is");
echo "<br>";
echo "<br>". str_replace("is", "at", $str);
?>