<!DOCTYPE html>

<html>
    <head>
     <!--Import Google Icon Font-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    

    </head>
    <body>
<center>
    <nav class=" teal lighten-3 material-icons"><br>pets</i><stan> AÑADIR ANIMAL </stan></nav>

<br><br>
    <?php 
    include("conec.php");
    
    $cva_php=$_POST['cva_txt'];


    $cvh1_php=$_POST['cvh_txt'];
$nomci_php=$_POST['nomcien_txt'];
    $nomcu_php=$_POST['nomcom_txt'];
    $foto_php=addslashes(file_get_contents($_FILES['foto_txt']['tmp_name']));
    

    
$query="INSERT INTO `animalesmfps32`(`cv_A`, `cv_H`, `nom_cienA`, `nom_comA`, `foto_A`) VALUES
 ('$cva_php','$cvh1_php','$nomci_php','$nomcu_php','$foto_php')";
$resultado=$conexion->query($query);





    ?>
<div>
    <br><br>
    <i class="material-icons teal-text text-lighten-3">done</i>
    <br><br>
    <em>
        Se agregó correctamente el animal de codigo <?php echo $cva_php ;?>
    </em>
</div>


<br>
<br>
<a href="inicioAnimales.php" class="waves-effect waves-light btn">INICIO

<script type="text/javascript" src="js/materialize.min.js"></script>
</center>
    </body>
</html>