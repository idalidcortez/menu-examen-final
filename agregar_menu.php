<?php

include 'connect.php';
if(isset($_POST['submit'])){
   $platillo=$_POST['platillo'];
   $descripcion=$_POST['descripcion'];
   $precioMX=$_POST['precioMX'];
   $porcion=$_POST['porcion'];
   $dieta=$_POST['dieta'];

   $sql="insert into `menu_de_comida` (platillo, descripcion, precioMX, porcion, dieta) 
   values ('$platillo', '$descripcion', '$precioMX', '$porcion', '$dieta')";
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
        <div class="box-part text-center">
      
      <div class= "image">
      
       <a href="index.php">
        
         <img src="back2.png" alt="Button Image" style="position: absolute; top: 130px; left: 480px;">
       
      </a>
      <img src="chiltepinos.png" width="310" height="270"> <br>

    </div>
      <p>
      <figure class="text-center"> <h1></h1><h2>Agregar platillo al menú</h2> 
      </p>
    </div>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
    <label >Platillo</label>
    <input type="text" class="form-control" placeholder="Nombre del platillo" name= "platillo" autocomplete="off">
    
   </div>

 <div class="form-group">
    <label >Descripción</label>
    <input type="text" class="form-control" placeholder="Descripción del platillo" name= "descripcion" autocomplete="off">
    
  </div>

  <div class="form-group">
    <label >Precio (MXN)</label>
    <input type="number" class="form-control" placeholder="Precio del platillo" name= "precioMX" autocomplete="off">
    
  </div>

 <div class="form-group">
    <label >Porción</label>
    <input type="text" class="form-control" placeholder="Piezas o porción del platillo en gramos" name= "porcion" autocomplete="off">
    
  </div>

   <div class="form-group">
    <label >Dieta</label>
    <input type="texto" class="form-control" placeholder="Tipo de dieta" name= "dieta" autocomplete="on">
    
  </div>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Agregar</button>
</form>

    </div>
 <br>
    <br>

  </body>
</html>