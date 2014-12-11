<?php
/* the OB Lambda functions allow a lambda function to call a method from its callee's object */
if(!function_exists('ob_lambda_func')){
    function ob_lambda_func($method, $args) {
        if((phpversion()+0)<5.1 || (substr(phpversion(),2)+0)<1.1)
            die("\nError: This script requires PHP v5.1.1+!\n");
        $bt=debug_backtrace();
        foreach($bt as $xsp) {
            if(isset($xsp['object'])) {
                if(!method_exists($xsp['object'], $method)) continue;
                return call_user_func_array(array($xsp['object'], $method), $args);
            }
        }
        if(!function_exists($method))
            die("\nOB: Internal Error! ($method)");
        return call_user_func_array($method, $args);
    }}
if(!function_exists('ob_lambda')){
    function ob_lambda($method) {
        return create_function('','$args=func_get_args(); return ob_lambda_func('.var_export($method, true).',$args);');
    }}

/* Usage:
*   For each callable method, store the results of ob_lambda('method_name')
*   When a lambda function you call wants to access one of these methods,
*    you need to pass it the result of ob_lambda for that method, the easiest
*    way is to have one of the lambda functions arguments accept the result
*       i.e.:  $myFunc=ob_lambda('myMethod');
*              $lf1=create_function('$func', '$func( ... args ... )');
*              $lf1($myFunc);
*    because create_function prepends a \0 to the function name, it is difficult
*    to pass the result of ob_lambda to the target function without using an argument
*/
/* here is an example -- lambda function Foo::test can call Foo::Bar and Foo::Baz, and these  */
class Foo {
    private $bar, $baz, $test;
    private $runtimeValue=0;
    function __construct() {
        $this->runtimeValue=rand();
        $this->bar=ob_lambda('Bar');
        $this->baz=ob_lambda('Baz');
        $this->test=create_function(
            '$bar, $baz',
            '$bar("Hello, World!"); $baz();'
        );
    }
    function Test() {
        $fn=$this->test;
        $fn($this->bar, $this->baz);
    }
    function Bar($a) {
        echo "$a: Bar ($this->runtimeValue)\n";
    }
    function Baz() {
        echo "and another! Baz ($this->runtimeValue)\n";
    }
}

$foo=new Foo();
// Foo::Bar("Testing Other Method"); <-- this causes fatal error
//  (using $this when not in object context)
$foo->Test();

?>
