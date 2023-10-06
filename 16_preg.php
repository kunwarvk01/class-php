<?php
$regex = '/<b>(.*)<\/b>/U';
$inputString = "cours: <b>php</b> <b>html</b> <b>css</b> <b>javascript</b>";
preg_match_all($regex, $inputString, $matches);
echo $matches[0][0];