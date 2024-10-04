<!DOCTYPE html>
<html lang="es">
<head>
    <title>Modificar Hábitat</title>
</head>
<body>
    <?php
    include("conec.php");

    // Obtener datos del formulario
    $cv_H = $_POST['cv_H'];
    $cv_R = $_POST['cv_R'];
    $zona_H = $_POST['zona_H'];
    $clima_H = $_POST['clima_H'];

    // Preparar la consulta de actualización
    $query = "UPDATE habitatmfps32 
              SET cv_R = ?, zona_H = ?, clima_H = ?
              WHERE cv_H = ?";

    // Preparar la consulta
    if ($stmt = $conexion->prepare($query)) {
        // Vincular los parámetros
        $stmt->bind_param("isss", $cv_R, $zona_H, $clima_H, $cv_H);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Hábitat actualizado correctamente.";
        } else {
            echo "Error al actualizar el hábitat: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    ?>

    <a href="inicioHabitat.php">Volver al formulario</a>
</body>
</html>
