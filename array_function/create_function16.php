<?php
class Foo {
    function setHandler($handlerName, $handlerCode) {
        $this->handlerFunctions[$handlerName] = create_function('&$self, $dataArr', $handlerCode);
// NOTE: $this not allowed here, using $self as replacement
    }

    function executeHandler($handlerName, $dataArr) {
        if($this->handlerFunctions[$handlerName]) {
            $this->handlerFunctions[$handlerName](&$this, $dataArr);
        }
    }

    function getConstantInfo($what) {
        return($what);
    }
}

$bla = new Foo;

$bla->setHandler("load", 'echo($self->getConstantInfo("name")."\n");');
$bla->executeHandler("load", array("foo" => "bar"));
?>
