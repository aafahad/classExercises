<<?php
class Hoge {
    var $lamda;
    function set($lamda) {
        $this->lamda = $lamda;
    }
    function callLamda() {
        $func = $this->lamda;
        return $func();
    }
}

$newfunc = create_function('', 'echo "hoge<br>\n";');

$h = new Hoge;
$h->set( $newfunc );
$h->callLamda();
?>
