<?php
session_start();

$_SESSION['msg']="Success: Output of your calculations";
$msg = $_SESSION['msg'];



$number1=$_POST['number1'];
$number2=$_POST['number2'];
$calculate=$_POST['calculate'];


$value=calResult($number1, $number2, $calculate);



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



<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

<section class="container">


    <?php
    if(isset($value)) {
        ?>



        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $msg;
                    ?>
                </div>

            </div>

        </div>


    <?php
    }
    ?>



    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <form action="calculator.php" method="post" class="form-horizontal">
                    <p class="text-center"><legend><b>Calculator</b></legend></p>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Enter Number1</label>
                        <div class="col-sm-10">
                            <input type="number" name="number1" class="form-control" placeholder="">
                        </div>

                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Enter Number2</label>
                        <div class="col-sm-10">
                            <input type="number" name="number2" class="form-control" placeholder="">
                        </div>
                    </div>



                    <div class="form-group">
                        <label  class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="add"> Add
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="subtract"> Subtract
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="divide"> Divide
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="multiply"> Multiply
                            </label>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" value="calculate" class="btn btn-default" style="background-color:#00b3ee">Calculate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php
    if(isset($value)) {
        ?>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-success">
                    <p class="text-center"><strong>Result:  <?php echo $value; ?></strong></p>
                </div>

            </div>

        </div>
    <?php

    }

    session_unset();
    ?>

</section>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
