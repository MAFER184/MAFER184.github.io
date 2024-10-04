<!DOCTYPE <!DOCTYPE html>

<html>
    <head>       
        <title>eliminar</title>
    </head>
    <body>     
        <?php 
        include("conec.php");
$id=$_REQUEST['cv_B'];


$query="DELETE FROM `boletomfps32` WHERE `cv_B`='$id'";
$resultado=$conexion->query($query);


        ?>
    




</body>
</html>