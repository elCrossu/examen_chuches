<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Histórico CSV</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <a href="index.php" class="boton boton-volver">← Volver al inicio</a>

    <h1 class="titulo-principal">Histórico de Inserciones (CSV)</h1>

    <table class="tabla-chucherias">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Información</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ruta_csv = __DIR__ . '/chuches.csv';

            if (file_exists($ruta_csv)) {
                $archivo = fopen($ruta_csv, "r");
                while (($fila = fgetcsv($archivo)) !== FALSE) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($fila[0] ?? '') . "</td>";
                    echo "<td>" . htmlspecialchars($fila[1] ?? '') . "</td>";
                    echo "<td>" . htmlspecialchars($fila[2] ?? '') . "</td>";
                    echo "<td>" . htmlspecialchars($fila[3] ?? '') . " €</td>";
                    echo "</tr>";
                }
                fclose($archivo);
            } else {
                echo "<tr><td colspan='4' style='text-align: center;'>El archivo CSV aún no existe. Inserta algún dato primero.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>