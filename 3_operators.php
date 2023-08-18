<?php

// //arithmetic operator
// $x=233;

// $ans=round($x/4);
// echo $z.'</br>';

// //constant implementation
// define("php","programming");
// echo php.'</br>';

// // armstrong number
// $num=153;
// $x=$num;
// $sum=0;
// while($x){
//     $sum+=$x%10;
//     $x=floor($x/10);
// }
// if($sum==$num){
//     echo "armstrong";
// }


// $age = readline("enter the age : ");
// if($age>=18){
//     echo "permitted";
// }else
//     echo "not permitted";
    
// //ternary operator

//php program to type a-z in reverse order using for loop
// for($i=25;$i>=0;$i--)
//     echo chr(97+$i);

// for($x=0;$x<=10;$x++){
//     if($x==4)
//         continue;
//     if($x==7)
//         break;
//     echo $x.'</br>';
// }
// echo "The end number is $x<br>";

// $n=100  ;
// $sum=$n*($n+1)/2;
// echo "The sum of N natural numbers is $sum" ;

$str="I am here to learn";
$count=0;
for($i=0;$i<strlen($str);$i++){
    if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'){
        $count++;
        $str[$i]='#';
    }
}
echo "count = $count <br>";
echo $str;

?>  

