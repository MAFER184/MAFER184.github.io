 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>inicioH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    
    
    
    
    </head>
    <body>





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

  <li><a href="#!"><i class="material-icons">AREAS</i></a></li>
  <li><div class="divider"></div></li>
  <li><a href="index.html">Pagina principal</a></li>
  <li><div class="divider"></div></li>
  <li><a  href="inicioBoletos.php">Taquilla</a></li>
  <li><div class="divider"></div></li>
  <li><a  href="inicioHabitat2.php">Habitats</a></li>
  
  <li><div class="divider"></div></li>
  <li><a   href="inicioAnimales.php">Animales</a></li>
  
  <li><div class="divider"></div></li>
  <li><a  href="recorrido.php">Recorridos</a></li>
  <li><div class="divider"></div></li>
  


  
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
</nav>




<br><br>
<center><img class="col s12 m12 l12" src="mh.png"></center>

<div class="container">
      
<table width="50%" heigth="60%" border="2%">
<tr>
    <th><a href="nuevoH.php">Nuevo habitat</a></th>
    <th>Habitats</th>
</tr>

<tr>
<td>Clave de habitat</td>
<td>Clave de recorrido</td>
<td>Zona</td>
<td>Clima</td>
<td>Funciones extra</td>


</tr>

<?php
include("conec.php");
$query="SELECT * FROM `habitatmfps32`";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>

<tr>

<td><?php echo $row['cv_H'] ;?></td>
<td><?php echo $row['cv_R'] ;?></td>
<td><?php echo $row['zona_H'] ;?></td>
<td><?php echo $row['clima_H'] ;?></td>

<td><a href="form_modH.php?cv_H=<?php echo $row['cv_H'] ;?>">modificar</a>
<a href="eliminarH.php?cv_H=<?php echo $row['cv_H'] ;?>">eliminar</a>

</td>


</tr>


<?php }?>





</table>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
  
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
  </div>

  <br><br><br><br>

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






  </body>
</html>