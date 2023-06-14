<?php

$con=new mysqli('localhost', 'root', '', 'menu');

if(!$con){
   die(mysqli_error($con));
}


?>

<link rel="stylesheet" href="index_menu.css">