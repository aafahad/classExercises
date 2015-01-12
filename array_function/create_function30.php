<?php
$fname = 'hello';

$func = sprintf('
    function %s($v="") {
        Return "$v<BR>";
    }
',
    $fname
);

eval($func);
echo $fname('Please print it.... please....');
?>
