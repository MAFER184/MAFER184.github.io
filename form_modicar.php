<!DOCTYPE html>

<html>
    <head>
<title>modificar</title>
    </head>

    <body>
        <?php 
   include("conec.php");
   $id=$_REQUEST['cv_B'];
   $query="SELECT * FROM boletomfps32 WHERE cv_B='$id'";
   $resultado=$conexion->query($query);
   $row=$resultado->fetch_assoc();
   ?>
    
    <form action="modificar.php?id=<?php echo $row['cv_B'];?>" method="POST">

    Código del boleto:<input type="text" name="cv_txt" value="
    <?php
    echo $row['cv_B'];
    ?>">
    <br>

    Tipo de recorrido: <input type="text" name="cvr_txt" value="
    <?php
    echo $row['cv_R'];
    ?>">

    Fecha boleto:<input type="text" name="fecha_txt" value="
    <?php
    echo $row['fecha_B'];
    ?>">
    <br>

    Nombre del usuario:<input type="text" name="nom_txt" value="
    <?php
    echo $row['nom_uB'];
    ?>">
    <br>

    <button type="submit">modificar</button>
    
    
    </form>
</body>
</html>