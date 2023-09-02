<?php
$marks  = [20,30,40,"lol"];

// echo $marks; // only string
print_r($marks);
echo "<br>";

echo gettype($marks);
echo "<br>";

class Medicine{
    function medicine_prescription(){
        echo "prescribed by medical practitioner";
    }
}

$medicine = new medicine();
$medicine->medicine_prescription();


?>