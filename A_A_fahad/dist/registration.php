<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$hobby = implode(',', $_POST['hobby']);
$city = implode(',', $_POST['city']);

$query="INSERT INTO `crud01`.`reg_form` (
`first_name` ,
`last_name` ,
`email` ,
`password` ,
`gender` ,
`bday` ,
`hobby` ,
`city` ,
`comment` ,
`created` ,
`modified`
)
VALUES (
'".$_POST['first_name']."',
'".$_POST['last_name']."',
'".$_POST['email']."',
'".$_POST['password']."',
'".$_POST['gender']."',
'".$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day']."',
'".$hobby."',
'".$city."',
'".$_POST['comment']."',
NOW( ) ,
''
);";
mysqli_query($link, $query);
header('location:project_registration.html');
