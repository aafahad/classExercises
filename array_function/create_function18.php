<?php
$get_func = create_function('$func', 'return substr($func,1);');
$get_value = create_function('$index','return pow($index,$index);');
$another_func = create_function('$a', '$func="\x00"."'.$get_func($get_value).'";return $func($a);');
echo $another_func(2); # result is 4
?>
