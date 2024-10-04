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
<?php 
 include("conec.php");
 $id=$_REQUEST['cv_R'];


 $query="DELETE FROM `recorridomfps32` WHERE `cv_R`='$id'";

 $resultado=$conexion->query($query);
 ?>


<nav class=" teal lighten-3 material-icons"><br>assignment</i><stan> ELIMINAR RECORRIDO </stan></nav>


<div>
    <br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se eliminó correctamente el recorrido de codigo <?php echo $id ;?>
    </em>
</div>

<a href="recorrido.php" class="waves-effect waves-light btn">INICIO

</center>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>