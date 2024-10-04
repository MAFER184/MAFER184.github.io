<!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>form_mH</title>
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
$id=$_REQUEST['cv_H'];

$query="SELECT * FROM `habitatmfps32` WHERE `cv_H`='$id'";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
<center>
<nav class=" teal lighten-3 material-icons"><br>pan_tool</i><stan> MODIFICAR HABITATS </stan></nav>

<br><br>


<form action="modH.php" method="POST">

<div class="row">
<div class="col s6 m6 l6">
<i class="material-icons teal-text text-lighten-3">pan_tool</i>

Clave del habitat<input type="text" name="cvh_txt" value="<?php echo $row['cv_H'];?>"><br><br>
</div>
<div class="col s6 m6 l6">
<i class="material-icons teal-text text-lighten-3">class</i>

Clave del Recorrido<input type="text" name="cvr_txt" value="<?php echo $row['cv_R'];?>"><br><br>
</div>
<i class="material-icons teal-text text-lighten-3">room
</i>

Zona <input type="text" name="zona_txt" value="<?php echo $row['zona_H'];?>"><br><br>
<i class="material-icons teal-text text-lighten-3">wb_sunny</i>

Clima<input type="text" name="clima_txt" value="<?php echo $row['clima_H'];?>"><br><br>
</div>
<button type="submit" class="waves-effect waves-light btn">MODIFCAR
</form>

<?php 
}
?>

      
<script type="text/javascript" src="js/materialize.min.js"></script>
</center>
    </body>
</html>