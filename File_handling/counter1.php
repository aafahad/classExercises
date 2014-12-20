<?php

$fl = 'counter.txt';
$fp = fopen($fl,'r');
$data = fread($fp,filesize($fl));

fclose($fp);

echo $data;

$data = $data+1;

$fs = fopen($fl,'w');
fwrite($fs, $data) or die('cannot write file');

//$data = $data ++;

//echo $data;

fclose($fs);
