<!DOCTYPE <!DOCTYPE html>

<html>
    <head>       
        <title>inicio</title>
    </head>
    <body>     
     
    <?php
include("conec.php");

// Obtener los datos del formulario
$cv_R = $_POST['cv_R'];
$hora_iR = $_POST['hora_iR'];
$hora_tR = $_POST['hora_tR'];
$num_pR = $_POST['num_pR'];
$precio_R = $_POST['precio_R'];
$dia_R = $_POST['dia_R'];

// Preparar la consulta SQL para actualizar el recorrido
$query = "UPDATE `recorridomfps32` SET 
    `hora_iR` = ?, 
    `hora_tR` = ?, 
    `num_pR` = ?, 
    `precio_R` = ?, 
    `dia_R` = ? 
    WHERE `cv_R` = ?";

$stmt = $conexion->prepare($query);
if ($stmt === false) {
    die("Error al preparar la consulta: " . $conexion->error);
}

// 's' para string, 'i' para integer; el último 's' es para el parámetro `cv_R`
$stmt->bind_param("ssiiss", $hora_iR, $hora_tR, $num_pR, $precio_R, $dia_R, $cv_R);

if ($stmt->execute()) {
    echo "Recorrido modificado exitosamente.";
} else {
    echo "Error al modificar el recorrido: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>


</body>
</html>