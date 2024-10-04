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

<nav class=" teal lighten-3 material-icons"><br>monetization_on</i><stan> MODIFICAR RECORRIDOS </stan></nav>





<form >

<br><br>


<?php 
    include("conec.php");

    // Recoger datos del formulario
    $cv_php=$_POST['cv_R'];
    $hi_php=$_POST['hi_m'];
    $ht_php=$_POST['ht_m'];
    $precio_php=$_POST['precio_m'];
    $dia_php=$_POST['dia_m'];
    // Actualizar datos
    $queryMB = "UPDATE `recorridomfps32` SET `hora_iR`='$hi_php',`hora_tR`='$ht_php',`precio_R`='$precio_php',`dia_R`='$dia_php' WHERE `cv_R`='$cv_php' ";
    
    $resultadoMB = $conexion->query($queryMB);     

   
    ?>


<div>
    <br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se modificó correctamente el recorrido de codigo <?php echo $cv_php ;?>
    <br><br><br>
    </em>
</div>
    <a href="recorrido.php" class="waves-effect waves-light btn">INICIO

    </center>
    </form>
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
    

</body>
</html>
