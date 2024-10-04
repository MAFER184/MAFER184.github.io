<!DOCTYPE html>

<html>
    <head>       
        <title>inicio</title>
    </head>
    <body>     
<?php      
    include("conec.php");


    ?>
    
    <table  width="60%" heigth="50%" border="2px">
        
    <th colspan="1"><a href="guardarH.php">Nuevo Habitat</a></th>
    <th colspan="6">Usuarios registrado</th>
</tr>

<tr>
    <td>Clave del Habitat</td>
<td>Clave del recorrido</td>
<td>Zona Habitat</td>
<td>clima Habitat</td>
<td >Funciones</td>
</tr>
<?php 
$query="SELECT * FROM `habitatmfps32`";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){


?>
<tr>
    <td><?php echo $row['cv_H'] ;?></td>
    <td><?php echo $row['cv_R'] ;?></td>
    
<td><?php echo $row['zona_H'] ;?></td>
<td><?php echo $row['clima_H'] ;?></td>
<td><a href="modH.php?cv_H=<?php echo $row['cv_H']; ?>">modificar</a>

<a href="eliminarH.php?cv_H=<?php echo $row['cv_H'];?>">eliminar</a></td>

</tr>



<?php
}
?>
</table>
</body>
</html>