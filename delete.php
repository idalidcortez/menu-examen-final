<?php 

include 'connect.php';
if(isset($_GET['deleteid'])){

$id=$_GET['deleteid'];


$sql="delete from `menu_de_comida` where id=$id";
$result= mysqli_query($con, $sql);
if($result){
    header('location:index.php');
	}else{
     die(mysqli_error($con));
   }

}




?>