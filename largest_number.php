<?php

// Создать массив целых чисел. Написать функцию поиска самого большого числа.

$length = 20; 
$input_arr = [];
 
for ($i = 0; $i < $length; $i++)
{
    $elem = rand(-50, 50);
    array_push($input_arr, $elem);
}
 echo "<pre>";
 print_r($input_arr);

function maxArrayValue($array){
$max = null;

foreach($array as $value)
{
    if($value > $max or $max === null)
    {
        $max = $value;
    }
}
echo "Max value in array is: ".$max."\n";
}

maxArrayValue($input_arr);
