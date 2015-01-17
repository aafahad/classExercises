<?php

//function subtract($number1,$number2)
//{
//
//    $number1= 10;
//    $number2= 6;
//
//    if ($number1 > $number2) {
//        $result = $number1 - $number2;
//    }
//
//    else {
//        $result = $number2 - $number1;
//    }
//
//    return $result;
//}

session_start();

processCalculation();

function processCalculation(){
    $_SESSION['result'] = calResult($_POST['calculate'],$_POST['number1'], $_POST['number2']
    );
    header('location:calc_function.php');

}


function calResult($number1,$number2,$calculate){


    if($calculate=="add")
    {
        $compute=addCalc($number1,$number2);
    }
    if($calculate=="subtract")
    {
        $compute=subtractCalc($number1,$number2);
    }
    if($calculate=="multiply")
    {
        $compute=multiplyCalc($number1,$number2);
    }
    if($calculate=="divide")
    {
        $compute=divideCalc($number1,$number2);
    }

    return $compute;
}


function addCalc($number1,$number2){

    $result=$number1+$number2;
    return $result;
}


function subtractCalc($number1,$number2){

    if($number1>$number2)
    {
        $result=$number1-$number2;
        return $result;
    }
    else
    {
        return "Number1 should be larger than Number2";
    }
}

function multiplyCalc($number1,$number2){

    $result= $number1 * $number2;
    return $result;

}


function divideCalc($number1,$number2){

    if($number2==0)
    {
        return "can't divide";
    }
    else
    {
        $result= $number1/$number2;
        return $result;
    }
}
?>