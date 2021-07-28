<?php

/*Попробовать реализовать fizzbuzz задачу с чтением из файла результата, но без циклов,
заменяя циклы на функцию array_map. Для этого придется изучить вопросы замыканий в php*/

$array = file("fizzbuzz.txt");

echo "Enter division numbers\n";
$handle = fopen ("php://stdin","r");
$number1 = fgets($handle);
$number2 = fgets($handle);

echo "FB RESULT:\n";
array_map( function($fizzBuzz) use ($number1,$number2){
        if (($fizzBuzz % $number1 == 0) && ($fizzBuzz % $number2) == 0){
                echo 'FB'."\n";
            }   elseif ($fizzBuzz % $number1 == 0) {
                echo 'F'."\n";
            }   elseif ($fizzBuzz % $number2 == 0) {
                echo 'B'."\n";
            }   else{
                echo $fizzBuzz;
            }
} ,$array);


