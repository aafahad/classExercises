<?php

$fp = fopen('counter.txt','r');
$data = fread($fp,filesize('counter.txt'));
echo $data;
