<?php

$marks =(int)readline("Enter marks: ");
if($marks >= 90)                                                                                   
{
    echo "A grade";
}
else if($marks >= 80)
{   
    echo "B grade";
}
else if($marks >= 70)
{
    echo "C grade";
}
else if($marks >= 60)
{
    echo "D grade";
}
else
{
    echo "F grade";
}


// //php program to develop a university registration form
// $name = readline("Enter your name: ");
// $age = (int)readline("Enter your age: ");
// $gender = readline("Enter your gender: ");
// $course = readline("Enter your course: ");
// $year = (int)readline("Enter your year: ");
// $percentage = (int)readline("Enter your percentage: ");
// echo "Name: ".$name;
// echo "\nAge: ".$age;
// echo "\nGender: ".$gender;
// echo "\nCourse: ".$course;
// echo "\nYear: ".$year;
// if($percentage >= 70)
// echo "Permitted to entrance give exam";
// else
// echo "Not permitted to entrance give exam";
?>