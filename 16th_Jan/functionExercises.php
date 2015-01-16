<?php


$_POST['number'];


echo identifyOddEvenNumber ($_POST['number']);


function is_odd($number){
    if ( ($number % 2) ==0 ) {
        return false;
    }
    else{
        return true;
    }



    function identifyOddEvenNumber ($number) {

    if ( ($number % 2) ==0 ) {
        return "even number";
    }
    else{
        return "odd number";
    }

}
?>

////$number=null;
//$number=10;
//
////if ( ($number % 2) ==0 ) {
////    echo "even number";
////}
////else{
////    echo "odd number";
////}
//
//
//function identifyEvenOddNumber ($number) {
//
//    if ( ($number % 2) ==0 ) {
//        return "even number";
//    }
//    else{
//        return "odd number";
//    }
//
//}
//
//function is_odd($number){
//    if ( ($number % 2) ==0 ) {
//        return false;
//    }
//    else{
//        return true;
//    }
//
//}
//
//function myTest(){
//
//    $sum= 2+3;
//    echo "Hello";
//
//    return "bkict";
//}
//
////myTest();
////
////echo myTest();
//
//var_dump( is_null(myTest()) );
////echo myTest(); echo myTest(); echo myTest();
//
//
//
//
//function myTest2(){
//    echo "Hell";
//    }
//
//
//myTest2();
//
//echo myTest2();