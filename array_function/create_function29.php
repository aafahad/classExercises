<?php
class blah {
    function blah() {
        $z=create_function('$arg1string','return "function-z-".$arg1string;');
        $GLOBALS['z']=$z;
    }
}
$blah_object=new blah;

$result=$GLOBALS['z']('Argument 1 String');
echo $result;
?>
