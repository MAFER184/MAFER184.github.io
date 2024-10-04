 <!DOCTYPE html>

<html>
    <head>       
        <title>inicio</title>
     <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>     
     
<?php 
include("conec.php");
$id=$_REQUEST['cv_H'];

$query="DELETE FROM `habitatmfps32` WHERE `cv_H`='$id'";
$resultado=$conexion->query($query);
?>    
<center>
<nav class=" teal lighten-3 material-icons"><br>pan_tool</i><stan> ELIMINAR HABITAT </stan></nav>


<div>
    <br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se eliminó correctamente el recorrido de codigo <?php echo $id ;?>
    </em>
</div>
<br><br>
<a href="inicioHabitat2.php" class="waves-effect waves-light btn">INICIO

</center>
<script type="text/javascript" src="js/materialize.min.js"></script>


</body>
</html>