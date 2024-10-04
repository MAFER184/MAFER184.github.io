<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  

</head>
<body>

<center>

<nav class=" teal lighten-3 material-icons"><br>monetization_on</i><stan>  MODIFICAR BOLETO </stan></nav>





<form action="modU.php" method="POST">

<br><br>


<?php 
    include("conec.php");

    // Recoger datos del formulario
    $cvm_php=$_POST['cv_txt'];
    $cvrm_php=$_POST['cvr2_txt'];
    $fecham_php=$_POST['fecha_txt'];

    // Actualizar datos
    $queryMB = "UPDATE `boletomfps32` SET `cv_R`='$cvrm_php', `fecha_B`='$fecham_php' WHERE `cv_B`= '$cvm_php'";
    $resultadoMB = $conexion->query($queryMB);     

   
    ?>


<div>
    <br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se modificó correctamente el boleto de codigo <?php echo $cvm_php ;?>
    <br><br><br>
    </em>
</div>
    <a href="inicioBoletos.php" class="waves-effect waves-light btn">INICIO
</a>
    </center>


    
    </form>




    
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
