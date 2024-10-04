
<html>
    <head>       
        <title>guardarnH</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>     
        <center>
    <nav class=" teal lighten-3 material-icons"><br>pan_tool</i><stan> AGREGAR HABITAT </stan></nav>


<?php 
include("conec.php");
$cvh_php=$_POST['cvh_txt'];
$cvr_php=$_POST['cvr_txt'];
$zona_php=$_POST['zona_txt'];
$clima_php=$_POST['clima_txt'];


$query="INSERT INTO `habitatmfps32`(`cv_H`, `cv_R`, `zona_H`, `clima_H`) VALUES
 ('$cvh_php','$cvr_php','$zona_php','$clima_php')";
$resultado=$conexion->query($query);


?>
<div class="container">
<br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se agregó correctamente el habitat de codigo <?php echo $cvh_php ;?>
    </em>
</div>

</div>
<br><br>
    <a href="inicioHabitat2.php" class="waves-effect waves-light btn">INICIO
    
<script type="text/javascript" src="js/materialize.min.js"></script>
</center>
</body>
</html>