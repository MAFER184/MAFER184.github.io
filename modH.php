<!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
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
    $cvh_m=$_POST['cvh_txt'];
    $cvr_m=$_POST['cvr_txt'];
    $zona_m=$_POST['zona_txt'];
    $clima_m=$_POST['clima_txt'];
    
$query="UPDATE `habitatmfps32` SET
 `cv_R`='$cvr_m',`zona_H`='$zona_m',`clima_H`='$clima_m' 
 WHERE `cv_H`='$cvh_m'";
$resultado=$conexion->query($query);
    
    
    ?>  
<center>
<nav class=" teal lighten-3 material-icons"><br>pan_tool</i><stan> MODIFICAR HABITAT </stan></nav>

<br><br>
<br>

<i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se modificó correctamente el recorrido de codigo <?php echo $cvh_m ;?>
<br><br>
    </em>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<br><br>
<a href="inicioHabitat2.php" class="waves-effect waves-light btn">INICIO

</center>










    </body>
</html>