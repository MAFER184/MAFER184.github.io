<!DOCTYPE html>

<html>
    <head>       
        <title>inicio</title>
    
<style>
.img-responsive1 {
    width: 100%;
    height: auto;
    max-width:100%;
    float: left; /* La imagen se alineará a la izquierda del texto */
    margin-right: 15px; /* Espacio entre la imagen y el texto */

}
</style>    
    
    
    
    
    
    
    
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
    ?>
 


 <nav class=" teal lighten-3"  >


<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background">
      
      <img src="fon5.jpg">
    </div>
    <a href="#user"><img class="circle" src="zoo.jpg"></a>
    <a href="#name"><span class=" white-text  name">Trabajador</span></a>
    <a href="#email"><span class="white-text email">zoop0812@gmail.com</a>
  </div></li>

  <li><a href="#!"><i class="material-icons">MENU</i></a></li>
  <li><div class="divider"></div></li>
                 
  <li><a  href="index.html">Pagina principal</a></li>
  <li><div class="divider"></div></li>
  <li><a  href="ibo.php">Nuestros recorridos</a></li>
  <li><div class="divider"></div></li>
  <li><a  href="ia.php">Nuestros animales</a></li>
 
  <li><div class="divider"></div></li>


  
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
</nav>


<br><br>
<center>
  
<img class="img-responsive1" src="zr.png">

<br>

</center>




<div class="container">

<table border="1">
  <thead>
    <tr>
      <th class="teal-text text-lighten-1">Horario del Recorrido</th>
      <th  class="teal-text text-lighten-1">Día</th>
      <th  class="teal-text text-lighten-1">Costo del Boleto</th>
      <th  class="teal-text text-lighten-1">Zona del Hábitat</th>
      <th  class="teal-text text-lighten-1"> Clima</th>
      <th  class="teal-text text-lighten-1">Animales en el Hábitat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>10:00 - 12:00</td>
      <td>Lunes</td>
      <td>$100</td>
      <td>Zona Norte</td>
      <td>Tropical</td>
      <td>León (Panthera leo)</td>
    </tr>
    <tr>
      <td>13:00 - 15:00</td>
      <td>Martes</td>
      <td>$120</td>
      <td>Zona Este</td>
      <td>Desértico</td>
      <td>Elefante (Elephas maximus)</td>
    </tr>
    <tr>
      <td>09:00 - 11:00</td>
      <td>Miércoles</td>
      <td>$150</td>
      <td>Zona Oeste</td>
      <td>Templado</td>
      <td>Oso Pardo (Ursus arctos)</td>
    </tr>
    <tr>
      <td>14:00 - 16:00</td>
      <td>Jueves</td>
      <td>$160</td>
      <td>Zona Sur</td>
      <td>Bosque</td>
      <td>Guacamaya Roja (Ara macao)</td>
    </tr>
    <tr>
      <td>11:00 - 13:00</td>
      <td>Viernes</td>
      <td>$110</td>
      <td>Zona Central</td>
      <td>Húmedo</td>
      <td>Panda (Ailuropoda melanoleuca)</td>
    </tr>
  </tbody>
</table>


<br><br><br>
<script>
        
        document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems);
 });
 document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.carousel');
   var instances = M.Carousel.init(elems);
 });


   </script>



<script type="text/javascript" src="js/materialize.min.js">
</script>
</div>


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
                  
  <li><a class="grey-text text-lighten-3" href="index.html">Pagina principal</a></li>
  <li><div class="divider"></div></li>
  <li><a class="grey-text text-lighten-3" href="ibo.php">Nuestros recorridos</a></li>
  <li><div class="divider"></div></li>
  <li><a  class="grey-text text-lighten-3" href="ia.php">Nuestros animales</a></li>
  
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

</body>

</html>	 