<?php

class Hoge {
    var $lamda;
    var $text;

    function set($lamda)
    {
        $this->lamda = $lamda;
    }

    function callLamda()
    {
        $func = $this->lamda;
        return $func($this);
    }

    function get()
    {
        return $this->text;
    }
}

$newfunc = create_function('&$class', 'echo $class->get();' );

$h = new Hoge;
$h->text = "Hi there !";
$h->set($newfunc);
$h->callLamda();

?>
