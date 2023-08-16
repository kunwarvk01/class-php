<?php

//arithmetic operator
$x=233;

$ans=round($x/4);
echo $z.'</br>';

//constant implementation
define("php","programming");
echo php.'</br>';

// armstrong number
$num=153;
$x=$num;
$sum=0;
while($x){
    $sum+=$x%10;
    $x=floor($x/10);
}
if($sum==$num){
    echo "armstrong";
}


$age = readline("enter the age : ");

if($age>=18){
    echo "permitted";
}else
    echo "not permitted";
    
//ternary operator
