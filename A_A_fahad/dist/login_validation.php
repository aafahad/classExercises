<?php



if(isset($_POST['name']) && empty($_POST['name']))
{
    echo "Name Required";

}

elseif(isset($_POST['password']) && empty($_POST['password']))
{
    echo "Password Required";

}

else{
    header('location:project_dashboard.html');
}
?>
