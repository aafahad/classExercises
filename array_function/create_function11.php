<?php

function create_lambda($args, $code) {
    static $list = array();
    $hash = md5("{$args}\0{$code}");
    if (!isset($list[$hash])) {
        $list[$hash] = create_function($args, $code);
    }
    return $list[$hash];
}
