<?

function is_function( &$mixed )
{
    if ( is_object( $mixed ) ) {
        return ( $mixed instanceof Closure );
    } elseif( is_string( $mixed ) ) {
        return function_exists( $mixed );
    } else {
        return false;
    }
}

function myfunc(){}

$test = 123;
echo  is_function( $test ); //will return false

$test = 'isset';
echo  is_function( $test ); //will return false... it's not work with reserved :( ...

$test = 'myfunc';
echo  is_function( $test ); //will return true

$test = create_function( '', 'echo 123;' );
echo  is_function( $test ); //will return true

$test = function () { echo 123; };
echo  is_function( $test ); //will return true

?>
