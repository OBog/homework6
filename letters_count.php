<?php
/*Создать массив строк. Написать функцию, которая работает с одной строкой, считает встретившиеся там буквы. */

$input_arr = array('Mmeeercuryyy', 'Venus2332352', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Uranus', 'Neptune');

echo "<pre>";
print_r($input_arr);

function charsCount($input){
    foreach (count_chars($input, 1) as $i => $value) {
        echo $value." -> ".chr($i)." in the word ".$input."\n";
        echo "\r\n";
    }
    //return $val;
}
$input_arr = array_map("strtolower", $input_arr);
array_map("charsCount",$input_arr);
