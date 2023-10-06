<?php
$regex='/^[a-zA-Z0-9\s]+';
$nameString = 'PHP Programming';
if(preg_match($regex,$nameString)){
    echo "Match Found";
}
else{
    echo "Match Not Found";
}
?>