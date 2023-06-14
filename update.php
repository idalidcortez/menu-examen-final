<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `menu_de_comida` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
   $platillo=$row['platillo'];
   $descripcion=$row['descripcion'];
   $precioMX=$row['precioMX'];
   $porcion=$row['porcion'];
   $dieta=$row['dieta'];
   

if(isset($_POST['submit'])){
   $platillo=$_POST['platillo'];
   $descripcion=$_POST['descripcion'];
   $precioMX=$_POST['precioMX'];
   $porcion=$_POST['porcion'];
   $dieta=$_POST['dieta'];

   $sql="update `menu_de_comida` set id=$id,platillo='$platillo',
   descripcion='$descripcion',precioMX='$precioMX',dieta='$dieta'
   where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
    //echo "Data inserted successfully";
    header('location:index.php');
   }else{
     die(mysqli_error($con));
   }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="add_menu.css">

    <title>Students</title>
  </head>


          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">
      
     <a href="index.php">
        
         <img src="back2.png" alt="Button Image" style="position: absolute; top: 130px; left: 480px;">
       
      </a>
      <img src="chiltepinos.png" width="310" height="270"> <br>


    </div>

      <figure class="text-center"> <h1></h1><h2>Modificar platillo</h2> 
     

    </div>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
    <label >Platillo</label>
    <input type="text" class="form-control" placeholder="Nombre de platillo" name= "platillo" autocomplete="off"
     value="<?php echo nl2br($platillo); ?>">
    
   </div>

 <div class="form-group">
    <label >Descripción de platillo</label>
    <input type="text" class="form-control" placeholder="Descripción del platillo (ingredientes..)" name= "descripcion" autocomplete="off" value="<?php echo nl2br($descripcion); ?>">
    
  </div>

  <div class="form-group">
    <label >Precio (MXN)</label>
    <input type="number" class="form-control" placeholder="Precio del platillo" name= "precioMX" autocomplete="off" value="<?php echo nl2br($precioMX); ?>">
    
  </div>

 <div class="form-group">
    <label >Porción</label>
    <input type="text" class="form-control" placeholder="Piezas o porción del platillo en gramos" name= "porcion" autocomplete="off"value="<?php echo nl2br($porcion); ?>">
    
  </div>

   <div class="form-group">
    <label >Dieta</label>
    <input type="text" class="form-control" placeholder="Tipo de dieta" name= "dieta" autocomplete="off" value="<?php echo nl2br($dieta); ?>">
    
  </div>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Actualizar</button>
</form>

    </div>

  </body>
</html>