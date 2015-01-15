<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>

<div class="container">
<h2>Table-1</h2>
    </div>

<div class="container">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>City</th>
        <th>Country</th>
        <th>Continent</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tokyo</td>
        <td>Japan</td>
        <td>Asia</td>
    </tr>
    <tr>
        <td>Mexico city</td>
        <td>Mexico</td>
        <td>North America</td>
    </tr>
    <tr>
        <td>NewYork city</td>
        <td>USA</td>
        <td>North America</td>
    </tr>
    <tr>
        <td>Mumbai</td>
        <td>India</td>
        <td>Asia</td>
    </tr>
    <tr>
        <td>Seoul</td>
        <td>Korea</td>
        <td>Asia</td>
    </tr>
    <tr>
        <td>Shanghai</td>
        <td>Chaina</td>
        <td>Asia</td>
    </tr>
    <tr>
        <td>Lagos</td>
        <td>Nigeria</td>
        <td>Africa</td>
    </tr>
    <tr>
        <td>Benos Aires</td>
        <td>Argentina</td>
        <td>South America</td>
    </tr>
    <tr>
        <td>Cairo</td>
        <td>Egypt</td>
        <td>Africa</td>
    </tr>
    <tr>
        <td>London</td>
        <td>UK</td>
        <td>Europe</td>
    </tr>

    </tbody>
</table>
</div>


<div class="container">
<h2>Table-2</h2>
</div>

<?php

$places= array(array(
'city'=> 'tokyo',
'country'=> 'Japan',
'continent'=> 'Asia'
),
    array(
'city'=> 'Mexico city',
'country'=> 'Mexico',
'continent'=> 'North America'
),

array(
'city'=> 'NewYork city',
'country'=> 'USA',
'continent'=> 'North America'
),

array(
'city'=> 'Mumbai',
'country'=> 'India',
'continent'=> 'Asia'
),

array(
'city'=> 'Seoul',
'country'=> 'Korea',
'continent'=> 'Asia'
),

array(
'city'=> 'Shanghai',
'country'=> 'Chaina',
'continent'=> 'Asia'
),

array(
'city'=> 'Lagos',
'country'=> 'Nigeria',
'continent'=> 'Africa'
),


array(
'city'=> 'Benos Aires',
'country'=> 'Argentina',
'continent'=> 'South America'
),

array(
'city'=> 'Cairo',
'country'=> 'Egypt',
'continent'=> 'Africa'
),

array(
'city'=> 'London',
'country'=> 'UK',
'continent'=> 'Europe'
));
?>


<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>City</th>
            <th>Country</th>
            <th>Continent</th>
        </tr>
        </thead>
        <tbody>
<?php
foreach($places as $bkict){ ?>
<tr>
    <td><?php echo $bkict['city']; ?></td>
    <td><?php echo $bkict['country']; ?></td>
    <td><?php echo $bkict['continent']; ?></td>
</tr>
</tbody>
<?php
};
?>
        </table>
    </div>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>