<<!DOCTYPE html>

<html>
    <head>
<title>Form Usu</title>
</head>
    <body>


<?php 
include("");


$codigo_b=$_POST['cv_txt'];


?>

<form>
Código del usuario:<input type="text" name="cvu_txt" value="" required="" minlength="1" maxlength="1" placeholder="solo un numero">
<br><br>
    Código del boleto:<input type="text" name="cv1_txt" value="<?php echo $codigo_b;?>" required="" minlength="1" maxlength="1" placeholder="solo un numero">
    <br><br>
    Nombre del usuario: <input type="text" name="nom_txt" value="" required="" minlength="1" maxlength="1"  placeholder="solo un numero">
    <br><br>
    Edad del usuario:<input type="text" name="edad_txt" value="" required="" minlength="10" maxlength="20"  placeholder="martes/dia(00)/mes(00)">
    <br><br>
    
</form>

      
    </body>
</html>