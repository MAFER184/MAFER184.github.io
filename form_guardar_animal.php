<!DOCTYPE html>
<html>
<head>
    <title>Formulario para Insertar Animal</title>
</head>
<body>
    <h2>Formulario para Insertar un Nuevo Animal</h2>

    <form action="guardarAnimal.php" method="POST" enctype="multipart/form-data">
        <center>
            Clave del Animal:
            <input type="text" name="cv_A" required minlength="1" maxlength="1" placeholder="Clave del Animal" value="">
            <br><br>

            Clave del Habitat:
            <input type="text" name="cv_H" required minlength="1" maxlength="1" placeholder="Clave del habitat" value="">
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


