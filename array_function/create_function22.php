<?php
$fn2 = create_function('$a', 'echo $a; if ($a < 10) call_user_func($GLOBALS["fn2"], ++$a);');
$fn2(1);
?>
