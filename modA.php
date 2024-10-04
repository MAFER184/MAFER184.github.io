<!DOCTYPE html>
<html>
<head>
    <title>Modificar Animal</title>
</head>
<body>
<?php 
include("conec.php");

// Obtener la clave del animal desde la URL
$id = $_GET['cv_A'] ?? '';

// Consultar los datos del animal
$query = "SELECT * FROM `animalesmfps32` WHERE `cv_A` = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("s", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$row = $resultado->fetch_assoc();

if (!$row) {
    echo "No se encontró el animal con la clave proporcionada.";
    exit;
}
?>    

<form action="guardarModificacionAnimal.php" method="POST" enctype="multipart/form-data">
    <center>
        Clave del Animal: 
        <input type="text" name="cv_A" value="<?php echo htmlspecialchars($row['cv_A']); ?>" readonly>
        <br><br>

        Clave del Recorrido: 
        <input type="text" name="cv_H" value="<?php echo htmlspecialchars($row['cv_H']); ?>" required minlength="1" maxlength="1" placeholder="Clave del Recorrido">
        <br><br>

        Nombre Científico: 
        <input type="text" name="nom_cienA" value="<?php echo htmlspecialchars($row['nom_cienA']); ?>" required minlength="1" maxlength="30" placeholder="Nombre Científico">
        <br><br>

        Nombre Común: 
        <input type="text" name="nom_comA" value="<?php echo htmlspecialchars($row['nom_comA']); ?>" required minlength="1" maxlength="20" placeholder="Nombre Común">
        <br><br>

        Cantidad: 
        <input type="text" name="cantidad_A" value="<?php echo htmlspecialchars($row['cantidad_A'] ?? ''); ?>" required minlength="1" maxlength="50" placeholder="Cantidad">
        <br><br>

        Foto Actual: 
        <?php if (!empty($row['foto_A'])): ?>
            <img width="100px" height="100px" src="data:image/jpeg;base64,<?php echo base64_encode($row['foto_A']); ?>" alt="Foto del Animal">
        <?php else: ?>
            No disponible
        <?php endif; ?>
        <br><br>

        Nueva Foto: 
        <input type="file" name="foto_A">
        <br><br>

        <button type="submit">Guardar Cambios</button>
    </center>
</form>
</body>
</html>
