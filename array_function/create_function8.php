<?php
function create_closure($fun, $args, $uses)
{$params=explode(',', $args.','.$uses);
    $str_params='';
    foreach ($params as $v)
    {$v=trim($v, ' &$');
        $str_params.='\''.$v.'\'=>&$'.$v.', ';
    }
    return "return function({$args}) use ({$uses}) {{$fun}(array({$str_params}));};";
}
?>
