<?php
require_once 'conexion.php';

class Log
{
    private static function obtenerRuta()
    {
        $directorio = __DIR__ . '/logs';

        if (!is_dir($directorio)) {
            mkdir($directorio, 0777, true);
        }
        return $directorio . '/registro_app.log';
    }

    public static function debug($mensaje)
    {
        file_put_contents(self::obtenerRuta(), date('Y-m-d H:i:s') . " [DEPURACIÓN] " . $mensaje . PHP_EOL, FILE_APPEND);
    }

    public static function error($mensaje)
    {
        file_put_contents(self::obtenerRuta(), date('Y-m-d H:i:s') . " [ERROR] " . $mensaje . PHP_EOL, FILE_APPEND);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = !empty($_POST['id']) ? $_POST['id'] : null;
    $nombre = $_POST['nombre'];
    $info = $_POST['info'];
    $precio = $_POST['precio'];

    try {
        if ($id) {
            $sql = "UPDATE chuches SET nombre = :nombre, info = :info, precio = :precio WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':nombre' => $nombre, ':info' => $info, ':precio' => $precio, ':id' => $id]);

            Log::debug("Éxito: Se ha modificado correctamente la chuchería con el ID $id en la base de datos.");
            $mensaje_bd = "Producto modificado correctamente en la base de datos.";
        } else {
            $sql = "INSERT INTO chuches (nombre, info, precio) VALUES (:nombre, :info, :precio)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':nombre' => $nombre, ':info' => $info, ':precio' => $precio]);

            $nuevo_id = $pdo->lastInsertId();
            Log::debug("Éxito: Se ha guardado una nueva chuchería en la base de datos. El sistema le ha asignado el ID $nuevo_id.");
            $mensaje_bd = "Producto insertado correctamente en la base de datos.";
        }

        $archivo_csv = fopen(__DIR__ . '/chuches.csv', 'a');
        if ($archivo_csv) {
            fputcsv($archivo_csv, [$id ? $id : 'NUEVO', $nombre, $info, $precio]);
            fclose($archivo_csv);
            $mensaje_csv = "Datos guardados en el archivo CSV.";
        } else {
            Log::error("Fallo: No se ha podido abrir ni crear el archivo CSV para guardar los datos.");
            $mensaje_csv = "Error al guardar en el CSV.";
        }

        echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Éxito</title><link rel='stylesheet' href='estilos.css'></head><body>";
        echo "<div class='caja-mensaje'>";
        echo "<h2 class='texto-exito'>Operación completada</h2>";
        echo "<p><strong>Base de Datos:</strong> $mensaje_bd</p>";
        echo "<p><strong>CSV:</strong> $mensaje_csv</p>";
        echo "<br>";
        echo "<a class='boton boton-enlace-bd' href='index.php'>Volver al formulario</a>";
        echo "</div></body></html>";
    } catch (PDOException $e) {
        Log::error("Fallo crítico en la base de datos al intentar guardar o modificar: " . $e->getMessage());

        echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Error</title><link rel='stylesheet' href='estilos.css'></head><body>";
        echo "<div class='caja-mensaje'>";
        echo "<h2 class='texto-error'>Ha ocurrido un error</h2>";
        echo "<p>Revisa la carpeta de logs para ver qué ha fallado exactamente.</p>";
        echo "<br>";
        echo "<a class='boton boton-volver' href='index.php'>Volver al formulario</a>";
        echo "</div></body></html>";
    }
} else {
    header("Location: index.php");
    exit();
}
