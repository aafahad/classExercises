<?php

$fp = fopen('aReadablefile.txt','r');
$data = fread($fp,filesize('aReadablefile.txt'));
echo $data;
