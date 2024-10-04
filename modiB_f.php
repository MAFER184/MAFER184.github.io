<!DOCTYPE <!DOCTYPE html>

<html>
    <head>       
        <title>inicio</title>
    </head>
    <body>     
<?php 
include("conec.php");

    $cvb_php=$_POST['cv3_txt'];
 $cvr1_php=$_POST['cvr_txt'];
 $fecha1_php=$_POST['fecha_txt'];
 


$query="INSERT INTO `boletomfps32`(`cv_B`, `cv_R`, `fecha_B`) VALUES ('$cvb_php','$cvr1_php','$fecha1_php')";
$resultado=$conexion->query($query);


?>

</body>
</html>