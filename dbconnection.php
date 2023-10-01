<?php 
$connection = mysqli_connect("localhost", "prahlad1", "", "employees management");
if(!$connection){
    die ("NOT CONNECTED".mysqli_connect_error());
    }
    else{
        //echo ("Connection found");
    }

?>