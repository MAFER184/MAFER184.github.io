<!DOCTYPE html>

<html>
    <head>
<title>modificar</title>
    </head>

    <body>
<?php
include("conec.php");
$idphp=$_REQUEST['cv_txt'];

$cv_php=$_POST['cv_txt'];
 $cvr_php=$_POST['cvr_txt'];
 $fecha_php=$_POST['fecha_txt'];
 $nom_php=$_POST['nom_txt'];

$query="UPDATE boletomfps32 SET cv_B='$cv_php',cv_R='$cvr_php',fecha_B='$fecha_php',nom_uB='$nom_php' WHERE cv_B='$idphp'";
$resultado=$conexion->query($query);

?> 
</body>
</html>