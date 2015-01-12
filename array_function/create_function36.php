<?php
//same thing as create_function, but returns a closure..( 5.4)
function create_closure($args, $body){
    return eval("return function($args){ {$body}  };");
}
?>
