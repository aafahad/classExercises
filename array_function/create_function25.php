<?php
$fnc = @create_function('$arg1,$arg2,$arg3', 'return true;');
# make that function whatever you want
if (empty($fnc)) {
    die('Could not create function $fnc.');
}

# although, the follow will NOT work
if (empty(create_function('$arg', 'return $arg;'))) {
    die('Could not create anonymous function.');
}
# you would get an error regarding not being able to use a
# return value in writeable context (i.e. a return value is
# a const in C, and the function empty() doesn't use a
# const void* parameter
?>
