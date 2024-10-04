<!DOCTYPE html>

<html>
    <head>

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
$id=$_REQUEST['cv_A'];

$query="SELECT * FROM `animalesmfps32` WHERE `cv_A`='$id' ";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
    
    
    <div>

    <center>

    <nav class=" teal lighten-3 material-icons"><br>pets</i><stan> MODIFICAR ANIMAL </stan></nav>


<br>
<div class="container">

<form method="POST" action="modA2.php" enctype="multipart/form-data">
<div class="row">
<div class="col s6 m6 l6">
<i class="material-icons teal-text text-lighten-3"><br><br>pets</i>

Clave del animal <input type="text"  name="cva_txt" value="<?php echo $row['cv_A'] ;?>">
</div>
<div class="col s6 m6 l6">
<i class="material-icons teal-text text-lighten-3"><br><br>pan_tool</i>

Clave del habitat<input type="text"  name="cvh_txt"   value="<?php echo $row['cv_H'] ;?>" >
</div>
<i class="material-icons teal-text text-lighten-3"><br><br>perm_identity
</i>

Nombre científico<input type="text"  name="nomcien_txt"   value="<?php echo $row['nom_cienA'] ;?>" >
<i class="material-icons teal-text text-lighten-3"><br><br>people_outline</i>
 
Nombre común<input type="text"  name="nomcom_txt"   value="<?php echo $row['nom_comA'] ;?>" >
<i class="material-icons teal-text text-lighten-3"><br><br>camera_alt</i>
 
Foto <br><br>

<img width="200px" height="200px"
 
 src="data:image/jpg;base64,<?php echo base64_encode($row['foto_A']);?>">

<input type="file"  name="foto_txt"   value="">
<br><br><br>
<?php } ?>










<button type="submit" class="waves-effect waves-light btn">MODIFICAR

</div>



</form>
</center>
<script type="text/javascript" src="js/materialize.min.js"></script>
</div>
    </body>
</html>