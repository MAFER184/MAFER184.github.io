<!DOCTYPE html>

<html>
    <head>       
        <title>inicio</title>
    </head>
    <body>     
     
<?php
include("conec.php");
$cvA=$_POST['cv_A'];
$cvH=$_POST['cv_H'];
$nomCien=$_POST['nom_cienA'];
$nomC=$_POST['nom_comA'];


$foto=addslashes(file_get_contents(($_FILES['foto_A']['tmp_name'])));


$query5="INSERT INTO `animalesmfps32`(`cv_A`, `cv_H`, `nom_cienA`, `nom_comA`, `foto_A`) VALUES 
('$cvA','$cvH','$nomCien','$nomC','$foto')";

$resultado5=$conexion->query($query5);


if($resultado5){echo"si";}

?>    
</body>
</html>