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
        <?php 
 include("conec.php");
 $cv_php=$_POST['cv_R'];
 $hi_php=$_POST['hi_m'];
 $ht_php=$_POST['ht_m'];
 $precio_php=$_POST['precio_m'];
 $dia_php=$_POST['dia_m'];

 $query="INSERT INTO `recorridomfps32`(`cv_R`, `hora_iR`, `hora_tR`, `precio_R`, `dia_R`) VALUES 
 ('$cv_php','$hi_php','$ht_php','$precio_php','$dia_php')";
 $resulGR=$conexion->query($query);
 
 


 ?>
<center>













<nav class=" teal lighten-3 material-icons"><br>assignment</i><stan> GUARDAR RECORRIDO </stan></nav>
<br><br><br><br>

<div class="container">

<div>
    <br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se agregó correctamente el recorrido de codigo <?php echo $cv_php;?>
    </em>
</div>

<br><br>
<a href="recorrido.php" class="waves-effect waves-light btn">INICIO

<script type="text/javascript" src="js/materialize.min.js"></script>
</center>


</div>


<script type="text/javascript" src="js/materialize.min.js"></script>


</body>
</html>