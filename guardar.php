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
<br>

</center>
    
        <?php 
 include("conec.php");

//guardar los datos del boleto
 $cv_php=$_POST['cv_txt'];
 $cvr_php=$_POST['cvr_txt'];
 $fecha_php=$_POST['fecha_txt'];

 
 $query=("INSERT INTO `boletomfps32`(`cv_B`, `cv_R`, `fecha_B`) VALUES ('$cv_php','$cvr_php','$fecha_php')");
 $resultado=$conexion->query($query);


 
 



//consulta para rev. datos boleto
$queryBC=("SELECT * FROM `boletomfps32` WHERE `cv_B`='$cv_php'");
$resultadoBC=$conexion->query($queryBC);

while($consulBC=$resultadoBC->fetch_assoc()){

?>
<div class="container">

<center>

<div>
<br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se compró correctamente el boleto de codigo <?php echo $cv_php ;?>
    </em>
</div>

<br><br>
</center>
<form  action="inicioBoletos.php" method="POST">

  <center>

<?php
}


?>    


        <button type="submit" class="waves-effect waves-light btn">INICIO


<?php 




?>























    


    
</center>    



</form>



</div>

<br>
<br>

<br>
<br>
<br>
<br>



<footer class="page-footer teal lighten-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
      <center>  <em><h5 class="white-text">Zoologico paloma</h5></em>
        <h6 class="grey-text text-lighten-4">¡Un lugar de aventuras!</h6>
        </center>
      </div>
      <div class="col l4 offset-l2 s12">
        <i><h5 class="white-text">Menu</h5></i>
        <ul>
          <li><div class="divider"></div></li>
          
<li><a class="grey-text text-lighten-3" href="inicioBoletos.php">Taquilla</a></li>
<li><div class="divider"></div></li>
<li><a class="grey-text text-lighten-3" href="inicioHabitat2.php">Habitats</a></li>

<li><div class="divider"></div></li>
<li><a class="grey-text text-lighten-3"  href="inicioAnimales.php">Animales</a></li>

<li><div class="divider"></div></li>
<li><a class="grey-text text-lighten-3" href="recorrido.php">Recorridos</a></li>
<li><div class="divider"></div></li>
        
</ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2014 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">ZOOP</a>
    </div>
  </div>
</footer>

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
   


</body>
</html>