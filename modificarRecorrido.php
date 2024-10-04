<!DOCTYPE html>
<html>
<head>
    <title>Modificar Recorrido</title>
</head>
<body>
<?php 
include("conec.php");

// Obtener la clave del recorrido desde la URL
$id = $_GET['cv_R'] ?? '';

// Consultar los datos del recorrido
$query = "SELECT * FROM `recorridomfps32` WHERE `cv_R` = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $id); // 'i' para enteros
$stmt->execute();
$resultado = $stmt->get_result();
$row = $resultado->fetch_assoc();

if (!$row) {
    echo "No se encontró el recorrido con la clave proporcionada.";
    exit;
}
?>    

<form action="guardarModificacionRecorrido.php" method="POST">
    <center>
        Clave del Recorrido: 
        <input type="text" name="cv_R" value="<?php echo htmlspecialchars($row['cv_R']); ?>" readonly>
        <br><br>

        Hora Inicial: 
        <input type="text" name="hora_iR" value="<?php echo htmlspecialchars($row['hora_iR']); ?>" required maxlength="5" placeholder="Hora Inicial">
        <br><br>

        Hora Final: 
        <input type="text" name="hora_tR" value="<?php echo htmlspecialchars($row['hora_tR']); ?>" required maxlength="5" placeholder="Hora Final">
        <br><br>

        Número de Pasajeros: 
        <input type="text" name="num_pR" value="<?php echo htmlspecialchars($row['num_pR']); ?>" required maxlength="2" placeholder="Número de Pasajeros">
        <br><br>

        Precio: 
        <input type="text" name="precio_R" value="<?php echo htmlspecialchars($row['precio_R']); ?>" required maxlength="2" placeholder="Precio">
        <br><br>

        Día: 
        <input type="text" name="dia_R" value="<?php echo htmlspecialchars($row['dia_R']); ?>" required maxlength="10" placeholder="Día">
        <br><br>

        <button type="submit">Guardar Cambios</button>
    </center>
</form>
</body>
</html>
