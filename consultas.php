<!DOCTYPE html>

<html>
    <head>
<title>consultas</title>
    </head>
    <body>
 <table width="50%" heigth="60%" border="2%"> 
<>
<th colspan="1"><a href="form_guardar.php">Nuevo usuario</a></th>
<th colspan="6">Usuarios registrado</th>
</tr>

<tr>
<td>Clave del boleto</td>
<td>Clave del recorrido</td>
<td>Fecha del recorrido</td>
<td>Nombre del Usuario</td>
<td colspan>Funciones</td>
</tr>
<?php 
include("conec.php");
$query="SELECT * FROM boletomfps32"; 
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>

<tr>
<td><?php echo $row['cv_B']?></td>
<td><?php echo $row['cv_R']?></td>
<td><?php echo $row['fecha_B']?></td>
<td><?php echo $row['nom_uB']?></td>

<td><a href="form_modicar.php?cv_B=<?php echo $row['cv_B'];?>">modi</a></td>
<td><a href="eliminar.php?cv_B=<?php echo $row['cv_B'];?>">eliminar</a></td>
</tr>



<?php
}
?>
</table>
    
</body>
</html>