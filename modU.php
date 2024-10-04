<!DOCTYPE html>
<html>
<head>
    <title>mod</title>

    
    
    
         <!--Import Google Icon Font-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body><center>
    
<nav class=" teal lighten-3 material-icons"><br>confirmation_number</i><stan> MODIFICAR BOLETO</stan></nav>
<br><br>
<?php 
include("conec.php");   
$cv2_php=$_REQUEST['cv_B'];


// Consulta para revisar datos del boleto
$queryBC="SELECT * FROM `boletomfps32` WHERE `cv_B`='$cv2_php'";
$resultadoBC = $conexion->query($queryBC);

while ($consulBC=$resultadoBC->fetch_assoc()) {
    // Definir cvr_php para la consulta del precio
    $cvr_php=$consulBC['cv_R'];
?>
    <form  method="POST" action="mod.php">
    
    <br> <br> <div class="container">
<div class="row">
    <div class="col s6 m6 l6">
    <i class="material-icons teal-text text-lighten-3">confirmation_number</i>

<i>Código del boleto</i><input type="text" name="cv_txt" value="<?php echo $consulBC['cv_B'] ?>" required="" minlength="1" maxlength="1" placeholder="solo un numero">
    <br><br>
    </div>
    <div class="col s6 m6 l6">
        
    <i class="material-icons teal-text text-lighten-3">class</i>
    
    Tipo de recorrido: <input type="text" name="cvr2_txt" value="<?php echo $consulBC['cv_R'] ?>" required="" minlength="1" maxlength="1"  placeholder="solo un numero">
    <br><br>
    </div>
    
    <div class="col s10 m10 l10">
    <i class="material-icons teal-text text-lighten-3"><br>event
    </i>

    Fecha del boleto:<input type="text" name="fecha_txt" value="<?php echo $consulBC['fecha_B'] ?>" required="" minlength="10" maxlength="20"  placeholder="martes/dia(00)/mes(00)">
    <br><br>
    </div>
    </div>

  
            <?php
            // Consulta del precio del recorrido
            $queryP = "SELECT `precio_R` FROM `recorridomfps32` WHERE `cv_R` = '$cvr_php'";
            $resultadoP = $conexion->query($queryP);
           
                $consulP = $resultadoP->fetch_assoc();
            ?>
    <br><br>
                Precio recorrido: <input type="text" name="precio_txt" value="<?php echo $consulP['precio_R']; ?>">
                <br><br>
            <?php
            
            
            

            
            ?>
            
<button type="submit" class="waves-effect waves-light btn">MODIFICAR

</center></div>
    </form>
<?php
}
?>

<br>
<br>



<footer class="page-footer teal lighten-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
      <center>  <em><h5 class="white-text">Zoologico paloma</h5></em>
        <h6 class="grey-text text-lighten-4">¡Un lugar de aventuras!</h6>
        </center>
      </div>
      <div class="col l4 offset-l2 s12">
        <i><h5 class="white-text">Menu</h5></i>
        <ul>
          <li><div class="divider"></div></li>
          
<li><a class="grey-text text-lighten-3" href="inicioBoletos.php">Taquilla</a></li>
<li><div class="divider"></div></li>
<li><a class="grey-text text-lighten-3" href="inicioHabitat2.php">Habitats</a></li>

<li><div class="divider"></div></li>
<li><a class="grey-text text-lighten-3"  href="inicioAnimales.php">Animales</a></li>

<li><div class="divider"></div></li>
<li><a class="grey-text text-lighten-3" href="recorrido.php">Recorridos</a></li>
<li><div class="divider"></div></li>
        
</ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2014 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">ZOOP</a>
    </div>
  </div>
</footer>



<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
