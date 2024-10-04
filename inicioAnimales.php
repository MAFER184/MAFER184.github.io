<!DOCTYPE html>
<html>
<head>       
    <title>Inicio</title>
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

<center><img class="col s12 m12 l12" src="ma.png"></center>

<br><br>
<div class="container">
<center>
<form enctype="multipart/form-data">
<table width="60%" heigth="50%" border="2%">
<t>
   <th> <a href="form_gA.php">Nuevo Animal</a></th>
   <th>Datos animales</th>
</tr>

<tr>
<td>Clave del animal</td>
<td>CLave del habitat</td>
<td>Nombre científico</td>
<td>Nombre común</td>
<td>Foto</td>
<td>Funciones extra</td>

</tr>


<?php 
include("conec.php");
$query="SELECT * FROM `animalesmfps32`";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){

?>
<tr>
<td><?php echo $row['cv_A']; ?></td>
<td><?php echo $row['cv_H']; ?></td>
<td><?php echo $row['nom_cienA']; ?></td>
<td><?php echo $row['nom_comA']; ?></td>
<td>

 <img width="200px" height="200px"
 
 src="data:image/jpg;base64,<?php echo base64_encode($row['foto_A']);?>">

</td>

<td><a href="form_modA.php?cv_A=<?php echo$row['cv_A'] ;?>">modificar</a>
<a href="eliA.php?cv_A=<?php echo$row['cv_A'] ;?>">eliminar</a>
</td>

</tr>

<?php 
}
?>

</table>












</form>
</center>

<script>
        document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems);
 });
</script>
<script type="text/javascript" src="js/materialize.min.js"></script>
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
                <i><h5 class="white-text">Menú</h5></i>
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
