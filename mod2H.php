<!DOCTYPE html>
<html>
<head>
    <title>Modificar Hábitat</title>
</head>
<body>

<form action="inicioHabitat.php">
<?php 
include("conec.php");   

$id2=$_POST['cv1_txt'];
$cvr=$_POST['cvr1_txt'];
$zona=$_POST['zona1_txt'];
$clima=$_POST['clima1_txt'];

// Consulta para obtener los datos del hábitat
$queryHC = "UPDATE `habitatmfps32` SET 
`cv_R`='$cvr',`zona_H`='$zona',`clima_H`='$clima' 
WHERE `cv_H`";
$resultadoHC=$conexion->query($queryHC);
if($resultadoHC){
echo "si";

}

?>
 ¡Los cambios fueron hechos!Regresa a la pagina principal
 <button type="submite" >REGRESAR</button>

<?php

?>

</form>
</body>
</html>
