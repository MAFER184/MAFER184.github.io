<?php
include("conec.php");

// Obtener los datos del formulario
$cv_A = $_POST['cv_A'];
$cv_H = $_POST['cv_H'];
$nom_cienA = $_POST['nom_cienA'];
$nom_comA = $_POST['nom_comA'];
$cantidad_A = $_POST['cantidad_A'];

// Manejo de la foto
$foto_A = null;
if (!empty($_FILES['foto_A']['tmp_name'])) {
    $foto_A = file_get_contents($_FILES['foto_A']['tmp_name']);
} else {
    // Si no se carga una nueva foto, usar la foto actual
    $foto_A = $_POST['foto_A_actual'];
}

// Preparar la consulta para actualizar los datos
$query = "UPDATE `animalesmfps32` SET `cv_H` = ?, `nom_cienA` = ?, `nom_comA` = ?, `cantidad_A` = ?, `foto_A` = ? WHERE `cv_A` = ?";
$stmt = $conexion->prepare($query);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conexion->error);
}

// Asignar valores a los parámetros de la consulta
$stmt->bind_param("sssssb", $cv_H, $nom_cienA, $nom_comA, $cantidad_A, $foto_A, $cv_A);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Modificación exitosa.";
} else {
    echo "Error al modificar: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
