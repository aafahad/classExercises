<?php
$my_file = 'aaaaa.txt';

$ft=unlink($my_file);

//$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file

//$fp = fopen($aTestFile,'w');

if(file_exists($my_file)){
    echo "File has not been deleted successfully";
}
else{
    echo "File has been deleted Successfully";
}
