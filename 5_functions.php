<?php

$result = array (
    array('name'=>'Manoj', 'age'=>'25', 'cgpa'=> '7.0'),
    array('name'=>'Raj', 'age'=>'26', 'cgpa'=> '8.0'),
    array('name'=>'Rajesh', 'age'=>'27', 'cgpa'=> '9.0'),
);

$names = array_column($result, 'name');
?>