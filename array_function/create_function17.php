<?php
$f = create_function('', 'return 1;');

function lambda_1() { return 2; }

$g = "lambda_1";
echo $g(); // outputs: 2

$h = chr(0)."lambda_1";
echo $h(); // outputs: 1
?>
