//demonstrate the use of regular expression in php
<?php
echo preg_match("/^[a-zA-Z0-9]+$/", "abc123"); //true
echo preg_match("/^[a-zA-Z0-9]+$/", "abc123!"); //false
