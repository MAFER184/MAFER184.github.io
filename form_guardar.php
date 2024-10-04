<!DOCTYPE html>

<html>
    <head>
<title>form_g</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
</head>
    <body>
  <center>

<nav class=" teal lighten-3 material-icons"><br>monetization_on</i><stan> COMPRA DE BOLETOS </stan></nav>

<br><br><br>
</center>
<div class="container"><center>

    <form action="guardar.php" method="POST">
        <center>
            <br>
<div class="row">
    <div class="col s6 m6 l6">
    <i class="material-icons teal-text text-lighten-3">confirmation_number</i>

<i>Código del boleto</i><input type="text" name="cv_txt" value="" required="" minlength="1" maxlength="3" placeholder="solo un numero">
    <br><br>
    </div>
    <div class="col s6 m6 l6">
    <i class="material-icons teal-text text-lighten-3">class</i>
    Tipo de recorrido: <input type="text" name="cvr_txt" value="" required="" minlength="1" maxlength="1"  placeholder="solo un numero">
    <br><br><br>
    </div>
    <div class="col s10 m10 l10">
    <i class="material-icons teal-text text-lighten-3">event
    </i>

    Fecha del boleto:<input type="text" name="fecha_txt" value="" required="" minlength="10" maxlength="20"  placeholder="martes/dia(00)/mes(00)">
    <br><br>
    </div>
    </div>

    <button type="submit" class="waves-effect waves-light btn">continuar
</center>    
</form>

</div>

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


 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
   
</body>
</html>