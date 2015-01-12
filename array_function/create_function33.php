<?php

$f = create_function('$a,$b=3', 'var_dump($a, $b);');
$f(1);

// output:

// int(1)
// int(3)

?>
