<!DOCTYPE html>

<html>
    <head>
<title>guardar</title>
  

 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   


</head>




    <body>



    <center>

<nav class=" teal lighten-3 material-icons"><br>monetization_on</i><stan> COMPRA DE BOLETOS </stan></nav>


</center>
        <center>
        <?php 
 include("conec.php");

 $cv_php=$_POST['cv2_txt'];

?>
<form  method="POST"> 
<table width="50%" heigth="60%" border="2%"> 


<th colspan="6">Datos del boleto</th>
</tr>

<tr>
<td>Clave del boleto</td>
<td>Clave del recorrido</td>
<td>Fecha del recorrido</td>
<td>Precio del recorrido</td>
</tr>

<?php 
// tabla para boleto
$query1="SELECT * FROM `boletomfps32` WHERE `cv_B`='$cv_php'"; 
$resultado1=$conexion->query($query1);
while($row1=$resultado1->fetch_assoc()){
?>


<tr>
<td><?php echo $row1['cv_B'];?></td>
<td><?php echo $row1['cv_R'];?></td>
<td><?php echo $row1['fecha_B'];?></td>


<?php
$cvrV=$row1['cv_R'];    
    
//consulta del precio de r
$queryP2=("SELECT `precio_R` FROM `recorridomfps32` WHERE `cv_R`='$cvrV'");
$resultadoP2=$conexion->query($queryP2);
while($consulP2=$resultadoP2->fetch_assoc()){

    

?>

<td>
    <?php echo $consulP2['precio_R'];?></td>




<td>





<?php


}
}


?>

</td>



</tr>


</form>

</table>

<br>
<a href="inicioBoletos.php" class="waves-effect waves-light btn">Inicio</a>
</center>
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
    
</body>
</html>