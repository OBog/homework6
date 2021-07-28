<?php

//Создать массив строк. Написать функцию поиска самой длинной строки по переданному массиву.

$input_arr = array('Mercury', 'Venus2332352', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Uranus', 'Neptune');
print_r($input_arr);



function longestArrayValue($array){
$longest = null;
    foreach($array as $key=>$value)
    {
        if(strlen($value) > strlen($longest))
        {
            $longest = $value;
        }
    }
    echo "The longest value in array is: ".strlen($longest)." symbols \n";
    unset($array[$key]);
}

longestArrayValue($input_arr);
