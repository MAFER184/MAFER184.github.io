<!DOCTYPE html>

<html>
    <head>
<title>eliminar</title>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>

    <body>
        <?php 
 include("conec.php");
$idphp=$_REQUEST['cv_B'];
 $query="DELETE FROM boletomfps32 WHERE cv_B='$idphp'";
 $resultado= $conexion->query($query);

 ?>
 <center>
<nav class=" teal lighten-3 material-icons"><br>confirmation_number</i><stan> ELIMINAR BOLETO </stan></nav>


<div>

<br>
<br>

<br><br>    <br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se eliminó correctamente el boleto de codigo <?php echo $idphp ;?>
    </em>
</div>
<br><br>
<a href="inicioBoletos.php" class="waves-effect waves-light btn">INICIO
</a>
</center>

<br>
<br>

<br>
<br>
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