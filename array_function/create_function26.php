<?php
$text = preg_replace_callback (
    "/(<(frame src|a href|form action)=\")([^\"]+)(\"[^>]*>)/i",
    create_function (
        '$matches',
        'return $matches[1] . htmlentities ($matches[3]) . $matches[4];'
    ),
    $text);
?>
