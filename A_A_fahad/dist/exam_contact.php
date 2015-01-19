<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="">



<?php include_once('header.php')?>



<!--body-->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-right"><a class="btn btn-success btn-lg" href="#" role="button">Sign Up</a>
            </p>
        </div>
    </div>


    <script
            src="http://maps.googleapis.com/maps/api/js">
    </script>

    <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


    <div id="googleMap" style="width:1100px;height:300px;">


        </div>
    </br>
    <!--/#about-slider-->
</div>









<div class="container">
    <div class="row">
        <div class="col-md-7">

            <legend>Contact Message</legend>
            <div class="input-group">
                <span class="input-group-addon" id="sizing-addon1">@</span>
                <input class="form-control" placeholder="Username" aria-describedby="sizing-addon2" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">@</span>
                <input class="form-control" placeholder="Username" aria-describedby="sizing-addon2" type="text">
            </div>
                <br>

            <div class="control-group">
                <label class="control-label" for="textarea">Message</label>
                <div class="controls">
                    <textarea class="input-xlarge" id="textarea" rows="3" style="width: 650px;"></textarea>
                </div>

            </div>
            <div>
                <p class="text-right"><a class="btn btn-success btn-lg" href="#" role="button">Submit</a>
                </p>
            </div>
        </div>
         <br>






        <p>
            <a class="btn btn-default" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Address 1
            </a>
        </p>
        <div style="height: 0px;" aria-expanded="false" class="collapse" id="collapseExample">
            <div class="well">
               Sub Address 1
            </div>
        </div>

        <p>
            <a class="btn btn-default" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                Address 2
            </a>
        </p>
        <div style="height: 0px;" aria-expanded="false" class="collapse" id="collapseExample1">
            <div class="well">
                Sub Address 2
            </div>
        </div>

        <p>
            <a class="btn btn-default" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                Address 3
            </a>
        </p>
        <div style="height: 0px;" aria-expanded="false" class="collapse" id="collapseExample2">
            <div class="well">
                Sub Address 3
            </div>
        </div>

           <br>
    </div>
    </div>



<?php include_once('footer.php')?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="myscripts.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
</body>
</html>