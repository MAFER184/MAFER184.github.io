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
    <div>
<center>

<nav class=" teal lighten-3 material-icons"><br>assignment</i><stan> MODIFICAR RECORRIDOS </stan></nav>

<div class="container">

    <form action="modnR.php" method="POST">
<?php
include("conec.php");
$id=$_REQUEST['cv_R'];

$query="SELECT * FROM `recorridomfps32` WHERE `cv_R`='$id'";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
<br><br>
<div class="row">
<div class="col s4 m4 l4">

<i class="material-icons teal-text text-lighten-3"><br>class</i>
Clave del recorrido<input type="text" value="<?php echo $row['cv_R']; ?>" name="cv_R">
</div>
<div class="col s4 m4 l4">
    <i class="material-icons teal-text text-lighten-3"><br>alarm_on</i>
Hora de inicio<input type="text" value="<?php echo $row['hora_iR']; ?>" name="hi_m">
</div>

<div class="col s4 m4 l4">
<i class="material-icons teal-text text-lighten-3"><br>alarm_off</i>
Hora de termino<input type="text" value="<?php echo $row['hora_tR']; ?>"name="ht_m" >
</div>
<br><br><br>

<div class="col s6 m6 l6">
<i class="material-icons teal-text text-lighten-3"><br><br>attach_money</i>
Precio<input type="text" value="<?php echo $row['precio_R'];  ?>"name="precio_m" >
</div>

<div class="col s6 m6 l6">
<i class="material-icons teal-text text-lighten-3"><br><br>date_range</i>
Día<input type="text" value="<?php echo $row['dia_R']; ?>" name="dia_m">
</div>

</div>
<br><br>

<button type="submit" class="waves-effect waves-light btn">MODIFICAR
    

<?php }?>
</form>
<script type="text/javascript" src="js/materialize.min.js"></script>
</center>
</div>    
</body>
</html>