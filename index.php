<?php 

include 'connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


    <link rel="stylesheet" href="index_menu.css">

     <div class= "margin">
        <div class="box-part text-center" >

      <div class= "image">

      <img src="chiltepinos2.png" width="430" height="400"> <br>

</head> 

    <body>


    <table class="container text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Platillo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio (MXN)</th>
      <th scope="col">Precio (USD)</th>
      <th scope="col">Porción</th>
      <th scope="col">Dieta</th>
      <th scope="col">Operaciones</th>

    </tr>
  </thead>
  <tbody>

<?php
 
 $sql="Select * from `menu_de_comida`";
 $result=mysqli_query($con,$sql);
 if($result){
  while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $platillo=$row['platillo'];
   $descripcion=$row['descripcion'];
   $precioMX=$row['precioMX'];
   $precioUSD=$row['precioUSD'];
   $porcion=$row['porcion'];
   $dieta=$row['dieta'];

   echo '<tr>

      <th scope="row">'.$id.'</th>
      <td>'.$platillo.'</td>
      <td>'.$descripcion.'</td>
      <td>'.$precioMX.'</td>
      <td>'.$precioUSD.'</td>
      <td>'.$porcion.'</td>
      <td>'.$dieta.'</td>
      <td> <button class="my-button4"> <a href="update.php? updateid='.$id.'" class= "text-light">Update</a></button>
      <button class="my-button3"> <a href="delete.php? deleteid='.$id.'" class= "text-light">Delete</a></button> </td>
      
      </tr>';

  }

 }

?>




  </tbody>
</table> 
      </div>

      <script>
  document.getElementById('printButton').addEventListener('click', function () {
    // Get the HTML content you want to print
    var content = document.documentElement;

    // Create a new jsPDF instance
    var pdf = new window.html2pdf().set({
      margin: 10,
      filename: 'document.pdf',
      image: { type: 'jpeg', quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    });

    // Generate the PDF
    pdf.from(content).save();
  });
</script>

    <button class="my-button3" onclick="imprimirPagina();">Imprimir Pagina</button>
        <script>
          function imprimirPagina() {
            window.print();
          }
        </script>
<br> <br>

    </body>

    <br> <br>

     <a>
        
         <img src="burger2.png"  width="410" height="350" alt="Button Image" style="position: absolute; top: 110px; left: 885px;"> <h3 style="position: absolute; top: 95px; left: 979px;" ></h3>
      </a> 

       <a>
        
         <img src="alitas.png"  width="410" height="230" alt="Button Image" style="position: absolute; top: 190px; left: 150px;"> <h3 style="position: absolute; top: 95px; left: 979px;" ></h3>
      </a> 
 
 <div class="box-part text-center">

        <button class="my-button my-2" align-items="center" width="450" height="350" alt="Button Image" style="position: absolute; top: 310px; left: 610px;"> <a href= "agregar_menu.php" class= text-light>Agregar a menú</a></button>

  
        </div>

  </html>