<!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <!DOCTYPE html>
<html>
<head>
    <title>Formulario para Insertar Animal</title>
</head>
<body>
    <h2>Formulario para Insertar un Nuevo Animal</h2>

    <form action="gReco.php" method="POST" enctype="multipart/form-data">
        <center>
            Clave del Animal:
            <input type="text" name="cv_R" required minlength="1" maxlength="1" placeholder="Clave del Animal" value="">
            <br><br>

            Clave del Habitat:
            <input type="text" name="hi_txt" required minlength="1" maxlength="1" placeholder="Clave del habitat" value="">
            <br><br>

            Nombre Científico:
            <input type="text" name="nom_cienA" required minlength="1" maxlength="30" placeholder="Nombre Científico" value="">
            <br><br>

            Nombre Común:
            <input type="text" name="nom_comA" required minlength="1" maxlength="20" placeholder="Nombre Común" value="">
            <br><br>

          
            Foto:
            <input type="file" name="foto_A" required>
            <br><br>

            <button type="submit">Guardar Animal</button>
        </center>    
    </form>
</body>
</html>




    </body>
</html>