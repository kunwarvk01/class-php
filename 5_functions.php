<?php

$result = array (
    array('name'=>'Manoj', 'age'=>'25', 'cgpa'=> '7.0'),
    array('name'=>'Raj', 'age'=>'26', 'cgpa'=> '8.0'),
    array('name'=>'Rajesh', 'age'=>'27', 'cgpa'=> '9.0'),
);

$names = array_column($result, 'name');
//write a function to add two numbers
function add($a, $b){
    return $a + $b;
    }
//write a function to multiply two numbers 
function multiply($a, $b){
    return $a * $b;
}
//write a function to divide two numbers
function divide($a, $b){
    return $a / $b;
}

    


?>