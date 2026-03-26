<?php
require_once 'conexion.php';

try {
    $stmt = $pdo->query("SELECT * FROM chuches");
    $productos = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error al obtener los productos: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver Productos - BD</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <a href="index.php" class="boton boton-volver">← Volver al inicio</a>

    <h1 class="titulo-principal">Productos en la Base de Datos</h1>

    <table class="tabla-chucherias">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Información</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $chuche): ?>
                <tr>
                    <td><?= htmlspecialchars($chuche['id']) ?></td>
                    <td><?= htmlspecialchars($chuche['nombre']) ?></td>
                    <td><?= htmlspecialchars($chuche['info']) ?></td>
                    <td><?= htmlspecialchars($chuche['precio']) ?> €</td>
                    <td>
                        <a href="eliminar.php?id=<?= $chuche['id'] ?>" class="boton boton-eliminar" onclick="return confirm('¿Seguro que quieres borrar esta chuche?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($productos)): ?>
                <tr>
                    <td colspan="5" style="text-align: center;">No hay productos en la base de datos.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>