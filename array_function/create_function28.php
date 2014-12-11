<?php
function _not_($f) {
    return create_function('$x',
        "return !$f(\$x);");
}

function _and_($f, $g) {
    return create_function('$x',
        "return $f(\$x) && $g(\$x);");
}
?>
