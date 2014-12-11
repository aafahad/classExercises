<?php
function class_function($name,$params,$code) {

    $this->runtime_functions[$name] = create_function($params,$code);

}
?>
