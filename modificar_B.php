<!DOCTYPE <!DOCTYPE html>

<html>
    <head>       
        <title>modi</title>
    </head>
    <body>     
     

    <form method="POST" action="modiB_f.php">
<?php 
include("conec.php");


$id=$_REQUEST['cv_B'];


$query="SELECT * FROM `boletomfps32` WHERE `cv_B`='$id'";



$resultado=$conexion->query($query);


while($consulBC=$resultado->fetch_assoc()){

?>
Código del boleto:<input type="text" name="cv3_txt" value="<?php echo $consulBC['cv_B'];?>" readonly>
<br><br>

Tipo de recorrido: <input type="text" name="cvr_txt" value="<?php echo $consulBC['cv_R'];?>" required="" minlength="1" maxlength="1"  placeholder="solo un numero">
<br><br>

Fecha boleto:<input type="text" name="fecha_txt" value="<?php echo $consulBC['fecha_B'];?>" required="" minlength="10" maxlength="20"  placeholder="martes/dia(00)/mes(00)">

<br><br>


<button type="submite">modificar</button>


<?php



}







//actualizar datos




    ?>
    

    </form>



</body>
</html>